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
                                <h2>Add New Case Study</h2>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('case.study.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mb-5">
                                        <label for="">Image</label>
                                        <img id="img" src="" alt="">
                                        <input name="image" class="form-control-file" type="file">
                                        @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Over View</label>
                                        <textarea id="editor1" name="overView" rows="10" cols="80">
												This is my textarea to be replaced with CKEditor.
						                </textarea>
                                        @error('overView')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Result </label>
                                        <textarea id="editor2" name="result" rows="10" cols="80">
												This is my textarea to be replaced with CKEditor.
						                </textarea>
                                        @error('result')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5">
                                        <label for="">Title </label>
                                        <input name="title" class="form-control" type="text">
                                        @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5">
                                        <label for="">Budget </label>
                                        <input name="budget" class="form-control" type="number">
                                        @error('budget')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-5">
                                        <label for="">Duration </label>
                                        <input name="duration" class="form-control" type="text">
                                        @error('duration')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5">
                                        <label for="">Clients </label>
                                        <input name="clients"  class="form-control" type="text">
                                        @error('clients')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5">
                                        <label for="">Category</label>
                                        <select class="form-control" name="category" id="">
                                            <option value="">-Select-</option>
                                            <option value="cloud">Web Application</option>
                                            <option value="data">Web Design and Development</option>
                                            <option value="cyber">SEO</option>
                                            <option value="analytics">Maintenance</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit">
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
            $(document).on('change','input[name="image"]',function (e){
                let url = URL.createObjectURL(e.target.files[0]);

                $('img#img').attr('src',url).width('200px').height('200px');
            })
        })
    </script>

@endsection
