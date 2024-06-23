@extends('admin.layouts.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.galleries.store')}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Image Galleries</h6>
                            <div class="row">

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="News Title" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Gallery title
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                              

                                          <div class="col-md-6 pt-4">
                                              <div class="custom-file">
                                            <input type="file" name="images" class="custom-file-input  @error('images') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Select Images</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Hold down the CTR key on ur keyboard to select multiple images
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
                             <button type="submit" class="btn btn-primary p-3">Upload Images</button>
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
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection