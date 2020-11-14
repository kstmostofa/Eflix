@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('Content.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Content Name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category" id="">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="subcategory" id="">
                                        @foreach ($subcategories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Artist</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="artists" id="select2" multiple>
                                        @foreach ($artists as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Content URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Content URL" name="url">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Is Auth</label>
                                <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                    <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                            type="checkbox" name="is_auth">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                    <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                            type="checkbox" name="status">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('adminlte_js')
    <script>
        $('.select2').select2()

    </script>
@endsection
