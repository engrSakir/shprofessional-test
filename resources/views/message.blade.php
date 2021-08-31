@extends('layouts.user')

@section('content')
    <style>
        .message-list-area {
            /* background-color: lightblue; */
            width: 100%;
            height: 200px;
            overflow: auto;
        }

    </style>
    <main class="pt-2 mx-lg-5">
        <div class="container-fluid mt-5 pt-5">
            <div class=" card p-4 text-font" style="box-shadow:none;">
                <h4 class="h4 h4-responsive py-2"> All Files</h4>

                <div class="message-list-area" id="message-list-area">
                    @foreach ($messages as $message)
                        @if ($message->message_type == 'user')
                            <div class="form-group"
                                style="text-align: right; background-color:rgba(0, 132, 255, 0.055); border-radius:10px;">
                                <div style="text-align: right;" class="mr-3">{!! $message->message !!}</div>
                                <small class="form-text text-muted mr-3"><small>Time:
                                        {{ $message->created_at->format('d:m:Y a') }}</small></small>
                            </div>
                        @else
                            <div class="form-group"
                                style="text-align: left; background-color:rgba(0, 255, 213, 0.075); border-radius:10px;">
                                <div style="text-align: left;" class=" ml-3">{!! $message->message !!}</div>
                                <small class="form-text text-muted ml-3"><small>Time:
                                        {{ $message->created_at->format('d:m:Y a') }}</small></small>
                            </div>
                        @endif
                    @endforeach
                </div>

                <form method="post" action="{{ route('sendMessage') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="3" class="form-control" id="message"
                            aria-describedby="messageHelp" placeholder="Type message"></textarea>
                        <small id="messageHelp" class="form-text text-muted">Type your message and click on send button. Admin will responce soon.</small>
                            @error('message')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        var myDiv = document.getElementById("message-list-area");
        myDiv.scrollTop = myDiv.scrollHeight;
    </script>

@endsection
