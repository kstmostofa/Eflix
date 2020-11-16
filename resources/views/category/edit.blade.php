@extends('adminlte::page')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- left column -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Category</h3>
                        </div>
                        <!-- form start -->
                        <form class="form-horizontal" method="POST"
                            action="{{ route('category.update', $categories->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Category Name"
                                            value="{{ $categories->name }}" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Is Auth</label>
                                    <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                        <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                                type="checkbox" name="is_auth" @if ($categories->is_auth == 'true')
                                            {!! 'checked' !!}
                                            @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                        <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                                type="checkbox" name="status" @if ($categories->status == 'true')
                                            {!! 'checked' !!}
                                            @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
