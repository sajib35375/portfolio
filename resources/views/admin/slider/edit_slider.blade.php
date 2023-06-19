@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Edit Slider</h2>

            </div>
            <div class="card-body">

                <form action="{{ route('update.slider',$edit_data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Title</label>
                        <input name="title" value="{{ $edit_data->title }}" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Short Description</label>
                        <input name="short_text" value="{{ $edit_data->short_text }}" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <img id="img" style="width: 200px;height: 200px;" src="{{ URL::to('') }}/admin/images/{{ $edit_data->photo }}" alt="">
                        <input name="old_photo" value="{{ $edit_data->photo }}" type="hidden">
                        <input name="photo" class="form-control-file" type="file">
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
            $(document).on('change','input[name="photo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#img').attr('src',url);
            })
        })
    </script>


@endsection
