@extends('admin.body.app')
@section('content')


    <div class="content-wrapper">
        <div class="container-full">

            <div style="margin: 30px;" class="my-=5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Experience Info</h2>
                                <a style="float: right;" class="btn btn-primary" href="{{ route('update.exp.view') }}">Update Experience Info</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Short Text</th>
                                            <th>Quote</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->short_text }}</td>
                                            <td>{{ $data->quote }}</td>

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
