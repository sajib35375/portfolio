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
                                <h2>About Testimonial</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Quote</th>
                                        <th width="20%">Name</th>
                                        <th>Designation</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_data as $data)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $data->quote }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->designation }}</td>
                                            <td><img style="width: 150px;height: 150px;" src="{{ URL::to('') }}/admin/images/about/{{ $data->photo }}" alt=""></td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('about.testimonials.edit',$data->id) }}">Edit</a>
                                                <a id="delete" class="btn btn-danger" href="">Delete</a>
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
                                <h2>Add New Testimonial</h2>

                            </div>
                            <div class="card-body">

                                <form action="{{ route('about.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input name="name" class="form-control" type="text">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <input name="designation" class="form-control" type="text">
                                        @error('designation')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quote</label>
                                        <input name="quote" class="form-control" type="text">
                                        @error('quote')
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

                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>




@endsection
