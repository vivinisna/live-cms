<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title or 'Judul' }} | {{ globalParams('site_name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSRF -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="/backend/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/backend/plugins/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/backend/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="/backend/plugins/select2/select2-bootstrap.min.css">
  <!-- Datepicker -->
  <link rel="stylesheet" href="/backend/plugins/datepicker/datepicker3.css">
  <!-- datatables -->
  <link rel="stylesheet" href="/backend/plugins/datatables/dataTables.bootstrap.css">
  <!-- I Check -->
  <link rel="stylesheet" href="/backend/plugins/iCheck/square/blue.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="/backend/dist/css/skins/skin-blue.min.css">

  <style type="text/css">
    .user-label {
        width: 30px;
        height: 30px;
        text-align: center;
        background-color: rgba(85, 85, 85, 0.25);
        border-radius: 50%;
        margin-top: -5px;
        margin-bottom: -5px;
        padding: 5px;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
@if(auth()->user())
@section('templateBody')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">{{ globalParams('site_initial') }}</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{ globalParams('site_name') }}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div class="user-label">
                <span>{{ auth()->user()->getInitial() }}</span>
              </div>
              <!-- The user image in the navbar-->
              <!-- <img src="/backend/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <!-- <span class="hidden-xs">Alexander Pierce</span> -->
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ str_limit(auth()->user()->name, 20) }}
                  <small>Since {{ auth()->user()->created_at->diffForHumans() }}</small>
                </p>
              </li>
              <!-- Menu Body -->
<!--               <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('/me') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> <span class="hidden-sm">Logout</span></a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        @include('partials.adminmenus')
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title or 'Page Header' }}
        <small>{{ $description or 'Optional description' }}</small>
      </h1>
      <ol class="breadcrumb">
      @if(isset($breadcrumbLevel))
        <li><a href="{{ $breadcrumb1Url or route('admin.home') }}"><i class="fa fa-{{ $breadcrumb1Icon or 'dashboard' }}"></i> {{ $breadcrumb1 or 'Menu' }}</a></li>
        @if($breadcrumbLevel >= 2)<li class="{{ $breadcrumb2Class or 'active' }}"><a href="{{ $breadcrumb2Url or 'javascript:;' }}" ><i class="fa fa-{{ $breadcrumb2Icon or '' }}"></i> {{ $breadcrumb2 or 'Here' }}</a></li>@endif
        @if($breadcrumbLevel >= 3)<li class="{{ $breadcrumb3Class or 'active' }}"><a href="{{ $breadcrumb3Url or 'javascript:;' }}" ><i class="fa fa-{{ $breadcrumb3Icon or '' }}"></i> {{ $breadcrumb3 or 'Here' }}</a></li>@endif
      @endif
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">{{ $global_params['site_name'] or 'Company' }}</a>.</strong> All rights reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="/backend/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/backend/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/app.min.js"></script>
<!-- date js -->
<script src="/backend/plugins/datejs/date.js"></script>
<!-- date-range-picker -->
<script src="/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/backend/plugins/datepicker/locales/bootstrap-datepicker.id.js" charset="UTF-8"></script>
<!-- DataTables -->
<script src="/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap Typeahead -->
<script src="/backend/plugins/bootstrap-typeahead/bootstrap3-typeahead.min.js"></script>
<!-- Select2 -->
<script src="/backend/plugins/select2/select2.full.min.js"></script>
<!-- autonumeric -->
<script src="/backend/plugins/autoNumeric/autoNumeric-min.js"></script>
<!-- TinyMCE -->
<script src="/backend/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backend/dist/js/demo.js"></script>


