@extends('layouts.user')

@section('content')
<main class="pt-2 ">
    <div class="col-md-12 text-right mb-2 mt-5 pt-5">
        <a href="{{route('notes.create')}}"  class="px-2 py-1" style="border:1px solid #ced4da;color:black"><i class="fa fa-file-alt"></i></a>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Show</span>
                      </div>
                <select class="form-control">
                    <option></option>
                </select>
                </div>
            </div>
            <div class="col-md-4">
               <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">View</span>
                      </div>
                <select class="form-control">
                    <option></option>
                </select>
                </div>
            </div>
            <div class="col-md-4">
               <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Sort</span>
                      </div>
                <select class="form-control">
                    <option></option>
                </select>
                </div>
            </div>
        </div>
    </div>
    <hr>
     <div class="col-md-12 ">
         <div class="row justify-content-md-center">
             <div class="col-md-10 text-center p-3" style="border:1px solid #ced4da;border-radius:0.5rem">
                 <table class="table">
                     <thead>
                         @foreach($notes as $row)
                         
                         <tr>
                             <td class="text-left"><i class="fa fa-file-alt"></i> {{$row->title}}</td>
                             <td class="text-left">{{date('M d h:i a',strtotime($row->created_at))}}</td>
                             <td class="text-left">{{@App\User::where('id',$row->user_id)->value('name')}}</td>
                             <td><a href="{{route('notes.edit',$row->id)}}"><i class="fa fa-edit"></i></a></td>
                         </tr>
                            
                         @endforeach
                     </thead>
                 </table>
                
             </div>
         </div>
     </div>
    
</main>
@endsection