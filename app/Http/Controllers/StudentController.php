<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStudentrequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch all students or paginate if needed
        $students = StudentResource::collection(Student::all()); // or use paginate(10) for pagination

        // Return data to Inertia
        return Inertia::render('Dashboard', [
            'students' => $students
        ]);
    }

    public function show(Student $student){
        $student = Student::find($student->id);

        return Inertia::render('Profile/Student', [
            'student' => $student
        ]);
    }

    public function update(UpdateStudentrequest $request, Student $student)
{    
    // Update the student record directly
    $student->update($request->validated());
    return redirect()->route('dashboard')->with('message', 'Student updated successfully.');
}

}
