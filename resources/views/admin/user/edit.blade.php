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
                    <a href="{{route('super-admin.index')}}" class="btn btn-success btn-sm white-text"><i class="fa fa-list">
                            
                        </i>&ensp;&ensp;
                       <b>Admin List</b> &ensp;
                    </a>
                </div>
                
            </div>

            <table style="width:100%">
                <thead>
                   
                </thead>
                <tbody>
                   <form action="{{route('super-admin.update',$admin->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                      <div class="row">
                      <div class="form-group col-md-4">
                          <label for="role">User Role</label>
                            <select name="role" id="role" class=" form-control form-control-sm">
                                <option value=" ">Select User Type</option>
                                <option value="Super-Admin" {{($admin->role == 'Super-Admin')?('selected'):' '}}>Super Admin</option>
                                <option value="User-Admin" {{($admin->role == 'User-Admin')?('selected'):' '}}>User Admin</option>
                            </select>
                          <font style="color:red">{{($errors->has('role'))?($errors->first('role')):' '}}</font>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{$admin->name}}">
                          <font style="color:red">{{($errors->has('name'))?($errors->first('name')):' '}}</font>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="email">Email</label>
                          <input type="email" name="email"  class="form-control form-control-sm" value="{{$admin->email}}"> 
                          <font style="color:red">{{($errors->has('email'))?($errors->first('email')):' '}}</font>
                      </div>
                      <div class="form-group col-md-6 "> 
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div> 
                    </div>
                   </form>
                </tbody>
            </table>    
    </div>
    </div>
</main>

@endsection