@extends('adminlte::page')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- left column -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sub Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST"
                            action="{{ route('subcategory.update', $subcategories->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $subcategories->name }}" class="form-control"
                                            placeholder="Sub Category Name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category" id="">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $subcategories->category ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Is Auth</label>
                                    <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                        <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                                type="checkbox" name="is_auth" @if ($subcategories->is_auth == 'true')
                                            {!! 'checked' !!}
                                            @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                                        <div class="form-check" style="padding-top:8px"><input class="form-check-input"
                                                type="checkbox" name="status" @if ($subcategories->status == 'true')
                                            {!! 'checked' !!}
                                            @endif>
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
    </div>
@endsection
