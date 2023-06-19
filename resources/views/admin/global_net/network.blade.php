@extends('admin.body.app')
@section('content')


    <div class="content-wrapper">
        <div class="container-full">

            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Global Network Content</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('global.net.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input name="title" value="{{ $edit_net->title }}" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Short Text</label>
                                        <textarea class="form-control" name="short_text" id="" cols="30" rows="10">{{ $edit_net->short_text }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Map</label>
                                        <input name="old_map" value="{{ $edit_net->map }}" type="hidden">
                                        <input class="form-control-file"  name="map" type="file">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-success" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Network Info view</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Short Description</th>
                                            <th>Map</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $edit_net->title }}</td>
                                            <td>{{ $edit_net->short_text }}</td>
                                            <td><img src="{{ URL::to('') }}/admin/images/map/{{ $edit_net->map }}" alt=""></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
