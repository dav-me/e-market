
<?php 
  
  include('dist/js/conf_funct.php'); include('Action.php');  
  $recentMessage = _get_latest_message($bdd);

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>les 1000s | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/myCssStyle.css">
  <link rel="icon" sizes="" href="../_bx_assoc_imgs_/vraieheader.png">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/font-y/css/font-awesome.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="navbar-nav">
        <a href="?_trgPage_=_get_logme_out_pg_" class="nav-link"><i class="fa fa-sign-out"></i> Déconnexion</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?_trgPage_=_get_home_pg_" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3" method="POST" action="#">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <h3><i class="fa fa-comments display-2"></i></h3>
          <span class="badge badge-danger navbar-badge"><?php echo(_count_unread_message($bdd)) ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width:400px">
          <?php 
            
            if($recentMessage !== null){
              foreach($recentMessage as $item){
                $submess = substr($item->content,0,24).' ...';
                $name = substr($item->name,0,1);
                // $ispending = ($) ? '<i class="fa fa-star-o text-warning"></i>' : '<i class="fa fa-star-o text-warning"></i>';
          ?>
              <!-- ---------------------------------------------------------------------------- -->
              <a href="?_trgPage_=_get_readMessage_pg_&_cab=<?php echo($item->id) ?>" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <!-- <img src="../dist/img/user8-128x128.jpg" alt="User" class="img-size-50 img-circle mr-3"> -->
                  <span class="bg-secondary text-wight-bold border text-uppercase p-1 rounded-circle mr-3 px-3 pt-1 border-warning"><h3><strong><?php echo($name); ?></strong></h3></span>
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    <?php echo($item->name); ?>
                      <span class="float-right text-sm text-muted"><i class="fa fa-star text-warning"></i></span>
                    </h3>
                    <p class="text-sm"><?php echo($submess); ?></p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <small><?php echo($item->date); ?></small></p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <!-- ----------------------------------------------------------------------------- -->
          <?php } echo('<a href="?_trgPage_=_get_message_pg_" class="dropdown-item dropdown-footer text-center">See All Messages</a>');} ?>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <h3><i class="far fa-bell"></i></h3>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?_trgPage_=_get_home_pg_" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">&nbsp;1000Services | </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <div class="img-circle elevation-2 for-initial" alt="User Image">
            <strong><?php echo(_getInitialOfFullName()); ?></strong>
          </div>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php (_getMyfullSessionName());?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?_tgrPage=_get_home_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>1000Services </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Actions
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?_trgPage_=_get_action_adding_prd_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un produit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?_trgPage_=_get_display_product_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher tous les produits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?_trgPage_=_post_action_adding_bata" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produit Bata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?_trgPage_=_get_action_cmmd_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list des commandes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?_trgPage_=_get_trash_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Corbeil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistiques
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chart evolution</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?_trgPage_=_get_display_product_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table des automobiles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">OPTION D'ACCES</li>
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="?_trgPage_=_get_message_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="_GoVit_box_pgs_/_get_signup_pg_.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enregistrement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?_trgPage_=_get_logme_out_pg_" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deconnexion</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">1000Services</h1><span class="label text-secondary">Dashboard <span class="right badge badge-primary">on</span></span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><span class="fa fa-cogs"></span></a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <?php include '_GoVit_box_pgs_/'.$page.'.php'; ?> 
        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong> 
      Copyright &copy;
      <script>document.write(new Date().getFullYear());</script>
       <a href="#">les 1000 services | DashBoard .</a></strong>
        All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      Powered by <b><a href="#">David maene</a></b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script src="dist/js/_forPreview.js"></script>

<script src="dist/js/_forPreview_1.js"></script>
<script src="dist/js/_forPreview_2.js"></script>
<script src="dist/js/_forPreview_3.js"></script>
<script src="dist/js/_forPreview_4.js"></script>
<!-- <script src="dist/js/_validateFileSize.js"></script> -->
</body>
</html>
