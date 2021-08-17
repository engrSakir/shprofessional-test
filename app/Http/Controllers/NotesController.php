<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Note;
class NotesController extends Controller
{
    public function create(){
        return view('notes.create');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'text'=>'required',
            ]);
        $note=new Note();
        $note->user_id=Auth::user()->id;
        $note->title=$request->title;
        $note->text=$request->text;
        if($note->save()){
            return redirect()->back()->with('success','Note Created.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
        
    }
    
    public function edit($id){
        $note=Note::where('id',$id)->first();
        return view('notes.edit',compact('note'));
    }
    
    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'text'=>'required',
            ]);
        $note=Note::where('id',$id)->first();
        $note->user_id=Auth::user()->id;
        $note->title=$request->title;
        $note->text=$request->text;
        if($note->save()){
            return redirect()->back()->with('success','Note Updated.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
        
    }
    
    
    public function delete($id){
        
    }
}