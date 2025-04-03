<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\announcments;
use Illuminate\Http\Request;

class announcController extends Controller
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
        return view("admin.addAnnouncment");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $new = new announcments();
    $new->title = $request->title;
    $new->body = $request->body;
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage'), $fileName);
        $new->image = 'storage/' . $fileName;
    }

    $new->save();
    return redirect()->route('dashboard')->with('success', 'Yangilik muvaffaqiyatli qo\'shildi.');
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
        $elon = announcments::find($id);
        return view("admin.editAnn", compact('elon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $elon = announcments::find($id);
    
        if (!$elon) {
            return redirect()->route('dashboard')->with('error', 'E\'lon topilmadi.');
        }
    
  
        $elon->title = $request->title;
        $elon->body = $request->body;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage'), $fileName);
            $elon->image = 'storage/' . $fileName;
        }
    
        
        $elon->save();

        return redirect()->route('dashboard')->with('success', 'Yangilik muvaffaqiyatli yangilandi.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = announcments::findOrFail($id);
        $new->delete();
        return redirect()->route("dashboard");
    }
}
