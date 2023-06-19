@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper" >
        <div class="container-full">
            <div class="my-5" style="margin: 25px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add New Testimonial</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-5">
                                        <label for="">Quote</label>
                                        <input name="quote" class="form-control" type="text">
                                        @error('quote')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Name</label>
                                        <input name="name" class="form-control" type="text">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Designation</label>
                                        <input name="designation" class="form-control" type="text">
                                        @error('designation')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Organization</label>
                                        <input name="organization" class="form-control" type="text">
                                        @error('organization')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Photo</label>
                                        <img id="img" src="" alt="">
                                        <input name="photo" class="form-control-file" type="file">
                                        @error('photo')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
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
                $('img#img').attr('src',url).width('100px').height('100px');
            })
        })
    </script>

@endsection
