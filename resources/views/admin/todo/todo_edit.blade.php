@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class=" my-5">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Edit ToDo</h1>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('todo.update',$edit_data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Title one</label>
                                        <input name="title_one" value="{{ $edit_data->title_one }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Title two</label>
                                        <input name="title_two" value="{{ $edit_data->title_two }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Short Text one</label>
                                        <input name="long_text_one" value="{{ $edit_data->long_text_one }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Short Text Two</label>
                                        <input name="long_text_two" value="{{ $edit_data->long_text_two }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Icon Class Name</label>
                                        <input name="icon_class" value="{{ $edit_data->icon_class }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Photo</label>
                                        <img id="img" style="width: 300px;height: 300px;" src="{{ URL::to('') }}/admin/images/todo/{{ $edit_data->photo }}" alt="">
                                        <input name="old_photo" value="{{ $edit_data->photo }}" type="hidden">
                                        <input name="photo" class="form-control-file" type="file">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Image One</label>
                                        <img id="img1" style="width: 300px;height: 300px;" src="{{ URL::to('') }}/admin/images/todo/{{ $edit_data->image_one }}" alt="">
                                        <input name="old_image_one" value="{{ $edit_data->image_one }}" type="hidden">
                                        <input name="image_one" class="form-control-file" type="file">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Image Two</label>
                                        <img id="img2" style="width: 300px;height: 300px;" src="{{ URL::to('') }}/admin/images/todo/{{ $edit_data->image_two }}" alt="">
                                        <input name="old_image_two" value="{{ $edit_data->image_two }}" type="hidden">
                                        <input name="image_two" class="form-control-file" type="file">

                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit">
                                    </div>
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
            $(document).on('change','input[name="photo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('300px').height('300px');
            });

            $(document).on('change','input[name="image_one"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img1').attr('src',url).width('300px').height('300px');
            });

            $(document).on('change','input[name="image_two"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img2').attr('src',url).width('300px').height('300px');
            })
        })
    </script>

@endsection
