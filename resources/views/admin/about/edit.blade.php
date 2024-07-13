@extends('admin.layouts.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.PagesUpdate', encrypt($AboutPage?->id))}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit About Us Page   <span class="float-right"> <a href="{{route('admin.goals.index')}}" class="btn btn-outline-info ml-2">Manage Goals</a>  </span> <span class="float-right"> <a href="{{route('admin.comptitive.advantage')}}" class="btn btn-outline-info ml-2">Manage Comptitive Advantage</a>  </span> <span class="float-right"> <a href="{{route('admin.core.objectives')}}" class="btn btn-outline-info">Manage Objectives</a>  </span> </h6>
                          
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                          <small id="emailHelp"  class="form-text text-black" style="font-size: 15px">Enter page title
                                          </small>
                                            <input type="text" name="title"  value="{{$AboutPage?->title}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Page Title">
                                           
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                        
                                         <div class="col-md-12">
                                  <div class="form-group">
                                    <small id="emailHelp"  class="form-text text-black" style="font-size: 15px">Page Contents
                                    </small>
                                    <textarea id="summernote" class="@error('contents') is-invalid @enderror" name="contents">{{$AboutPage?->contents}}</textarea>
                                  
                                            @error('contents')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                    </div>


                                         </div>

                                         <div class="col-md-12">
                                          <div class="form-group">
                                            <small id="emailHelp" class="form-text text-black" style="font-size: 15px">Company Mission Statement
                                            </small>
                                            <textarea id="mission" class="@error('mission') is-invalid @enderror" name="mission">{{$AboutPage?->mission}}</textarea>
                                             
                                                    @error('mission')
                                                    <span class="invalid-feedback"> <small> *</small> </span>
                                                    @enderror
                                            </div>
        
        
                                                 </div>

                                                 <div class="col-md-12">
                                                  <div class="form-group">
                                                    <small id="emailHelp"  class="form-text text-black" style="font-size: 15px">Company Vision Statement
                                                    </small>
                                                    <textarea id="vision" class="@error('vision') is-invalid @enderror" name="vision">{{$AboutPage?->vision}}</textarea>
                                                    
                                                            @error('vision')
                                                            <span class="invalid-feedback"> <small> *</small> </span>
                                                            @enderror
                                                    </div>
                
                
                                                         </div>

{{-- 
                                                         <div class="col-md-12">
                                                          <div class="form-group">
                                                            <small id="emailHelp"  class="form-text text-black" style="font-size: 15px">Company Core Values
                                                            </small>
                                                            <textarea id="core_values" class="@error('core_values') is-invalid @enderror" name="core_values">{{$AboutPage?->core_values}}</textarea>
                                                          
                                                                    @error('core_values')
                                                                    <span class="invalid-feedback"> <small> *</small> </span>
                                                                    @enderror
                                                            </div>
                        
                        
                                                                 </div> --}}


                                          <div class="col-md-6 pt-4">
                                            <img src="{{asset('images/'.$AboutPage?->image)}}" width="100px">
                                              <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Choose Page Cover Image</label>
                                            </div>
                                            <small id="emailHelp"  class="form-text text-black" style="font-size: 15px"> Choose a cover image 
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
                             <button type="submit" class="btn btn-primary p-3">Update  Abous Us Page</button>
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
 CKEDITOR.replace( 'mission' );
 CKEDITOR.replace( 'vision' );
 CKEDITOR.replace( 'core_values' );


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