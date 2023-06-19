@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>About Us</h2>
                            </div>
                            <div class="card-body">

                                    <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Banner Image</label>
                                            <input name="old_banner" value="{{ $edit_data->banner_img }}" type="hidden">
                                            <input name="banner_img" class="form-control-file" type="file">
                                        </div>
                                            <div class="form-group col-md-6">

                                                <img style="width: 200px;height: 200px;" id="banner_img" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->banner_img }}" alt="">
                                            </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Experience Image One</label>
                                            <input name="old_exp_one" value="{{ $edit_data->exp_img_one }}" type="hidden">
                                            <input name="exp_img_one" class="form-control-file" type="file">
                                        </div>
                                            <div class="form-group col-md-6">

                                                <img style="width: 200px;height: 200px;" id="exp_one" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->exp_img_one }}" alt="">
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">Experience Image Two</label>
                                                <input name="old_exp_two" value="{{ $edit_data->exp_img_two }}" type="hidden">
                                                <input name="exp_img_two" class="form-control-file" type="file">
                                            </div>
                                            <div class="form-group col-md-6">

                                                <img style="width: 200px;height: 200px;" id="exp_two" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->exp_img_two }}" alt="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Experience Background Image</label>
                                                <input name="old_exp_bgc" value="{{ $edit_data->exp_bgc_img }}" type="hidden">
                                                <input name="exp_bgc_img" class="form-control-file" type="file">
                                            </div>
                                            <div class="form-group col-md-6">

                                                <img style="width: 200px;height: 200px;" id="exp_bgc" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->exp_bgc_img }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">Testimonial Image</label>
                                                <input name="old_testimonial_img" value="{{ $edit_data->testimonial_img }}" type="hidden">
                                                <input name="testimonial_img" class="form-control-file" type="file">
                                            </div>
                                            <div class="form-group col-md-6">

                                                <img style="width: 200px;height: 200px;" id="testi_img" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->testimonial_img }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">Title</label>
                                                <input name="title" value="{{ $edit_data->title }}" class="form-control" type="text">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Short Text</label>
                                                <textarea name="short_text" class="form-control">{{ $edit_data->short_text }}</textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Quote</label>
                                                <input name="quote" value="{{ $edit_data->quote }}" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="banner_img"]',function (event){
                let url = URL.createObjectURL(event.target.files[0]);
                $('img#banner_img').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="exp_img_one"]',function (event){
                let url = URL.createObjectURL(event.target.files[0]);
                $('img#exp_one').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="exp_img_two"]',function (event){
                let url = URL.createObjectURL(event.target.files[0]);
                $('img#exp_two').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="exp_bgc_img"]',function (event){
                let url = URL.createObjectURL(event.target.files[0]);
                $('img#exp_bgc').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="testimonial_img"]',function (event){
                let url = URL.createObjectURL(event.target.files[0]);
                $('img#testi_img').attr('src',url).width('200px').height('200px');
            });
        });
    </script>

@endsection
