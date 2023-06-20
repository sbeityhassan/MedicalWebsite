<?php
require_once 'connect.php';
session_start();
$name = $_SESSION['fullName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookMyCare</title>
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon ">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BookMyCare</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profile
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="updateprof.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Update Profile</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard-editpassword.php">
                    <i class="fas fa-user-cog"></i>
                    <span>Edit Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Permissions
            </div>
    

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard -gov.php">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Governorate</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="major.php">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Major Doctor</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="doctorconf.php">
                    <i class="far fa-check-circle"></i>
                    <span>Confirmation</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">
                    <i class="fas fa-comments"></i>
                    <span>Feedback</span></a>
            </li>

           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!--form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form-->
                    <h3 class="pt-2">Welcome <?php echo $name;?></h3>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item ">
                            <a class="nav-link">
                                <img class="img-profile rounded-circle" src="img/logo.png">
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item">
                              <a class="nav-link" title="Full screen" data-widget="fullscreen" href="#" role="button">
                                <i class="fa fa-expand" style="font-size:110%"></i>
                              </a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" title="Logout"  data-toggle="modal" data-target="#logout" role="button">
                              <i class="fas fa-sign-out-alt" style='font-size:110%'></i>
                            </a>
                            </li>

                        <!-- logout modal -->
                        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want logout?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  <a href="index.php" type="button" class="btn btn-danger">Logout</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end logout -->


                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Doctor's Confirmation</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><a href="#">Doctor's Confirmation</a></li>
                        </ol>
                    </div>
    <div class="container-fluid">
        
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="col-lg-12">
                <table class="table text-center table-striped table-light table-bordered border-primary" style="box-shadow: 0 0 10px 0 rgba(24, 117, 216, 0.5);border-top: solid rgb(83, 158, 245)">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Doctor's Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Certificate</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Hasan Sbeity</td>
                            <td>Nabatieh</td>
                            <td>03030387</td>
                            <td>hasan.sb@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td> <a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm">
                                    <i class="fas fa-times"></i></a>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Hussein Hodroj</td>
                            <td>Nabatieh</td>
                            <td>81622175</td>
                            <td>hussein.hd@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Joya Estephan</td>
                            <td>Beirut</td>
                            <td>03478965</td>
                            <td>joya.este@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a> 
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Nour Chakaroun</td>
                            <td>Nabatieh</td>
                            <td>71856971</td>
                            <td>noor.ch@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Ali Nahle</td>
                            <td>Nabatieh</td>
                            <td>71123456</td>
                            <td>nahle.ali@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Abdelsalam Mahari</td>
                            <td>Mount Lebanon</td>
                            <td>78987654</td>
                            <td>salamabd.m@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Ali mantach</td>
                            <td>Bequaa</td>
                            <td>81598147</td>
                            <td>ali.mn@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Ali Tarhini</td>
                            <td>Beirut</td>
                            <td>78265149</td>
                            <td>tarhini.a@gmail.com</td>
                            <td><button title="View" type="button" class="btn btn-outline-primary"   data-bs-toggle="modal" data-bs-target="#view">
                                <i class="fas fa-image"></i></button></td>
                            <td><a href="#" title="Accept" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <a href="#" title="reject" class="btn bg-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalm"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewLabel">Doctor's Certificate</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Accept Doctor</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Are You Sure You Want To Accept This Doctor ?!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalm" tabindex="-1" aria-labelledby="modalmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmLabel">Reject Doctor's Application </h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="form-group"> Please specify the reason for rejection*</label>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span><i><script>document.write(new Date().getFullYear())</script> &copy; <a class="text-primary" href="#">BookMyCare</a></i></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-6wpH4NlYgZp6t0mbrJd9AxSTYceP/KWyfAA9TzQgZyFeEgIf82Cn/qyHjYUewt1/"
        crossorigin="anonymous"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-6wpH4NlYgZp6t0mbrJd9AxSTYceP/KWyfAA9TzQgZyFeEgIf82Cn/qyHjYUewt1/"
            crossorigin="anonymous"></script>
</body>

</html>