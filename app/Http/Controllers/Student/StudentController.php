<?php
namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
	public function index(){
		return view('student.enrollment.view_student');
	}
	
	public function create(){
		return view('student.enrollment.add_student');
	}
}
?>