<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\announcments;
use App\Models\gallery;
use App\Models\News;
use App\Models\qoshimchaDars;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RouteController extends Controller
{
    public function schoolRules(){
        return view('schoolRules');
    }

    public function FAQ(){
        return view("faq");
    }
    public function Symbols()
    {
        return view('statesymbols');
    }
    public function schoolTasks()
    {
        return view('schoolTasks');
    }
    public function leaderShip()
    {
        $teachers = Teachers::all();
        return view('leaderShip', compact('teachers'));
    }
    public function teachers()
    {
        $teachers=Teachers::all();
        return view('teachers', compact('teachers'));
    }
    public function Rekvizits()
    {
        return view('rekvizit');
    }
    public function education()
    {
        $qoshimchaDarslar = qoshimchaDars::all();
        return view('education', compact('qoshimchaDarslar'));
    }
    public function schoolNews()
    {
        $announcments = announcments::all();
        $news = News::all();
        return view('schoolNews', compact('news','announcments'));
    }
    public function Gallery()
    {
        $gallery = gallery::all();
        return view('gallery', compact('gallery'));
    }
    public function Infographics()
    {
        return view("infografika");
    }
    public function UsefulResources()
    {
        return view('usefulresurs');
    }
    public function Contact()
    {
        return view('connect');
    }
    public function NewsShow($slug){
        $news = News::where('slug', $slug)->firstOrFail();
        return view('newsShow', compact('news'));
    }
    public function leaderShipDetail($id)
    {
        // Retrieve the teacher by ID
        $teacher = Teachers::find($id);

        // Check if the teacher exists
        if ($teacher) {
            // Return the view and pass the teacher data
            return view('leaderShipDetail', compact('teacher'));
        } else {
            // Optionally, return an error message if the teacher isn't found
            return redirect()->back()->with('error', 'Teacher not found');
        }
    }
    public function sendEmail(Request $request)
    {
        $data = $request->all();

        Mail::to('burhonovotabek5@gmail.com')->send(new Message($data));
        return redirect()->route("contact")->with('success', 'Email sent');
    }

    public function eduDetail($id)
    {
        $dars = qoshimchaDars::findOrFail($id);
        return view("educationDetail", compact("dars"));
    }


}
