<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('sximo.cnf_appname') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('admin/')}}/dist/css/AdminLTE.min.css">
  
  <link href="{{ asset('sximo5/sximo.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sximo5/css/theme.css') }}" rel="stylesheet">
  <link href="{{ asset('sximo5/css/core.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('admin/')}}/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="{{asset('admin/')}}/dist/css/skins/_all-skins.min.css">
  <script src="{{asset('admin/')}}/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- datatables -->
  <link href="{{asset('admin/datatables/')}}/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/datatables/')}}/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('sximo5/js/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('sximo5/js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('sximo5/js/plugins/iCheck/skins/flat/blue.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <script type="text/javascript" src="{{ asset('sximo5/sximo.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('sximo5/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('sximo5/js/plugins/summernote') }}/dist/summernote.min.js"></script>
<script src="{{ asset('sximo5/js/plugins/summernote/plugin') }}/summernote-ext-highlight.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<script type="text/javascript" src="{{ asset('sximo5/js/plugins/datepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo5/js/plugins/select2/js/select2.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('sximo5/js/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo5/js/plugins/node-waves/waves.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo5/js/sximo.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo5/js/plugins/prettify.js') }}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
 
  <!--Kontent-->
   
    
      <div class="row">
        <div class="col-md-12">
          
           
              {{ SiteHelpers::showNotification() }}
              @yield('content')
            
         
        </div>
      </div>



 

</div>
<div class="modal " id="sximo-modal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="sximo-modal-content">

        </div>

      </div>
    </div>
  </div>
  <script src="{{asset('admin/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('admin/')}}//bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('admin/')}}//dist/js/adminlte.min.js"></script>
<!-- datatable -->
<!-- Datatable js -->
<script src="{{asset('admin/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('admin/')}}/datatables/dataTables.bootstrap.js"></script>

<script src="{{asset('admin/')}}/datatables/dataTables.buttons.min.js"></script>

<script src="{{asset('admin/')}}/datatables/buttons.bootstrap.min.js"></script>

<script src="{{asset('admin/')}}/datatables/jszip.min.js"></script>

<script src="{{asset('admin/')}}/datatables/pdfmake.min.js"></script>

<script src="{{asset('admin/')}}/datatables/vfs_fonts.js"></script>

<script src="{{asset('admin/')}}/datatables/buttons.html5.min.js"></script>

<script src="{{asset('admin/')}}/datatables/buttons.print.min.js"></script>

<script src="{{asset('admin/')}}/datatables/dataTables.keyTable.min.js"></script>

<script src="{{asset('admin/')}}/datatables/dataTables.responsive.min.js"></script>
<script src="{{asset('admin/')}}/datatables/responsive.bootstrap.min.js"></script>
<script src="{{asset('admin/')}}/datatables/dataTables.scroller.min.js"></script>
<script src="{{asset('admin/')}}/datatables/dataTables.colVis.js"></script>
<script src="{{asset('admin/')}}/datatables/dataTables.fixedColumns.min.js"></script>
<!-- init -->
<script src="{{asset('admin/')}}/datatables/jquery.datatables.init.js"></script>


<script>
    $('.confirmLogout').click(function() {
      Swal.fire({
        title: 'Logout ?',
        text: ' Logout from the aplikasi ',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, please',
        cancelButtonText: 'cancel'
      }).then((result) => {
        if (result.value) {

          var url = $(this).attr('href');
          window.location.href = url;
          
        }
      })

      return false;

  });  

  $(document).ready( function () {
    
} );





</script>

</body>
</html>