<script>
  String.prototype.toRp = function(a,b,c,d,e) {
    e=function(f){return f.split('').reverse().join('')};b=e(parseInt(this,10).toString());for(c=0,d='';c<b.length;c++){d+=b[c];if((c+1)%3===0&&c!==(b.length-1)){d+='.';}}return(a?a:'Rp.\t')+e(d);
  }
  $(function() {
    $.fn.datepicker.defaults.format = "{{ config('liveapp.dateformat', 'dd-MM-yyyy') }}";
    $.fn.datepicker.defaults.language = "en";
    $.fn.datepicker.defaults.todayHighlight = true;
    $.fn.datepicker.defaults.autoclose = true;
    $.fn.datepicker.defaults.forceParse = false;

    $('.datepicker').datepicker();          

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.fn.modal.Constructor.DEFAULTS.backdrop = 'static';

    $.fn.liveposCurrency = {aSep: '.', aDec: ',', aSign: 'Rp. ', lZero: 'deny'};
    $.fn.liveposNumeric = {aSep: '.', aDec: ',', aSign: '', lZero: 'deny'};

    $('select').select2({width: '100%'});    
    
    $('.input-mask.input-mask-currency').autoNumeric('init', $.fn.liveposCurrency);
    $('.input-mask.input-mask-numeric').autoNumeric('init', $.fn.liveposNumeric);

    $('form').submit(function(e) {

      var form = $(this);
      console.log(form);
      form.find('.btn-primary').prop('disabled', true); 
      form.find('.input-mask').each(function(i, e) {
        var v = $(this).autoNumeric('get');
        console.log(v)
        $(this).val(v);
      })
      form.find('.datepicker').each(function(i, e) {
        var v = $(this).val();
        console.log(v)
        console.log($.fn.datepicker.defaults.format)
        d = Date.parseExact(v, [$.fn.datepicker.defaults.format, 'dd-MMM-yyyy']);
        newDate = d.toString('yyyy-M-dd');
        $(this).val(newDate);
      })
      return true;
    })

      var slideToTop = $("<div />");
      slideToTop.html('<i class="fa fa-chevron-up"></i>');
      slideToTop.css({
        position: 'fixed',
        bottom: '40px',
        right: '25px',
        width: '40px',
        height: '40px',
        color: '#eee',
        'font-size': '',
        'line-height': '40px',
        'text-align': 'center',
        'background-color': '#222d32',
        cursor: 'pointer',
        'border-radius': '5px',
        'z-index': '99999',
        opacity: '.7',
        'display': 'none'
      });
      slideToTop.on('mouseenter', function () {
        $(this).css('opacity', '1');
      });
      slideToTop.on('mouseout', function () {
        $(this).css('opacity', '.7');
      });
      $('.wrapper').append(slideToTop);
      $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
          if (!$(slideToTop).is(':visible')) {
            $(slideToTop).fadeIn(500);
          }
        } else {
          $(slideToTop).fadeOut(500);
        }
      });
      $(slideToTop).click(function () {
        $("body").animate({
          scrollTop: 0
        }, 500);
      });

  @if(isset($base))
    $('.datatables').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
          url: '{!! action($baseClass.'@data', array_merge(request()->query(), isset($query) ? (array) $query : [])) !!}',
          type: 'POST'
        },
        columns: [
          @foreach(array_keys($fields) as $field) { name: '{{ $field }}', data: '{{ $field }}', sortable: {{ in_array($field, $unsortables) ? 'false' : 'true'}}}, @endforeach
          { name: 'menu', data: 'menu', sortable: false },
        ],
        order: [@foreach($orders as $key => $order) [{{ $key }}, '{{ $order }}']@endforeach],
    });
  @endif

  @if(isset($useCKEditor))
    tinymce.init({
      selector: 'textarea',
      automatic_uploads: true,
      height: 500,
      theme: 'modern',
      plugins: [
        'advlist autolink lists link charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
      ],
      toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages',
      toolbar2: 'print preview media | forecolor backcolor emoticons',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      relative_urls: false,
     });
  @endif
  
  })


</script>

@yield('script.footer')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
@stop
@endif
@yield('templateBody')
</html>
