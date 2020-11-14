<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Artist</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('artist.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Artist Name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Artist Title" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Bio</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="bio"></textarea>
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
