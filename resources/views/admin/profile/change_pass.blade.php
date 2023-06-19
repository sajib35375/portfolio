@extends('admin.body.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Admin Change Password</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('change.pass.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Current Password</label>
                                        <input name="old_password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">New Password</label>
                                        <input name="password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input name="password_confirmation" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
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

@endsection
