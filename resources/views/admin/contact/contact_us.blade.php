@extends('admin.body.app')
@section('content')

    <div class="content-wrapper" >
        <div class="container-full" style="margin: 30px;">


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Contact Us Email List</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach($contactMail as $mail)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $mail->name }}</td>
                                            <td>{{ $mail->email }}</td>
                                            <td>{{ $mail->phone }}</td>
                                            <td>{{ $mail->msg }}</td>
                                            <td>
                                                 <a id="delete" class="btn btn-danger" href="{{ route('contact.delete',$mail->id) }}">Delete></a>
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



@endsection
