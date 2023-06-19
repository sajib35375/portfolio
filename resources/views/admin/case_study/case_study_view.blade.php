@extends('admin.body.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>All Case Studies</h2>
                                <a style="float: right;" class="btn btn-info" href="{{ route('add.case.study') }}">Add New Case</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>OverView</th>
                                        <th>Result</th>
                                        <th width="25%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_case as $case)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td><img src="{{ URL::to('') }}/admin/images/case/{{ $case->image }}" alt=""></td>
                                            <td>{!! Str::words($case->overView, 20) !!}</td>
                                            <td>{!! Str::words($case->result, 30) !!}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('case.study.edit',$case->id) }}">Edit</a>
                                                <a id="delete" class="btn btn-danger" href="{{ route('case.study.delete',$case->id) }}">Delete</a>
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
