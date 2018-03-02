<?php
                session_start();
                error_reporting(E_ALL);
                ini_set("display_errors", 1);
                require_once('server.php');
                $username = $_SESSION['name'];
                if($_POST){
                    $type = "hospital";
                    $date=$_POST['appoint_date'];
                    $time=$_POST['appoint_time'];
                    $ppl=$_POST['apl'];
                    $name = $_POST['pname'];
                    $query="insert into appointment(username,patient_name,appointment_date,appointment_of,appointment_time,type) 
                    values('$username','$name','$date','$ppl','$time','$type')";
                    
                    mysqli_query($con,$query);

                    
                    echo mysqli_error($con);

                }


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hospital</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Hospital</span></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                               <li><a href="dashboard.php">Dashboard</a> </li>
                                <li><a href="yoga.php">Yoga</a></li>
                                <li><a href="gym.php">Gym</a></li>
                                
                                
                                
                            </ul>
                        </li>

                        <li><a  href="login.html"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome <?= $_SESSION['name']?></span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">HMS</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                           
                            <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4>Book Appointment</h4>
                                            
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form method="post" action="hospital.php">

                                                    <label>Patient name:</label>
                                                    <input type="text" class="form-control" name="pname">

                                                        <div class="form-group">
                                                                <label>Appointment Of</label>
                                                                <select class="form-control" name="apl">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            
                                                                <br>
                                                        <label>Appointment Date:</label>
                                                        <input type="date" class="form-control" name="appoint_date">

                                                        <label>Appointment Time</label>
                                                        <input type="time" class="form-control" name="appoint_time">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                                        
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Appointments</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Appointment Of</th>
                                                    <th>Appointment Date</th>
                                                    <th>Appointment Time</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $se_name = $_SESSION['name'];
                                                $query = "select * from appointment where type='hospital' and username = '$se_name'";
                                                $res = mysqli_query($con, $query);
                                                echo mysqli_error($con);


                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_array($res)) {
                                                        echo '<tr>
                                                        <td>' . $row['patient_name'] . '</td>
                                                        <td>' . $row['appointment_of'] . '</td>
                                                        <td>' . $row['appointment_date'] . '</td>
                                                        <td>' . $row['appointment_time'] . '</td>
                                                </tr>';
                                                    }

                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                       
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    
                </section>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>