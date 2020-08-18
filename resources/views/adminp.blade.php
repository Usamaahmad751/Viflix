
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
  <!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!!asset('panel/Ionicons/css/ionicons.min.css')!!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!!asset('panel/AdminLTE.min.css')!!}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{!!asset('panel/skins/skin-blue.min.css')!!}">
  <link rel="stylesheet" href="{!!asset('panel/admin.css')!!}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!--Summernote -->
  <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
   

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a class="logo title" href="{{route('home')}}">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini title"><b>Viflix</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg title"><b>Viflix</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="push-menu">
        <i class="fas fa-chevron-left"></i>
      </a>
    
        <span class="admin-nav"><b>Viflix</b></span>
        <span class="sr-only">Toggle navigation</span>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" >
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        <form method="POST" action="{{ route('logout') }}">
 		@csrf
  		<button class="primary" type="submit">Logout</button>
		</form>

         
          
          <!-- User Account Menu -->
          
            
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
       
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" >
        
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#cblog" data-toggle="tab"><i class="fas fa-edit"></i> <span>Create Blog</span></a></li>
        <li><a href="#blog" data-toggle="tab"><i class="fab fa-blogger-b"></i> <span>Blogs</span></a></li>
        <li><a href="#projects" data-toggle="tab"><i class="far fa-newspaper"></i> <span>Projects</span></a></li>
        <li><a href="#promos" data-toggle="tab"><i class="fas fa-tags"></i> <span>Create Promos</span></a></li>
        <li><a href="#Mpromos" data-toggle="tab"><i class="fas fa-clipboard"></i><span>   Manage Promos</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="tab-content">
    
    <div id="cblog" class="tab-pane in active">
        <div class="tab-pane p-color">
          <form class="form" action="/admin/addBlog" enctype="multipart/form-data" method="POST">   
              <div class="form-group">                   
                  <div class="col-xs-8">
                      <label for="Dname"><h4 class="user">Blog Title<span style="color: red;">*</span></h4></label>
                      <input type="text" class="form-control" name="Bname" id="Bname" placeholder="Add a title for your blog." required>
                  </div>
              </div>
             <div class="form-group">                   
                  <div class="col-xs-8">
                      <label for="Desc"><h4 class="user">Content<span style="color: red;">*</span></h4></label>
                      <textarea class="form-control summernote" name="Bdesc" id="Bdesc" placeholder="Add text content for your blog." required autofocus="autofocus"></textarea>
                  </div>
              </div>
          <div class="form-group">
            <div class="col-xs-8">
              <label for="file-def"><h4 class="user">Select Image<span style="color: red;">*</span></h4></label>
                <div class="image-upload">
                  <input id="file-def" type="file" name="file-def" multiple required>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="hidden" value="Upload Picture">
                </div>
              </label>      
            </div>
          </div>
              <div class="form-group">
               <div class="col-xs-8">
                    <br>
                    <center>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">  
                    <button class="btn btn-lg btn-success" type="submit"> Save </button>
                    </center>
                </div>
              </div>
          </form>
        </div>
    </div>

    <div id="blog" class="tab-pane in">
        <div class="tab-pane p-color">
          <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Blog Name</th>
                <th scope="col">Blog Description</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach($blog as $bitem)
              <tr>
                <td scope="row">{{$bitem->bid}}</td>
                <td>{{$bitem->bname}}</td>
                <td>{!!$bitem->bdesc!!}</td>
                <td>
                  <form style="display: inline-block;background-color: transparent;" class="del" action="/delBlog" data-token="{{ csrf_token() }}" enctype="multipart/form-data" method="POST">
                    <button style="background:transparent; padding: 0px; border: 0px; border-radius: 2px;" type="submit"  method="POST"  class="upv btn del-btn">
                      <i style="color: #cb2f2f;" class="far fa-trash-alt"></i>    
                      <input type="hidden" class="del" name="bId" value="{{$bitem->bid}}">
                    </button>
                  @csrf
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div>
    </div>

    <div id="projects" class="tab-pane in">
        <div class="tab-pane p-color">
          <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Category</th>
                <th scope="col">Total Length</th>
                <th scope="col">Raw Footage</th>
                <th scope="col">Music</th>
                <th scope="col">Description</th>
                <th scope="col">Promo</th>
                <th scope="col">Cost</th>
                <th scope="col">Received</th>
                <th scope="col">Delete</th>
                <th scope="col">Invoice</th>
              </tr>
            </thead>
            <tbody>
              @foreach($project as $pitem)
              <tr>
                <td scope="row">{{$pitem->Pid}}</td>
                <td>{{$pitem->name}}</td>
                <td>{{$pitem->email}}</td>
                <td>{{$pitem->category}}</td>
                <td>{{$pitem->totallength}}</td>
                <td>{{$pitem->rawlength}}</td>
                <td>{{$pitem->music}}</td>
                <td>{{$pitem->description}}</td>
                <td>{{$pitem->promo}}</td>
                <td>{{$pitem->cost}}</td>
                <td>{{$pitem->created_at}}</td>
                <td>
                  <form style="display: inline-block;background-color: transparent;" class="del" action="/delProject" data-token="{{ csrf_token() }}" enctype="multipart/form-data" method="POST">
                    <button style="background:transparent; padding: 0px; border: 0px; border-radius: 2px;" type="submit"  method="POST"  class="upv btn del-btn">
                      <i style="color: #cb2f2f;" class="far fa-trash-alt"></i>    
                      <input type="hidden" class="del" name="pId" value="{{$pitem->Pid}}">
                    </button>
                  @csrf
                  </form>
                </td>
                <td>
                <a href="{{ asset('invoices/'.$pitem->Pid)}}">Download Invoice</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>

    <div id="promos" class="tab-pane in">
        <div class="tab-pane p-color">
          <form class="form" action="/admin/addPromo" enctype="multipart/form-data" method="POST">   
              <div class="form-group">                   
                  <div class="col-xs-8">
                      <h4 class="user">Promo Code<span style="color: red;">*</span></h4></label>
                      <input type="text" class="form-control" name="Promo" placeholder="Specify Promo Code" required>
                  </div>
              </div>
             <div class="form-group">                   
                  <div class="col-xs-8">
                      <label for="Desc"><h4 class="user">Discount (%)<span style="color: red;">*</span></h4></label>
                      <input type="number" class="form-control" name="Amount" placeholder="Specify amount of discount " required min="1" max="100">
                  </div>
              </div>
              
              <div class="form-group">
               <div class="col-xs-8">
                    <br>
                    <center>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">  
                    <button class="btn btn-lg btn-success" type="submit"> Save </button>
                    </center>
                </div>
              </div>
          </form>
        </div>
    </div>

    <div id="Mpromos" class="tab-pane in">
        <div class="tab-pane p-color">
          <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Promo Code</th>
                <th scope="col">Amount</th>
                <th scope="col">Created On</th>
                <th scope="col">Delete</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach($promo as $promoitem)
              <tr>
                <td scope="row">{{$promoitem->id}}</td>
                <td>{{$promoitem->promo}}</td>
                <td>{{$promoitem->amount}}</td>
                <td>{{$promoitem->created_at}}</td>
                <td>
                  <form style="display: inline-block;background-color: transparent;" class="del" action="/delPromo" data-token="{{ csrf_token() }}" enctype="multipart/form-data" method="POST">
                    <button style="background:transparent; padding: 0px; border: 0px; border-radius: 2px;" type="submit"  method="POST"  class="upv btn del-btn">
                      <i style="color: #cb2f2f;" class="far fa-trash-alt"></i>    
                      <input type="hidden" class="del" name="prId" value="{{$promoitem->id}}">
                    </button>
                  @csrf
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>

    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 



      </div>
      <!-- /.tab-pane -->
     
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{!!asset('js/jquery-3.2.1.min.js')!!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="{!!asset('panel/adminlte.min.js')!!}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script src="{{ asset('js/summernote.min.js') }}"></script>


</body>
<script type="text/javascript">
   $(document).ready(function() {
    $('.summernote').summernote({
          height: 500,
     });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
           $('#technig').summernote({
             height:300,
           });
       });
</script>
</html>
