@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">


                <div class="row">
                    <div class="col-md-12">
                        <a style="float: right;" class="btn btn-info" href="{{ route('profile.edit') }}">Edit</a>
                        <div class="box box-widget widget-user">

                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url({{ asset('admin/images/10.jpg') }}) center center;">
                                <h3 style="color: #0b0b0b;" class="widget-user-username">{{ $user_data->name }}</h3>
                                <h6 style="color: #0b0b0b;" class="widget-user-desc">{{ $user_data->email }}</h6>
                            </div>

                            <div class="widget-user-image">
                                <img class="rounded-circle" src="{{ $user_data->profile_photo_path ? url('admin/images/profile/'.$user_data->profile_photo_path) : url('admin/images/sajib.png')}}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">12K</h5>
                                            <span class="description-text">FOLLOWERS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 br-1 bl-1">
                                        <div class="description-block">
                                            <h5 class="description-header">550</h5>
                                            <span class="description-text">FOLLOWERS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">158</h5>
                                            <span class="description-text">TWEETS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>







@endsection
