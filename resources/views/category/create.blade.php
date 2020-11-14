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
                    <form class="form-horizontal" method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Category Name" name="name">
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
