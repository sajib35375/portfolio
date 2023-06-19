@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content-wrapper">
<div class="container-full">
    <div style="margin: 30px;" class="mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>All Slider</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th width="20%">Short Description</th>
                                    <th>Slider</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($all_slider as $slider)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->short_text }}</td>
                                    <td><img style="width: 150px;height: 150px;" src="{{ URL::to('') }}/admin/images/{{ $slider->photo }}" alt=""></td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('edit.slider',$slider->id) }}">Edit</a>
                                        <a id="delete" class="btn btn-danger" href="{{ route('delete.slider',$slider->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Slider</h2>

                    </div>
                    <div class="card-body">

                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Title</label>
                                <input name="title" class="form-control" type="text">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <input name="short_text" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <img id="img" src="" alt="">
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
