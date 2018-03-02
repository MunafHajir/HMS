<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('server.php');
$username = $_SESSION['name'];
if($_POST){
    $type = "yoga";
    $date=$_POST['appoint_date'];
    $trainer = $_POST['trainer'];
    $package = $_POST['package'];
    $timefrom = $_POST['appoint_time_from'];
    $timeend = $_POST['appoint_time_end'];
    $package = $_POST['package'];
    
    

    $query="insert into yoga(username,appointment_date,trainer,time_from,time_end,package) 
                    values('$username','$date','$trainer','$timefrom','$timeend','$package')";

    echo $query;
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

    <title>YOGA-DASHBOARD</title>

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

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><!-- <img src="assets/images/logo.png" alt="" /> --><span>YOGA</span></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="hospital.php">Hospital</a></li>
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
                                <h1>Hello, <span>Welcome <?= $username?></span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">YOGA</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                <!-- <div class="col-lg-12">
                    <h2 class =".weather-one">YOGA</h2>
                    <img src="../HMS/img/yoga.jpg" alt="">

                </div> -->
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                            
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Package 1 </div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>400</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Package 2</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>350</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Package 3</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>200</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Package 4</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>300</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                            <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4>Book Package</h4>
                                            
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form action="yoga.php" method="post">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name" value=<?=$username?> class="form-control" disabled>
                                                                <label>Trainer: </label>
                                                                <select type= "trainer" class="form-control" name="trainer">
                                                                    <?php 
                                                                    $querytrainer = 'select name from validation where type="Yoga"';
                                                                    $result = mysqli_query($con,$querytrainer);
                                                                    var_dump($result);
                                                                    while($row = mysqli_fetch_array($result))
                                                                    {
                                                                    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                                    }
                                                                    
                                                                    ?>
                                                                   
                                                                </select>
                                                            
                                                                <br>
                                                        <label>Appointment Date:</label>
                                                        <input type="date" class="form-control" name="appoint_date">

                                                        <label>From:</label>
                                                        <input type="time" class="form-control" name="appoint_time_from">

                                                        <label>End:</label>
                                                        <input type="time" class="form-control" name="appoint_time_end">
                                                        
                                                        <label>Package:</label>
                                                        <select name="package">
                                                            <option value="Package 1">Package 1</option>
                                                            <option value="Package 2">Package 2</option>
                                                            <option value="Package 3">Package 3</option>
                                                            <option value="Package 3">Package 4</option>
                                                        </select>


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
                                                    <th>Trainer</th>
                                                    <th>Appointment Date</th>
                                                    <th>From</th>
                                                    <th>End</th>
                                                    <th>Package 1</th>               
                                                </tr>
                                            </thead>
                                            <?php

                                            $query = "select * from yoga where username = '$username'";
                                            $res = mysqli_query($con, $query);
                                            echo mysqli_error($con);


                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_array($res)) {
                                                    echo '<tr>
                                                        <td>' . $row['trainer'] . '</td>
                                                        <td>' . $row['appointment_date'] . '</td>
                                                        <td>' . $row['time_from'] . '</td>
                                                        <td>' . $row['time_end'] . '</td>
                                                        <td>' . $row['package'] . '</td>
                                                </tr>';
                                                }

                                            }
                                            ?>
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