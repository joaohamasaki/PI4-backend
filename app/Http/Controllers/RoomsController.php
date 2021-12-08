<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Room;
use App\Models\Category;
use App\Models\Add;

class RoomsController extends Controller
{
    public function index()
    {
        return view('room.index')->with('rooms', Room::all());
    }

    public function indexApi()
    {
        return response()->json(Room::all());
    }

    public function show(Room $room)
    {
        return view('room.show')->with('room', $room);
    }

    public function create()
    {
        return view('room.create')->with(['categories' => Category::all(), 'adds' => Add::all()]);
    }

    public function store(Request $request)
    {

        if ($request->image) {
            $image = $request->file('image')->store('/public/rooms');
            $image = str_replace('public/', 'storage/', $image);
        } else {
            $image = "storage/rooms/coworklogopadrao.png";
        }

        $room = Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'published_at' => $request->published_at,
            'category_id' => $request->category_id,
            'image' => $image
        ]);

        $room->adds()->sync($request->adds);
        session()->flash('success', 'Seu espaço foi criado com sucesso');
        return redirect(route('room.index'));
    }

    public function edit(Room $room)
    {
        return view('room.edit')->with(['room' => $room, 'categories' => Category::all(), 'adds' => Add::all()]);
    }

    public function update(Request $request, Room $room)
    {

        if ($request->image) {
            $image = $request->file('image')->store('/public/rooms');
            $image = str_replace('public/', 'storage/', $image);
            if ($room->image != "storage/rooms/coworklogopadrao.png")
                Storage::delete(str_replace('storage/', '', $room->image));
        } else {
            $image = $room->image;
        }

        $room->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'published_at' => $request->published_at,
            'category_id' => $request->category_id,
            'image' => $image
        ]);
        $room->adds()->sync($request->adds);
        session()->flash('success', 'Seu espaço foi alterado com sucesso');
        return redirect(route('room.index'));
    }

    public function destroy(Room $room)
    {
        $room->delete();
        session()->flash('success', 'Seu espaço foi apagado com sucesso');
        return redirect(route('room.index'));
    }

    public function trash()
    {
        return view('room.trash')->with('rooms', Room::onlyTrashed()->get());
    }

    public function restore($id)
    {

        $room = Room::onlyTrashed()->where('id', $id)->firstOrFail();
        $room->restore();
        session()->flash('success', "Seu espaço foi restaurado com sucesso");
        return redirect(route('room.trash'));
    }
}
