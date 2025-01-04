<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addimage");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('storage'), $fileName);

            $path = 'storage/' . $fileName;

            $gallery = new Gallery();  

            $gallery->path = $path;

            $gallery->save();
        }
    
        return redirect()->route('dashboard')->with('success', 'Rasm muvaffaqiyatli qo\'shildi.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = gallery::find($id);
        $image->delete();
        return redirect()->route('dashboard');
    }
}
