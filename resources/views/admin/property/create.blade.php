@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action='{{ route('admin.property.store') }}' method='post', enctype='multipart/form-data'>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Post Property for Sale</h6>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{ old('title') }}"
                                            class="form-control @error('title') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Title">
                                        <small id="emailHelp" class="form-text text-muted">Enter Property for Sale title
                                        </small>
                                        @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="price" value="{{ old('price') }}"
                                        class="form-control @error('price') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
                                        <small id="emailHelp" class="form-text text-muted">Property Price
                                        </small>
                                        @error('price')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="size" value="{{ old('size') }}"
                                        class="form-control @error('size') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter size">
                                        <small id="emailHelp" class="form-text text-muted">Property Size
                                        </small>
                                        @error('size')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="summernote" class="@error('content') is-invalid @enderror" name="content">{{ old('content') }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted"> Property Description
                                        </small>
                                        @error('content')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="features" class="@error('features') is-invalid @enderror" name="features">{{ old('features') }}</textarea>
                                        <small id="emailHelp" class="form-text text-muted">Packages available
                                        </small>
                                        @error('features')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 pt-4">
                                    <div class="custom-file">
                                        <input type="file" name="image"
                                            class="custom-file-input  @error('image') is-invalid @enderror">
                                        <label class="custom-file-label" for="customFile">Choose Page Cover Image</label>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted"> Choose a cover image
                                    </small>
                                    @error('image')
                                        <span class="invalid-feedback"> <small> *</small> </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 pt-4">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" multiple
                                            class="custom-file-input  @error('images') is-invalid @enderror">
                                        <label class="custom-file-label" for="customFile">Choose Image</label>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted"> Choose images
                                    </small>
                                    @error('image')
                                        <span class="invalid-feedback"> <small> *</small> </span>
                                    @enderror
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <div class="p-5">
                                        <button type="submit" class="btn btn-primary p-3">Add Property</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.clockpicker-example').clockpicker({
            autoclose: true
        });

        $('input[name="date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        let message = {!! json_encode(Session::get('message')) !!};
        let msg = {!! json_encode(Session::get('alert')) !!};
        //alert(msg);
        toastr.options = {
            timeOut: 8000,
            progressBar: true,
            showMethod: "slideDown",
            hideMethod: "slideUp",
            showDuration: 200,
            hideDuration: 200
        };
        if (message != null && msg == 'success') {
            toastr.success(message);
        } else if (message != null && msg == 'error') {
            toastr.error(message);
        }
    </script>
@endsection
