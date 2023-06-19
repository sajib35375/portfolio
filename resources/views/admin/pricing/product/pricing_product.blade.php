@extends('admin.body.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Pricing Plan For Our Products</h2>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('pricing.product.store') }}" method="POST">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="">Category</label>
                                    <input name="category" class="form-control" type="text">
                                    @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Price</label>
                                    <input name="price" class="form-control" type="text">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Line One <span class="text-danger">*</span> </label>
                                    <input name="lineOne" class="form-control" type="text">
                                    @error('lineOne')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Line Two <span class="text-danger">*</span></label>
                                    <input name="lineTwo" class="form-control" type="text">
                                    @error('lineTwo')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Line Three <span class="text-danger">*</span></label>
                                    <input name="lineThree" class="form-control" type="text">
                                    @error('lineThree')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Line Four <span class="text-danger">*</span></label>
                                    <input name="lineFour" class="form-control" type="text">
                                    @error('lineFour')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Line Five <span class="text-danger">*</span></label>
                                    <input name="lineFive" class="form-control" type="text">
                                    @error('lineFive')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="">Type <span class="text-danger">*</span></label>
                                    <input name="type" class="form-control" type="text">
                                    @error('type')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
