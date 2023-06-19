@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>All Team Members</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_member as $member)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->designation }}</td>
                                            <td><img style="width: 150px;height: 150px;" src="{{ URL::to('') }}/admin/images/team/{{ $member->image }}" alt=""></td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('team.edit',$member->id) }}">Edit</a>
                                                <a id="delete" class="btn btn-danger" href="{{ route('team.delete',$member->id) }}">Delete</a>
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
                                <h2>Add New Team Members</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('team.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-5">
                                        <label for="">Name</label>
                                        <input name="name" class="form-control" type="text">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Designation</label>
                                        <input name="designation" class="form-control" type="text">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Photo</label>
                                        <img id="img" src="" alt="">
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
