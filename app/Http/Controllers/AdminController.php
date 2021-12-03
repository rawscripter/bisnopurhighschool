<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $newStudents  = Student::where('created_at', Carbon::today())->count();
        $totalStudents = Student::all()->count();
        // new students last week
        $newStudentsLastMonth = Student::whereBetween('created_at', [Carbon::now()->subMonth(), Carbon::now()])->count();

        $acceptedStudents = Student::where('status', 1)->count();
        $rejectedStudents = Student::where('status', 2)->count();


        $page = 'dashboard';
        return view('admin.dashboard.index', compact('newStudents', 'totalStudents', 'newStudentsLastMonth', 'page', 'acceptedStudents', 'rejectedStudents'));
    }
    public function students()
    {
        $students = Student::all();
        $page = 'student';
        return view('admin.students.index', compact('students', 'page'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
