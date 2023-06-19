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
                                <h2>ToDo Header Image</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('todo.header.image.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5">
                                                <label for="">Header Image</label>
                                                <input name="old_header" value="{{ $edit_image->header_image }}" type="hidden">
                                                <input name="header" class="form-control-file" type="file">
                                            </div>
                                            <div class="form-group mb-5">
                                                <input class="btn btn-success" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <img id="img" style="height: 200px;width: 200px;" src="{{ URL::to('') }}/admin/images/todo/{{ $edit_image->header_image }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="header"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>

@endsection
