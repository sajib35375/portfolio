@extends('admin.body.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>All Services Pricing plan</h2>
                                <a style="float: right;" class="btn btn-info" href="{{ route('service.add') }}">Add New Service</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_price as $price)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $price->category }}</td>
                                            <td>{{ $price->price }}</td>
                                            <td>{{ $price->type }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('service.edit',$price->id) }}">Edit</a>
                                                <a id="delete" class="btn btn-danger" href="{{ route('service.delete',$price->id) }}">Delete</a>
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
