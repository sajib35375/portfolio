@extends('admin.body.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="mt-5">

         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         <h2>Edit About Testimonial</h2>

                     </div>
                     <div class="card-body">

                         <form action="{{ route('about.testimonials.update',$edit_data->id) }}" method="POST" enctype="multipart/form-data">
                             @csrf

                             <div class="form-group">
                                 <label for="">Name</label>
                                 <input name="name" value="{{ $edit_data->name }}" class="form-control" type="text">

                             </div>
                             <div class="form-group">
                                 <label for="">Designation</label>
                                 <input name="designation" value="{{ $edit_data->designation }}" class="form-control" type="text">

                             </div>
                             <div class="form-group">
                                 <label for="">Quote</label>
                                 <input name="quote" value="{{ $edit_data->quote }}" class="form-control" type="text">

                             </div>
                             <div class="form-group">
                                 <label for="">Photo</label>
                                 <img style="height: 200px;width: 200px;" id="img" src="{{ URL::to('') }}/admin/images/about/{{ $edit_data->photo }}" alt="">
                                 <input name="old_photo" value="{{ $edit_data->photo }}" type="hidden">
                                 <input name="photo"  class="form-control-file" type="file">

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
    <script>
        $(document).ready(function (){
            $(document).on('change','input[name="photo"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>


@endsection
