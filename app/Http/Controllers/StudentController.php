<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;



class StudentController extends Controller
{
    public function index() {
        $data = student::get();
        return view('student-list', compact('data'));
    }
    public function addStudent() {
        return view('add-student');

    }
    public function saveStudent (Request $request) {
        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $firstname = $request->firstname;
        $surname = $request->surname;
        $lastname = $request->lastname;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $form137 = $request->form137;
    
        $paid = $request->paid;

        $stu = new Student();
        $stu->firstname = $firstname;
        $stu->surname = $surname;
        $stu->lastname = $lastname;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->address = $address;
        $stu->form137 = $form137;
    
        $stu->paid = $paid;

        $stu->save();

        return redirect() ->back()->with('success', 'Student Added Successfully!');


    }
    public function editStudent($id) {
        $data = Student::where('id', '=', $id)->first();
        return view('edit-student',compact('data'));
    }

    public function updateStudent(Request $request) {
        $request->validate([
            'id' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $id = $request->id;
        $firstname = $request->firstname;
        $surname = $request->surname;
        $lastname = $request->lastname;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Student::where('id' ,'=', $id)->update([
            'id' =>$id,
            'firstname'=>$firstname,
            'surname'=>$surname,
            'lastname'=>$lastname,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address
        ]);
         return redirect() ->back() ->with('success', 'Student Updated Successfully');
    }
    public function deleteStudent($id) {
        Student::where('id', '=', $id)->delete();
        return redirect() ->back()->with('success', 'Student Deleted Successfully');
    }
}