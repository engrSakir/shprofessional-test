<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Document;
use App\Message;
use App\Note;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }
    public function location()
    {
        return view('location');
    }
    public function locationy()
    {
        return view('locationy');
    }
    public function locationz()
    {
        return view('locationz');
    }
    public function locationo()
    {
        return view('locationo');
    }
     public function files()
    {
        return view('files');
    }
     public function downloadForms()
    {
        $docs = Document::where('user_id', Auth::user()->id)->get();
        return view('download-forms',compact('docs'));
    }

    public function getSendMessage()
    {
        $messages = Message::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->get();
        return view('message',compact('messages'));

    }

    public function update(Request $request){
        $user=User::where('id',Auth::user()->id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->address=$request->address;
        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/users/', $fileformat)) {
                $user->profile_image = $fileformat;
            }

        }

        if($user->update()){
            return redirect()->back()->with('success','Profile Successfully Updated.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
    public function uploadDoc(Request $request){
        $doc=new Document();
        $doc->user_id=Auth::user()->id;
        $doc->title=$request->title;
        $doc->location=$request->location;
        $doc->year=$request->year;
        $doc->note=$request->note;
        if($request->file('file')) {
            $doc->type=$request->file('file')->extension();
            $upload = $request->file('file');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/documents/', $fileformat)) {
                $doc->document = $fileformat;
            }

        }
        if($doc->save()){
            return redirect()->back()->with('success','Document Uploaded and saved.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }

    }

    public function Down($file){
        return  response()->download(public_path('uploads/documents/'.$file));
    }

    public function Notes(){
        $notes=Note::where('user_id',Auth::user()->id)->get();
        return view('notes',compact('notes'));
    }

    public function sendMessage(Request $request){
        $request->validate([
            'message' => 'required'
        ]);

        $message = new Message();
        $message->message_type = 'user';
        $message->user_id = Auth::user()->id;
        $message->message = $request->message;
        $message->save();
        return back();
    }
}
