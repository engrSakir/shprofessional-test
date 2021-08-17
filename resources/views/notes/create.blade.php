@extends('layouts.user')

@section('content')
<main class="pt-2 ">
    <div class="container mt-5 pt-5">
        @include('partials.alert')
        <form method="POST" action="{{route('notes.store')}}">
            @csrf
            <div class="form-group col-md-12 text-right">
                
                <button type="submit" class="btn btn-default btn-sm">Save Note</button>
                <a href="{{route('notes')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel</a>

            </div>
            
            <div class="form-group">
                <input class="form-control" name="title" placeholder="Title">
            </div>
            
            <div class="form-group">
                <textarea class="form-control" name="text" id="text" > </textarea>
            </div>
        </form>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.tiny.cloud/1/ds1e1idvv22yytbvpuhbwee51xmr0frivyzbdgu391bgi1cu/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
<script>
      $(document).ready(function() {
        tinymce.init({
      selector: '#text',
      height : "800"
    });
        });
    </script>
@endsection