@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 25px;" class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Header Image For Case Study</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('case.study.image.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input name="old_header" value="{{ $header->image }}" type="hidden">
                                        <input name="header_case"  class="form-control-file" type="file">
                                            </div>
                                            <div class="form-group">
                                                <input class="btn btn-success" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <img style="width: 300px;height: 300px;" id="img" src="{{ URL::to('') }}/admin/images/case/{{ $header->image }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(document).on('change','input[name="header_case"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('300px').height('300px');
            });
        });
    </script>
@endsection
