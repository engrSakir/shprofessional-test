@extends('layouts.user')

@section('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <main class="pt-2 mx-lg-5">
        <div class="container-fluid mt-5 pt-5">
            <div id="app">
                <!--<passport-clients></passport-clients>-->
                <!--<passport-authorized-clients></passport-authorized-clients>-->
                <!--<passport-personal-access-tokens></passport-personal-access-tokens>-->
            </div>

            <div class="card">
                <div class="card-header text-center">
                    API Secret Key
                </div>
                <div class="card-body text-center">

                    <h5 class="card-title text-center">
                    @if ($token) Your current API secret key @else Currently you have
                            not API secret key. Please generate first. @endif
                    </h5>
                    <p class="card-text">
                        @if ($token)
                           <p id="token" class="text-sm-center" style="display:none;">{{ $token->convertToJWT() }}</p>
                            <br>
                            <b>Generated at: <i id="created_at">{{ $token->created_at }}</i></b>
                        @else
                            <code id="token"> xxxx-xxxx-xxxx-xxxxx-xxxxx-xxxx-xxxx </code>
                        @endif
                    </p>
                    @if ($token)
                        <a href="javascript:void(0)" class="btn btn-primary copy-btn">Copy Now</a>
                        <a href="javascript:void(0)" class="btn btn-info key-generate">Re-Generate</a>
                    @else
                        <a href="javascript:void(0)" class="btn btn-primary key-generate">Generate Now</a>
                    @endif
                        <hr>


                </div>
                <div class="card-footer text-muted text-center">
                    <a href="https://documenter.getpostman.com/view/11483227/TzXxjdEx" target="_blank">Please check out API
                        documentation</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".copy-btn").click(function() {
            var $temp = $("<input>");
            $("body").append($temp);
            var token = $('#token').text();
            $temp.val(token).select();
            document.execCommand("copy");
            $temp.remove();
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Copied successfully',
                showConfirmButton: false,
                timer: 1500
            })
        });

        $('.key-generate').click(function() {
            alert_message = 'Your previous key will be expired.';
            @if (!$token)
                alert_message = 'Please confirm to generate API secret key.';
            @endif
            Swal.fire({
                title: 'Are you sure?',
                text: alert_message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Generate!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'GET',
                        url: "{{ route('apiKey') }}",
                        data: {
                            type: 'key-generate'
                        },
                        success: function(data) {
                            $('#token').text(data.token);
                            $('#created_at').text(data.created_at);
                            Swal.fire(
                                'SUCCESS!',
                                'API key successfully regenerated.',
                                'success'
                            );
                            if (data.if_first) {
                                location.reload();
                            }
                        },
                    });

                }
            })
        });
    </script>
@endsection
