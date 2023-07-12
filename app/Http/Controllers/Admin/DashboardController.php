<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Materi;

class DashboardController extends Controller
{
    public function index(){
        $user = User::where('roles', 'USER')->count();
        $course = Course::count();

        return view('pages.admin.dashboard',
        [
            'user' => $user,
            'course' => $course
        ]);
    }
}
