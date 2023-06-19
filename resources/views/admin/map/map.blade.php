@extends('admin.body.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <div style="margin: 30px;" class="my-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>Location in Google Map</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>

                                        <th>map</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>
                                                <iframe src="{{ $map->map }}" frameborder="0"></iframe>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add Google Location</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('map.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-5">
                                        <label for="">Google Map Embed Link</label>
                                        <input name="map" value="{{ $map->map }}" class="form-control" type="text">
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
    </div>



@endsection
