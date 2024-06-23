@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($galleries as $gallery )
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body" style="overflow: scroll">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">
                                <a href="#" class="link-2">{{$gallery->title}}</a> 
                            </h5>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a  onclick="return confirm('Are you sure?')" href="{{route('admin.galleries.delete', encrypt($gallery->id))}}" class="dropdown-item text-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted small mt-1 mb-3"></div>
                        <div class="progress mb-2" style="height: 5px;">
                            <div class="progress-bar bg-primary"></div>
                        </div>
                        <div class="avatar-group"  >
                            @forelse($images as $item)
                            <div class="p-5" >
                                <img src="{{asset('images/'.$item->images))}}"  width="80px">
                        </div>
                            @empty 
                            @endforelse
                        @endif
                           
                        </div>
                      
                        <div class="row">
                            <div class="col">
                                <hr>
                                {{-- <div class="text-muted mb-1 small">Created</div> --}}
                                <div>{{$gallery->created_at->format('d-m-y h:ia')}}</div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
        
                </div>
            </div>
            @empty
            @endforelse
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