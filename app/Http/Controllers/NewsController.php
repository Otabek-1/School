<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('welcome', compact('news'));
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
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    // Slugni yaratish
    $slug = Str::slug($request->title, '-');

    // Yangilikni yaratish
    $new = new News();
    $new->title = $request->title;
    $new->body = $request->body;
    $new->slug = $slug;

    // Rasmni yuklash va saqlash (agar mavjud bo'lsa)
    if ($request->hasFile('image')) {
        // Faylni olish
        $file = $request->file('image');
        
        // Fayl nomini yaratish (masalan, vaqt va asl nomni qo'shish)
        $fileName = time() . '_' . $file->getClientOriginalName();
    
        // Faylni public/storage papkasiga ko'chirish
        $file->move(public_path('storage'), $fileName);
    
        // Bazaga rasm manzilini yozish
        $new->image = 'storage/' . $fileName;
    }
    
    // Yangilikni saqlash
    $new->save();

    // Foydalanuvchini boshqaruv paneliga qaytarish
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
        $news = News::findOrFail($id);
        return view("admin.editNews", compact("news"));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    $news = News::findOrFail($id);
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Rasmni tekshirish
    ]);
    $slug = Str::slug($request->title, '-');
    $news->title = $request->title;
    $news->body = $request->body;
    $news->slug = $slug;
    if ($request->hasFile('image')) {
        if ($news->image) {
            $oldImagePath = public_path('storage/' . $news->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); 
            }
        }


        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage'), $fileName);
        $news->image = 'storage/' . $fileName;
    }
    $news->save();
    return redirect()->route('dashboard')->with('success', 'Yangilik muvaffaqiyatli yangilandi.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = News::findOrFail($id);
        $new->delete();
        return redirect()->route("dashboard");
    }
}
