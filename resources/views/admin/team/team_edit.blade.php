@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Team Members</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('team.update',$edit_team->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-5">
                                    <label for="">Name</label>
                                    <input name="name" value="{{ $edit_team->name }}" class="form-control" type="text">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Designation</label>
                                    <input name="designation" value="{{ $edit_team->designation }}" class="form-control" type="text">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Photo</label>
                                    <img id="img" style="width: 150px;height: 150px;" src="{{ URL::to('') }}/admin/images/team/{{ $edit_team->image }}" alt="">
                                    <input name="old_image" value="{{ $edit_team->image }}" type="hidden">
                                    <input name="image" class="form-control-file" type="file">
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
    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="image"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('150px').height('150px');
            })
        })
    </script>

@endsection
