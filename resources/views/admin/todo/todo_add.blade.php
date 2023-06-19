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
                                <h2>Add New ToDo</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Title one</label>
                                        <input name="title_one" class="form-control" type="text">
                                        @error('title_one')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title two</label>
                                        <input name="title_two" class="form-control" type="text">
                                        @error('title_two')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Short Text one</label>
                                        <input name="long_text_one" class="form-control" type="text">
                                        @error('long_text_one')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Short Text Two</label>
                                        <input name="long_text_two" class="form-control" type="text">
                                        @error('long_text_two')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Icon Class Name</label>
                                        <input name="icon_class" class="form-control" type="text">
                                        @error('icon_class')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Photo</label>
                                        <img id="img" src="" alt="">
                                        <input name="photo" class="form-control-file" type="file">
                                        @error('photo')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image One</label>
                                        <img id="img1" src="" alt="">
                                        <input name="image_one" class="form-control-file" type="file">
                                        @error('image_one')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image Two</label>
                                        <img id="img2" src="" alt="">
                                        <input name="image_two" class="form-control-file" type="file">
                                        @error('image_two')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                $('img#img').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="image_one"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img1').attr('src',url).width('200px').height('200px');
            });

            $(document).on('change','input[name="image_two"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img2').attr('src',url).width('200px').height('200px');
            })
        })
    </script>

@endsection
