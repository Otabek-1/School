<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\qoshimchaDars;
use App\Models\Teachers;
use Illuminate\Http\Request;

class EduController extends Controller
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
        $teachers = Teachers::all();
        return view('admin.addEdu', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'participants' => 'required|integer',
            'teacher_id' => 'required|exists:teachers,id',
            'work_days' => 'required|string|max:255',
            'work_time' => 'required|string|max:255',
            'classes' => 'required|array',
            'classes.*' => 'string',
        ]);
        $validated['classes'] = json_encode(['class' => $validated['classes']]);
        qoshimchaDars::create($validated);
        return redirect()->route('dashboard')->with('success', 'O\'qituvchi muvaffaqiyatli qo\'shildi.');
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
        $teachers = Teachers::all();
        $circle = qoshimchaDars::findOrfail($id);
        return view('admin.editEdu', compact('teachers','circle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // qoshimcha_dars jadvalidagi o'qituvchi bilan bog'langan darsni topish
        $qoshimchaDars = qoshimchaDars::findOrFail($id);

        // Formadan kelgan yangilanishlar
        $qoshimchaDars->name = $request->input('name');
        $qoshimchaDars->participants = $request->input('participants');
        $qoshimchaDars->work_days = $request->input('work_days');
        $qoshimchaDars->work_time = $request->input('work_time');

        // "Sinflar" maydonini yangilash, JSON formatda
        $classes = $request->input('classes');
        $qoshimchaDars->classes = json_encode(['class' => $classes]);

        // Darsni saqlash
        $qoshimchaDars->save();

        // Ma'lumot yangilanganidan so'ng, admin sahifasiga qaytish
        return redirect()->route('dashboard')->with('success', 'Qoshimcha dars ma\'lumotlari yangilandi');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $circle = qoshimchaDars::findOrFail($id);
        $circle->delete();
        return redirect()->route('dashboard');
    }
}
