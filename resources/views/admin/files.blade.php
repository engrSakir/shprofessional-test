@extends('layouts.app')
@section('content')
<main class="pt-2 mx-lg-5"> 
    <div class="container-fluid mt-5 pt-5">
        <div class=" card p-4 text-font" style="box-shadow:none;">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="h4 h4-responsive py-2"><b>Client:</b>{{$user->name}}</h4>

                </div>
                <div class="col-md-8 text-right">
                    <a href="{{route('admin.get.upload',[$user->id,$loc])}}" class="btn btn-custom btn-sm white-text">
                        Upload File &ensp;<i class="fa fa-upload">
                            
                        </i>
                    </a>
                </div>
                
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Year</th>
                        <th>Title</th>
                        <th>Note</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($docs as $key=>$row)
                      <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$row->year}}</td>
                          <td>{{$row->title}}</td>
                          <td>{{$row->note}}</td>
                          <td>{{$row->type}}</td>
                          <td> <a class="text-primary" target="_blank" href="{{route('admin.d.f',$row->document)}}"><i class="fa fa-download" ></i></a>&ensp;
                               @if($row->type=="pdf" || $row->type=="jpg" || $row->type=="jpeg" || $row->type=="png" )<a href="{{url('/')}}/uploads/documents/{{$row->document}}" target="_blank" class="text-info"><i class="fa fa-eye" class="text-info"></i></a>&ensp; @endif
                               <a  class="text-danger deleteBtn" href="{{route('admin.doc.del',$row->id)}}"><i class="fa fa-trash" ></i></a>
                          </td>
                          </tr>
                          
                    @endforeach
                </tbody>
            </table>
          
            
        
          
            
        
    </div>
    </div>
</main>
  <script type="text/javascript">
    $(function(){

      $(document).on('click','.deleteBtn',function(e){
          e.preventDefault();
          var link = $(this).attr('href');
           Swal.fire({
              title: 'Are you sure?',
              text: "You want to Delete Data",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
              if (result.value){
                   // form.submit();
                window.location.href = link;
                Swal.fire(
                  'Deleted!',
                  'Your file has been Deleted.',
                  'success'
                )
              }
            })
      });
  });
</script>
@endsection