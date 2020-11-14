<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sub Categories</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('subcategory.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Sub Category Name" name="name" required>
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
                <label for="inputEmail3" class="col-sm-2 col-form-label">Is Auth</label>
                <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                    <div class="form-check" style="padding-top:8px"><input class="form-check-input" type="checkbox"
                            name="is_auth">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10" style="justify-content:flex-start; display:flex; flex:1">
                    <div class="form-check" style="padding-top:8px"><input class="form-check-input" type="checkbox"
                            name="status">
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
