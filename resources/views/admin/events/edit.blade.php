@extends('admin.layouts.admin')
@section('content')

        <!-- begin::page-header -->
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
               <form action='{{route('admin.events.update', encrypt($Events->id))}}' method='post' enctype='multipart/form-data'>
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Events</h6>
                          
                            <div class="row">
                                     <div class="col-md-6">
                                       <div class="form-group">
                                      <input type="text" name="topic" placeholder="Enter Topic" value="{{$Events->topic}}" class="form-control @error('topic') is-invalid @enderror" >
                                            <small id="emailHelp" class="form-text text-muted">Event Topic
                                            </small>
                                            @error('topic')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                         </div>  
                                         <div class="col-md-6">
                                          <div class="form-group">
                                         <input type="text" name="venue" placeholder="Enter venue" value="{{$Events->venue}}" class="form-control @error('venue') is-invalid @enderror" >
                                               <small id="emailHelp" class="form-text text-muted">Event Venue
                                               </small>
                                               @error('venue')
                                               <span class="invalid-feedback"> <small> * </small> </span>
                                               @enderror
                                           </div>
                                            </div>  
                                            <div class="col-md-6">
                                              <div class="form-group">
                                             <input type="text" name="date" placeholder="Enter venue" value="{{$Events->date}}" class="form-control @error('date') is-invalid @enderror" >
                                                   <small id="emailHelp" class="form-text text-muted">Event Venue
                                                   </small>
                                                   @error('date')
                                                   <span class="invalid-feedback"> <small> * </small> </span>
                                                   @enderror
                                               </div>
                                                </div> 
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                 <input type="text" name="organizers" placeholder="Enter venue" value="{{$Events->organizers}}" class="form-control @error('organizers') is-invalid @enderror" >
                                                       <small id="emailHelp" class="form-text text-muted">Event Venue
                                                       </small>
                                                       @error('organizers')
                                                       <span class="invalid-feedback"> <small> * </small> </span>
                                                       @enderror
                                                   </div>
                                                    </div> 
                                         <div class="col-md-12">
                                            <div class="form-group">
                                           <textarea id="summernote" name="description"  class="form-control @error('description') is-invalid @enderror" >
                                            {{$Events->description}}
                                          </textarea>
                                                 <small id="emailHelp" class="form-text text-muted">Enter Event description
                                                 </small>
                                                 @error('description')
                                                 <span class="invalid-feedback"> <small> * </small> </span>
                                                 @enderror
                                             </div>
                                              </div>  
                                            
                                              
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <img src="{{asset('images/'.$Events->image)}}" width="100px">
                                               <input type="file" name="image" placeholder="Select Image" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" >
                                                     <small id="emailHelp" class="form-text text-muted">Select  Image
                                                     </small>
                                                     @error('image')
                                                     <span class="invalid-feedback"> <small> * </small> </span>
                                                     @enderror
                                                 </div>
                                                  </div>  
                                                  @method('patch')
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
                             <button type="submit" class=" btn btn-primary w-10 p-3 ">Add Event</button>
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

$('input[name="audition_date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 3000,
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