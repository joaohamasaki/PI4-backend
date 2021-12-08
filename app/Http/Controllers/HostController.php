<?php

namespace App\Http\Controllers;

use App\Models\Host;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
        return view('host.index')->with('hosts', Host::all());        
    }

    public function create()
    {
        return view('host.create');
    }

    public function store(Request $request)
    {
        Host::create($request->all()); 
        session()->flash('success', "Suas informações foram cadastradas com sucesso"); 
        return redirect(route('room.index'));
    }

    public function show(Host $host)
    {
        return response()->json($host);
    }

    public function edit(Host $host)
    {
        return view('host.edit')->with('host', $host);
    }


    public function update(Request $request, Host $host)
    {
        $host->update($request->all());
       session()->flash('success', "Seu espaço foi alterado com sucesso"); 
       return redirect(route('host.index'));
    }

    public function destroy(Host $host)
    {
        $host->delete();
        session()->flash('success', "Seu cadastro foi deletado com sucesso"); 
        return redirect(route('host.index'));
    }
}
