@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-5">
        <div class=" card p-4 text-font" style="box-shadow:none;">
                            <h4 class="h4 h4-responsive py-2"> Files At Location {{$type}}</h4>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Year</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($docs as $key=>$row)
                        <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$row->year}}</td>
                           <td>{{$row->title}}</td>
                           <td>{{$row->type}}</td>
                           <td>{{$row->note}}</td>
                           <td>
                               <a  href="{{route('d.file',$row->document)}}"><i class="fa fa-download"></i></a>&ensp;
                             @if($row->type=="pdf" || $row->type=="jpg" || $row->type=="jpeg" || $row->type=="png" )<a href="{{url('/')}}/uploads/documents/{{$row->document}}" target="_blank" class="text-info"><i class="fa fa-eye" class="text-info"></i></a>&ensp; @endif

                              
                           </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          
            
        
          
            
        
    </div>
    </div>
</main>

@endsection