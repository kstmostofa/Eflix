<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Content Type</h3>
    </div>
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('contenttype.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Content Type" name="name" required>
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
