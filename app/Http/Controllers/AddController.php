<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;

class AddController extends Controller
{
    
    public function index()
    {
        return view('add.index')->with('adds', Add::all());
    }

    public function create()
    {
        return view('add.create');
    }

    public function store(Request $request)
    {
        Add::create($request->all()); 
        session()->flash('success', "Seus adicionais foram cadastrados com sucesso"); 
        return redirect(route('add.index'));
    }

    public function show(Add $add)
    {
        return response()->json($add);
    }

    public function edit(Add $add)
    {
        return view('add.edit')->with('add',$add);
    }

    public function update(Request $request, Add $add)
    {
       $add->update($request->all());
       session()->flash('success', "Seu adicional foi alterado com sucesso"); 
       return redirect(route('add.index'));
    }

    public function destroy(Add $add)
    {
        if ($add->rooms()->count() > 0) {
            session()->flash('error', "Você não pode deletar uma infraestrutura que esteja associada a um espaço");
            return redirect(route('add.index'));
        }
        $add->delete();
        session()->flash('success', "Seu adicional foi deletado com sucesso"); 
        return redirect(route('add.index'));
    }
}
