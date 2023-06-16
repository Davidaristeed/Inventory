<?php
session_start();
  
  include("connection.php");
  include("functions.php");
  $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/dashboard.css"></link>
    <link rel="stylesheet" href="styles/table.css"></link>
    <script defer src="scripting/sections.js"></script> 
    <!--Icons(Google fonts)-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
  <span class="material-icons">account_circle</span><!--logo-->
    <div class="container">
        <nav><!--navigationBar-->
            <ul>
                <li><a  class="logo">
                    <a><span class="material-icons">account_circle</span></a>
                    <span class="nav-item" >Dashboard</span>
                </a></li>
                <li><a >
                    <i class="fas fa-user"><span class="material-icons">speed</span></i>
                    <span class="nav-item" data-target="section1">Dashboard</span>
                </a></li>
                <li><a >
                    <i class="fas fa-wallet"><span class="material-icons">space_dashboard</span></i>
                    <span class="nav-item" data-target="section2">Department</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Alerts</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-task"></i>
                    <span class="nav-item">Mobile Support</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="nav-item">Setting</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-question-circle"></i>
                    <span class="nav-item">Help</span>
                </a></li>
                <li><a href="#" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item"><a href="logout.php">logout</a></span>
                </a></li>
            </ul>
        </nav><!--navigationBar_End-->

        <!--MAIN SECTION-->
        <section class="main">
            <div class="main-top">
                <h1>Hello: <?php echo $user_data['user_name']; ?> </h1> 
                <i class="fas fa-user-cog"></i>
            </div>

            <div class="main-body">                
                <div class="main-content section" id = "section1">
                    <div class="cardbox" style="background: #0b6ed0">
                        <img src="assets/books.png">
                        <div class="card-detail">
                            <h2>Department</h2>
                            
                            <div class="user">
                                <img src="" alt="">
                                <div class="user_detail">
                                    <h4>Departments</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox">
                        <img src="">
                        <div class="card-detail">
                            <h2>Staff</h2>
                            <span class="views">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="likes">
                                <i class="fab fa-gratipay"></i>
                            </span>
                            <span class="comment">
                                <i class="fas fa-comment"></i>
                            </span>
                            <div class="user">
                                <img src="" alt="">
                                <div class="user_detail">
                                    <h4>See the cycles</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox">
                        <img src="">
                        <div class="card-detail">
                            <h2>Management</h2>
                            <span class="views">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="likes">
                                <i class="fab fa-gratipay"></i>
                            </span> 
                            <span class="comment">
                                <i class="fas fa-comment"></i>
                            </span>
                            <div class="user">
                                <img src="" alt="">
                                <div class="user_detail">
                                    <h4>See managers!</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardbox">
                        <img src="">
                        <div class="card-detail">
                            <h2>Reports</h2>
                            <span class="views">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="likes">
                                <i class="fab fa-gratipay"></i>
                            </span>
                            <span class="comment">
                                <i class="fas fa-comment"></i>
                            </span>
                            <div class="user">
                                <img src="" alt="">
                                <div class="user_detail">
                                    <h4>View Reports</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
                <div class="section" id = "section2">
                   <main class="table">
                    <section class="table_header">
                        <h1>Staff</h1>
                    </section>
                    <section class="table_body">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Department</th>
                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Joined on</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>Angela Bridges</strong></td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p class="action edit">Edit</p> <br>
                                        <p class="action delete">Delete</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p class="action delete">Delete</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Angela Bridges</td>
                                    <td><img src="assets/Profiles/download.jpg"alt="staff image">Angela Bridges</td>
                                    <td>Finance</td>
                                    <td>Female</td>
                                    <td>07414717427</td>
                                    <td>angela@gmail.com</td>
                                    <td>17 Dec, 2002</td>
                                    <td>10 Jan, 2022</td>
                                    <td>3538 Melvie street</td>
                                    <td>Midland</td>
                                    <td>Nrb</td>
                                    <td>
                                        <p>Edit</p>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </section>
                   </main> 
                </div>
                <!--The sideBar-->
                <!---->
            </div>
        </section>
    </div>
</body>
</html>
