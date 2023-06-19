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
                                <h2>Admin Profile Edit</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input name="name" value="{{ $user_edit->name }}" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input name="email" value="{{ $user_edit->email }}" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Photo</label>
                                        <img id="img" style="width: 200px;height: 200px;" src="{{ $user_edit->profile_photo_path ? url('admin/images/profile/'.$user_edit->profile_photo_path) : url('admin/images/sajib.png')}}" alt="">
                                        <input name="old_photo" value="{{ $user_edit->profile_photo_path }}" type="hidden">
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

                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>
@endsection
