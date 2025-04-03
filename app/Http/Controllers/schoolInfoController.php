<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\SchoolInfo;
use Illuminate\Http\Request;

class schoolInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolInfos = SchoolInfo::all(); // Hammasini oladi
        $news = News::all();
        return view('welcome', compact('schoolInfos', 'news')); // Ma'lumotlarni view'ga uzatadi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $schoolInfo = SchoolInfo::all();
        return view("admin.editInfo", compact("schoolInfo"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    
    $data = $request->except(['_token', '_method']);
   
    foreach ($data as $id => $info_count) {
        $info = SchoolInfo::find($id); 
        if ($info) { 
            $info->info_count = $info_count; 
            $info->save();
        }
    }

    return redirect()->route("dashboard")->with('success', 'Ma\'lumotlar muvaffaqiyatli yangilandi.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
