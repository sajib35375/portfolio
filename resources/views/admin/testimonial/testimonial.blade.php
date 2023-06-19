@extends('admin.body.app')
@section('content')


    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Client Testimonial</h2>
                                <a style="float: right;" class="btn btn-success" href="{{ route('add.new.test') }}">Add New Testimonial</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Quote</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Organization Name</th>
                                                <th>Photo</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($testi as $data)
                                            <tr>

                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $data->quote }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->designation }}</td>
                                                <td>{{ $data->organization }}</td>
                                                <td><img width="100px" height="100px" src="{{ URL::to('') }}/admin/images/testimonial/{{ $data->photo }}" alt=""></td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('test.edit',$data->id) }}">Edit</a>
                                                    <a id="delete" class="btn btn-danger" href="{{ route('test.delete',$data->id) }}">Delete</a>
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
