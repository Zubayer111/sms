<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private $subject;
    private $subjects;
    private $enrolls;
    private $data = [];
    

    public function index()
    {
        return view("teacher.subject.add");
    }

    public function create(Request $request)
    {
        Subject::newSubject($request);
        return redirect()->back()->with("message", "Subject info create successfully.");
    }

    public function manage()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->get();
        return view("teacher.subject.manage", ["subjects" =>$this->subjects]);
    }

    public function edit($id)
    {
        $this->subject = Subject::find($id);
        return view("teacher.subject.edit", ["subject" => $this->subject]);
    }

    public function updete(Request $request, $id)
    {
        Subject::updeteSubject($request, $id);
        return redirect("/manage-subject")->with("message", "Subject info updete successfully.");
    }

    public function delete($id)
    {
        $this->subject = Subject::find($id);
        if (file_exists($this->subject->image))
        {
            unlink($this->subject->image);
        }
        $this->subject->delete();
        return redirect('/manage-subject')->with('message', 'subject info delete successfully.');
    }

    public function approved()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->where("Status", 1)->get();
        return view("teacher.subject.approved", ["subjects" =>$this->subjects]);
    }

    public function enrollStudent($id)
    {
        $this->enrolls = Enroll::where('subject_id', $id)->get();

        foreach($this->enrolls as $key=>$enroll)
        {
            $this->subject = Subject::find($enroll->subject_id);
            $this->data[$key]['course_title']   = $this->subject->title;
            $this->data[$key]['student_name']   = Student::find($enroll->student_id)->name ;
            $this->data[$key]['student_id']   = Student::find($enroll->student_id)->id ;
            $this->data[$key]['enroll_status']  = $enroll->enroll_status;
            $this->data[$key]['payment_status'] = $enroll->payment_status;
        }

        return view("teacher.subject.enrolled-student", ["enrolls" => $this->data]);
    }
}
