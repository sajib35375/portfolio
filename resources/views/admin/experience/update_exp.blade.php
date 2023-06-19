@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Experience Data</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.exp.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input name="title" value="{{ $edit_data->title }}" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Short Text</label>
                                <input name="short_text" value="{{ $edit_data->short_text }}" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Quote</label>
                                <input name="quote" value="{{ $edit_data->quote }}" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Video link</label>
                                <input name="video" value="{{ $edit_data->video }}" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">photo</label>
                                <img id="img" style="height: 200px;width: 200px;" src="{{ URL::to('') }}/uploads/experience/{{ $edit_data->photo }}" alt="">
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

    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="photo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>
@endsection
