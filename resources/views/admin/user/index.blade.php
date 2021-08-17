@extends('layouts.app')
@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-5">
        <div class=" card p-4 text-font" style="box-shadow:none;">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="h4 h4-responsive py-2"><b>Admin Management</b></h4>

                </div>
                <div class="col-md-8 text-right">
                    <a href="{{route('super-admin.create')}}" class="btn btn-success btn-sm white-text"><i class="fa fa-plus-circle">
                            
                        </i>&ensp;&ensp;
                       <b style="color: black">Create Admin</b> &ensp;
                    </a>
                </div>
                
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">SL.</th>
                        <th width="30%">Name</th>
                        <th width="20%">Email</th>
                        <th width="25%">Role</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $key => $row)
                      <tr>
                          <td style="font-weight: bold">{{$key+1}}</td>
                          <td style="font-weight: bold">{{$row->name}}</td>
                          <td style="font-weight: bold">{{$row->email}}</td>
                          <td style="font-weight: bold">{{$row->role}}</td>
                          <td> 
                            <div class="row">&nbsp;&nbsp;&nbsp;<a title="Edit" class="btn btn-sm btn-primary" href="{{route('super-admin.edit',$row->id)}}"><i class="fa fa-edit"></i></a>&nbsp;
                            <form action="{{route('super-admin.destroy',$row->id)}}" method="post">
                                  @csrf
                                  @method('delete')
                                  <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></a>
                                </form>
                            </div>    
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
           $('.delete-confirm').click(function(event) {
              var form = $(this).closest("form");
              event.preventDefault();
              Swal.fire({
              title: 'Are you sure?',
              text: "You want to Delete Data",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed){
                   form.submit();
                 // window.location.href = link;
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })

    });
  });
</script>
@endsection