<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name')}}</title>
    <!-- Favicon -->
 <link rel="stylesheet" href="{{asset('/backend/vendors/dataTable/dataTables.min.css')}}" type="text/css">
 <link rel="shortcut icon" href="{{asset('/assets/favs.png')}}" type="image/x-icon"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/bundle.css')}}" type="text/css">
  <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/datepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/vendors/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/slick/slick-theme.css')}}" type="text/css">
    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/vmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/css/app.min.css')}}" type="text/css">
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <body>
    <!-- App styles  -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
@include('admin.layouts.header')
<div id="main">
    <!-- begin::navigation -->
    <div class="navigation">
        <div class="navigation-menu-tab" style="background:rgb(25, 27, 57)">
          <div>
                <div class="navigation-menu-tab-header" data-toggle="tooltip" title="Admin" data-placement="right">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <figure class="avatar avatar-sm">
                                 <img src="{{asset('assets/'.$settings->logo)}}" height="10px" width="10px">
                        </figure>
                    </a>
                </div>
            </div>
               <div class="flex-grow-1">
               <ul>
                    <li>
                        <a class="active" href="" data-toggle="tooltip" data-placement="right" title="Dashboard"
                           data-nav-target="#dashboards">
                            <i data-feather="bar-chart-2"></i>
                        </a>
                    </li>
                    </ul>
            </div>
              <div>
                <ul>
                    <li>
                        <a href="{{route('admin.settings.index')}}" data-toggle="tooltip" data-placement="right" title="Settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout') }}" onclick="event.preventDefault() 
                                        document.getElementById('logout-form').submit()" data-placement="right" title="Logout">
                            <i data-feather="log-out"></i>
                        </a>
                         <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                    </li>
                </ul>
            </div>
        </div>

        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">
            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="{{route('admin.index')}}">
                        <img class="logo" src="{{asset('assets/'.$settings->logo)}}" height="auto" width="120px">
                        <img class="logo-light" src="{{asset('assets/'.$settings->logo)}}" height="auto" width="120px" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->
          @include('admin.layouts.sidebar')
        </div>
        <!-- end::navigation menu -->

    </div>
    
 <div class="main-content">
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>{{$bheading}}</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.index')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- end::page-header -->
    @yield('content')

    <footer>
        <div class="container-fluid">
            <div>© 2023 {{$settings->site_name}}, All Rights Reserved</a></div>
            <div>
                
            </div>
        </div>
    </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{asset('/backend/vendors/bundle.js')}}"></script>
<!-- Chartjs -->
<script src="{{asset('/backend/vendors/charts/chartjs/chart.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.bootstrap4.min.js')}}"></script>
<!-- Apex chart -->
<script src="{{asset('/backend/vendors/charts/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('/backend/vendors/irregular-data-series.js')}}"></script>
<script src="{{asset('/backend/vendors/charts/apex/apexcharts.min.js')}}"></script>

<!-- Circle progress -->
<script src="{{asset('/backend/vendors/circle-progress/circle-progress.min.js')}}"></script>
<!-- Peity -->
<script src="{{asset('/backend/vendors/charts/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('/backend/js/examples/charts/peity.js')}}"></script>

<script src="{{asset('/backend/vendors/prism/prism.js')}}"></script>
<script src="{{asset('/backend/js/examples/clockpicker.js')}}"></script>
<!-- Datepicker -->
<script src="{{asset('/backend/vendors/datepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<!-- Slick -->
<script src="{{asset('/backend/vendors/slick/slick.min.js')}}"></script>
<!-- Vamp -->
<script src="{{asset('/backend/vendors/vmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/backend/vendors/vmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/backend/js/examples/vmap.js')}}"></script>



<script src="{{asset('/backend/js/examples/dashboard.js')}}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>
<!-- App scripts -->
<script src="{{asset('/backend/js/app.min.js')}}"></script>
{{-- <script>
   $(document).ready(function() {
        $('#summernote').summernote({
            height: 400, 
        });
    });
</script> --}}
<script>
    CKEDITOR.replace( 'summernote' );
</script>
<script>
    CKEDITOR.replace( 'features' );
</script>
{{-- <script>
    ClassicEditor
        .create( document.querySelector( '#summernote' ), {
            toolbar: {
    items: [
        'heading', '|',
        'alignment', '|',
        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
        'link', '|',
        'bulletedList', 'numberedList', 'todoList',
        'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|',
        'code', 'codeBlock', '|',
        'insertTable', '|',
        'outdent', 'indent', '|',
        'uploadImage', 'blockQuote', '|',
        'undo', 'redo',
        'fontfamily', 'fontsize', '|',
        'fontColor', 'fontBackgroundColor', '|',
    ],
    shouldNotGroupWhenFull: false
}
        } )
        
        .catch( error => {
            console.error( error );
        } );
</script> --}}
@yield('script')


</body>
</html>