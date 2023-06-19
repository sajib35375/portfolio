@extends('admin.body.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div class="wrap" style="margin: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Pricing Plan For Our Products</h2>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('pricing.product.update',$edit_data->id) }}" method="POST">
                                    @csrf

                                    <div class="form-group mb-5">
                                        <label for="">Category</label>
                                        <input name="category" value="{{ $edit_data->category }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Price</label>
                                        <input name="price" value="{{ $edit_data->price }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Line One <span class="text-danger">*</span> </label>
                                        <input name="lineOne" value="{{ $edit_data->lineOne }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Line Two <span class="text-danger">*</span></label>
                                        <input name="lineTwo" value="{{ $edit_data->lineTwo }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Line Three <span class="text-danger">*</span></label>
                                        <input name="lineThree" value="{{ $edit_data->lineThree }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Line Four <span class="text-danger">*</span></label>
                                        <input name="lineFour" value="{{ $edit_data->lineFour }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Line Five <span class="text-danger">*</span></label>
                                        <input name="lineFive" value="{{ $edit_data->lineFive }}" class="form-control" type="text">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Type <span class="text-danger">*</span></label>
                                        <input name="type" value="{{ $edit_data->type }}" class="form-control" type="text">

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
@endsection
