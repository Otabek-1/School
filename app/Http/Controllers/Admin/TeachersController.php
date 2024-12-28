<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lavozim;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
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
        $positions = Lavozim::all();
        return view('admin.addTeacher', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = Teachers::create($request->all());
        if ($request->hasFile('image')) {
            // Faylni saqlash (public/storage papkasiga)
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Yangi nom
            $file->move(public_path('storage'), $fileName); // Faylni ko'chirish

            // Fayl yo'lini bazaga yozish
            $teacher->image = 'storage/' . $fileName;
        }
        $teacher->save();
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
        $positions = Lavozim::all();
        $teacher = Teachers::findOrfail($id);
        return view('admin.updateTeacher', compact('positions', 'teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $teacher = Teachers::findOrFail($id);


        $teacher->fullname = $request->input('fullname');
        $teacher->number = $request->input('number');
        $teacher->gmail = $request->input('gmail');
        $teacher->work_time = $request->input('work_time');
        $teacher->lavozim_id = $request->input('lavozim');
        $teacher->biography = $request->input('biography');


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('storage', 'public');
            $teacher->image = $imagePath;
        }


        $teacher->save();


        return redirect()->route('dashboard');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();
        return redirect()->route('dashboard');
    }

}
