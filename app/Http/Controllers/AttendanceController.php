<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('student')->orderBy('attendance_date', 'desc')->get();
        $students = Student::all();
        return view('attendance.index', compact('attendances', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'status' => 'required',
        ]);

        Attendance::create([
            'student_id' => 1,
            'attendance_date' => now()->toDateString(),
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Attendance marked successfully!');
    }
}