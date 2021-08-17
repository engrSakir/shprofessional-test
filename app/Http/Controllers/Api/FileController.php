<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function uploadDoc(Request $request){
        $request->validate([
            'title'     =>  'required|string',
            'location'  =>  'required|string',
            'year'      =>  'required|string',
            'note'      =>  'required|string',
            'file'      =>  'required',
        ]);
        $doc=new Document();
        $doc->user_id=Auth::user()->id;
        $doc->title=$request->title;
        $doc->location=$request->location;
        $doc->year=$request->year;
        $doc->note=$request->note;
        if($request->file('file')) {
            $doc->type=$request->file('file')->extension();
            $upload = $request->file('file');
            $fileformat = time() . '.' . $upload->extension();
            if ($upload->move('uploads/documents/', $fileformat)) {
                $doc->document = $fileformat;
            }

        }
        if($doc->save()){
            return response()->json([
                'type' => 'Success',
                'message' => 'Document Uploaded and saved.',
            ], 201);
        }
        else{
            return response()->json([
                'type' => 'Error',
                'message' => 'Failed try again.',
            ], 203);

        }
    }

}
