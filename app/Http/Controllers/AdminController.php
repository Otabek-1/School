<?php

namespace App\Http\Controllers;

use App\Models\announcments;
use App\Models\gallery;
use App\Models\Lavozim;
use App\Models\News;
use App\Models\qoshimchaDars;
use App\Models\SchoolInfo;
use App\Models\Teachers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $news = News::all();
        $infos = SchoolInfo::all();
        $lavozim = Lavozim::all();
        $educations = qoshimchaDars::all();
        $teachers = Teachers::all();
        $elon = announcments::all();
        $gallery = gallery::all();
        return view('admin.main', compact('infos','lavozim','educations','teachers','news',"elon","gallery"));
    }
}
