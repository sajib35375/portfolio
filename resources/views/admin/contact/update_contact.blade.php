@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper" >
        <div class="container-full" style="margin: 30px;">
    <div class="row">
        <div class="col-md-12" >
            <div class="card">
                <div class="card-header">
                    <h2>Update Contact Info</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.contact.info') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group mb-5">
                            <label for="">Phone</label>
                            <input name="phone" value="{{ $edit_contact->phone }}" class="form-control" type="text">
                        </div>
                        <div class="form-group mb-5">
                            <label for="">Mobile</label>
                            <input name="mobile" value="{{ $edit_contact->mobile }}" class="form-control" type="text">
                        </div>
                        <div class="form-group mb-5">
                            <label for="">Email</label>
                            <input name="email" value="{{ $edit_contact->email }}" class="form-control" type="text">
                        </div>
                        <div class="form-group mb-5">
                            <label for="">Office Time</label>
                            <input name="time" value="{{ $edit_contact->time }}" class="form-control" type="text">
                        </div>
                        <div class="form-group mb-5">
                            <label for="">Header Image</label>
                            <img style="width: 250px;height: 250px;" id="img" src="{{ URL::to('') }}/admin/images/contact/{{ $edit_contact->photo }}" alt="">
                            <input name="old_photo" value="{{ $edit_contact->photo }}" type="hidden">
                            <input name="photo" class="form-control-file" type="file">
                        </div>
                        <div class="form-group mb-5">
                            <input class="btn btn-success" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>



    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="photo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#img').attr('src',url).width('250px').height('250px');
            })
        })
    </script>



@endsection
