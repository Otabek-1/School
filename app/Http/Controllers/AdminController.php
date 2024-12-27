<?php

namespace App\Http\Controllers;

use App\Models\Lavozim;
use App\Models\qoshimchaDars;
use App\Models\SchoolInfo;
use App\Models\Teachers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $infos = SchoolInfo::all();
        $lavozim = Lavozim::all();
        $educations = qoshimchaDars::all();
        $teachers = Teachers::all();
        return view('admin.main', compact('infos','lavozim','educations','teachers'));
    }
}
