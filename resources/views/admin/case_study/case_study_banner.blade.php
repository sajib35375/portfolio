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
                                <h2>Case Study Header Image</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('header.image') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5">
                                                <input name="old_banner" value="{{ $edit_case->banner_image }}" type="hidden">
                                                <input name="banner_image" class="form-control-file" type="file">
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <img style="width: 200px;height: 200px;" id="photo" src="{{ URL::to('') }}/admin/images/case/{{ $edit_case->banner_image }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function (){
            $(document).on('change','input[name="banner_image"]',function (e){
                e.preventDefault();
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#photo').attr('src',url).width('200px').height('200px');
            })
        })
    </script>


@endsection
