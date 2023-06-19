@extends('admin.body.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>What We Can Do</h2>
                            <a style="float: right;" class="btn btn-primary" href="{{ route('todo.add') }}">Add New ToDo</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title One</th>
                                    <th>Title Two</th>
                                    <th width="20%">Short Text one</th>
                                    <th width="20%">Short Text Two</th>
                                    <th>Icon</th>
                                    <th>Photo</th>
                                    <th>Image one</th>
                                    <th>Image Two</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_data as $data)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $data->title_one }}</td>
                                        <td>{{ $data->title_two }}</td>
                                        <td>{{ $data->long_text_one }}</td>
                                        <td>{{ Str::of($data->long_text_two)->limit(150) }}</td>
                                        <td><i class="{{ $data->icon_class }}"></i></td>
                                        <td><img src="{{ URL::to('') }}/admin/images/todo/{{ $data->photo }}" alt=""></td>
                                        <td><img src="{{ URL::to('') }}/admin/images/todo/{{ $data->image_one }}" alt=""></td>
                                        <td><img src="{{ URL::to('') }}/admin/images/todo/{{ $data->image_two }}" alt=""></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('todo.edit',$data->id) }}">Edit</a>
                                            <a id="delete" class="btn btn-danger btn-sm" href="{{ route('todo.delete',$data->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
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
