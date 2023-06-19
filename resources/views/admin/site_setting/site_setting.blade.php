@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full" style="margin: 20px;">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Site Setting</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('site.setting.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Logo</label>
                                    <img id="img" src="{{ URL::to('') }}/admin/images/logo/{{ $setting->logo }}" alt="">
                                    <input name="old_logo" value="{{ $setting->logo }}" type="hidden">
                                    <input name="logo" class="form-control-file" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="">Footer Text</label>
                                    <input name="footer_text" value="{{ $setting->footer_text }}" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input name="address" value="{{ $setting->address }}" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input name="phone" value="{{ $setting->phone }}" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" value="{{ $setting->email }}" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-success" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>









    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="logo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#img').attr('src',url);
            })
        })
    </script>


@endsection
