<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class Crud extends Controller
{
    public function addstd(){

        return view ("addstd"); // Blade Template 
    }
    public function store(Request $r){

        $r -> validate(
            [
                'name' => 'required',
                
            ]
            );

        $n = $r->name;
        $m = $r->gender;
        $o = $r->stream;

        if(isset($r->sub)){
            $sb = implode(",",$r->sub);
        }
        else{
            $sb="";
        }

        $fl = $r->file("simg");

        if(isset($fl)){
            $fn = time().$fl->getClientOriginalName();
            $fl->move("student_img",$fn);
        }

        $obj = new Student();

        $obj-> name = $n;
        $obj-> gender = $m;
        $obj-> stream = $o;
        $obj-> subject = $sb;
        $obj-> image = $fn;
        $obj-> save();
        return  redirect(route('select'));
    }

    public function selstd(){
        $obj = Student::all();
        return view("selsrd")->with(['std'=> $obj]);
    }
    public function edit(Request $r){

         $id =$r->eid;
         $obj = Student::find($id);
         return view("editpage")->with(['ed'=>$obj]);

    }
    public function updstd(Request $r){

        $r -> validate(
            [
                'name' => 'required',
                
            ]
            );

        $n = $r->name;
        $m = $r->gender;
        $o = $r->stream;
        $id= $r->id;

        if(isset($r->sub)){
            $sb = implode(",",$r->sub);
        }
        else{
            $sb="";
        }

        $fl = $r->file("simg");

        if(isset($fl)){
            $fn = time().$fl->getClientOriginalName();
            $fl->move("student_img",$fn);
        }

        $obj =  Student::find($id);

        $obj-> name = $n;
        $obj-> gender = $m;
        $obj-> stream = $o;
        $obj-> subject = $sb;
        if(isset($fn)){
            $obj-> image = $fn;
        }
        
        $obj-> update();
        return  redirect(route('select'));
    }

    public function delstd(Request $r){

        $id =$r->did;
        $obj = Student::find($id);
        unlink("student_img/".$obj->image);
        $obj-> delete();
        return  redirect(route('select'));
       

   }
}
