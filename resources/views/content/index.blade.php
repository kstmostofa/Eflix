@extends('adminlte::page')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <!-- left column -->
                    @include('content.create')
                </div>
                <!-- general form elements -->


                <!-- right column -->
                <div class="col-md-7">
                    <!-- general form elements disabled -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">All Contents</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 5%">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">Artists</th>
                                        <th scope="col">Is Auth</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->cat->name }}</td>
                                            <td>{{ $item->subcat->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->is_auth }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ route('content.edit', $item->id) }}"
                                                    class="btn btn-xs btn-warning">Edit</a>
                                                <a href="{{ route('content.destroy', $item->id) }}"
                                                    class="btn btn-xs btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
