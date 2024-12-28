<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lavozim;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addPosition');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $position = Lavozim::create($request->all());
        $position->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $position = Lavozim::findOrfail($id);
        return view('admin.editPosition', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $position = Lavozim::findOrfail($id);
        $position->update($request->all());
        $position->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Lavozim::findOrfail($id);
        $position->delete();
        return redirect()->route('dashboard');
    }
}
