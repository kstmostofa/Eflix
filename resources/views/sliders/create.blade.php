@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slider</h3>
                    </div>
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('sliders.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control " name="category" id="select2">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12" style="border: 1px solid red; min-height:250px; padding-top: 10px">
                                <div class="repeater-default">
                                    <div data-repeater-list="gallery">
                                        <div data-repeater-item>
                                            <div class="" data-repeater-item>
                                                <div class="card-body row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="file" id="bal" name="image" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <input type="text" class="form-control" name="link"
                                                                placeholder="URL">


                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-md-2 text-center mt-2">
                                                        <button type="button" class="btn btn-danger" data-repeater-delete>
                                                            <i class="feather icon-x"></i>
                                                            Delete</button>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-group overflow-hidden">
                                        <div class="col-12">
                                            <div data-repeater-create class="btn btn-primary btn-lg">
                                                <i class="icon-plus4"></i> Add
                                            </div>
                                        </div>
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
@section('adminlte_js')
    <script
        src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js">
    </script>
    <script src="{{ asset('js/repeater.js') }}"></script>


    {{-- <script src="{{ asset('js/upload.js') }}"></script> --}}
    {{-- <script>
        $("#coba").spartanMultiImagePicker({
            fieldName: 'images[]',
            rowHeight: '200px',
            groupClassName: 'col-md-2',
            dropFileLabel: "Drop Here",
            placeholderImage: {
                image: 'placeholder.png',
            },
            onAddRow: function(index) {
                console.log(index);
                console.log('add new row');
            },
            onRenderedPreview: function(index) {
                console.log(index);
                console.log('preview rendered');
            },
            onRemoveRow: function(index) {
                console.log(index);
                console.log('remove row');
            },
            onExtensionErr: function(index, file) {
                console.log(index, file);
                alert('Please only input png or jpg type file');
            },
            onSizeErr: function(index, file) {
                console.log(index, file);
                alert('File size too big');
            }
        });

    </script> --}}
@endsection
