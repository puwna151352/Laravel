<?php

namespace App\Http\Controllers;
use App\Models\lecturers;
use Illuminate\Http\Request;

class lecturerController extends Controller
{
    public function index(){
        $lecturers =lecturers::all();
        return view("lecturer",compact('lecturers'));
    }

    public function insert(Request $request){
        $new_lecturer = new lecturers;
        $new_lecturer->lec_name = $request->lec_name; 
        $new_lecturer->email = $request->email;
        //$majors=[ 1'Computer Science',
       // 2=> 'Information Technology',
       // 3=> 'Geo-informatics',
       // 4=> 'Artificial Intelligence',
       // 5=> 'Cybersecurity'
   // ];
        //$new_lecturer->major=$majors[$request->major];
        $new_lecturer->major = $request->major;
        $new_lecturer->save();
        $lecturers =lecturers::all();
        return view("lecturer",compact('lecturers'));
    }

    public function delete($lec_id){
        $lecturer= lecturers::find($lec_id);
        if($lecturer){
            $lecturer->delete();
            return redirect("/lecturers");
        }
        
        
    }
}

