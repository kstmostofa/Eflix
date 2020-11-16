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
                    <div class="card-body">
                        <table class="table table-borderless" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>




                </div>

            </div>
        </div>
    </div>
@endsection
@section('adminlte_js')

    <script src="{{ asset('js/upload.js') }}"></script>
    <script>
        $("#coba").spartanMultiImagePicker({
            fieldName: 'images[]',
            maxCount: 5,
            rowHeight: '200px',
            groupClassName: 'col-md-2',
            allowedExt: 'png|jpg',
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

    </script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });

    </script>
@endsection
