<?php
namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::all();
        return view('mechanics.index', compact('mechanics'));
    }

    public function create()
    {
        return view('mechanics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
        ]);

        Mechanic::create($request->all());
        return redirect()->route('mechanics.index');
    }

    public function show(Mechanic $mechanic)
    {
        return view('mechanics.show', compact('mechanic'));
    }

    public function edit(Mechanic $mechanic)
    {
        return view('mechanics.edit', compact('mechanic'));
    }

    public function update(Request $request, Mechanic $mechanic)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
        ]);

        $mechanic->update($request->all());
        return redirect()->route('mechanics.index');
    }

    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();
        return redirect()->route('mechanics.index');
    }
}
