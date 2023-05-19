<?php
   session_start() ;
   $conn=mysqli_connect("localhost","root","","test") ;
   if(isset($_SESSION['user_id'])){
   $user_id=$_SESSION['user_id'] ;

   $sql= "SELECT * FROM info WHERE Name LIKE '%$user_id%' OR Uid LIKE '%$user_id%'" ;
   $query="SELECT * FROM query WHERE Name LIKE '%$user_id%' OR Uid LIKE '%$user_id%'" ;

   $s_query=mysqli_query($conn,$query) ;
   $result =mysqli_query($conn, $sql) ;

   $q_row=mysqli_fetch_assoc($s_query) ;
   $row=mysqli_fetch_assoc($result) ;

   $student_q=$q_row['Query'] ;

   $name=$row['Name'] ;
   $uid =$row['Uid'] ;
   $course=$row['Course'] ;
   $dob=$row['Dob'] ;
   $blood_grp=$row['BG'] ;
   $contact=$row['Contact'] ;
   $email=$row['Email'] ;
   $fname=$row['Fname'] ;
   $mname=$row['Mname'] ;
   $gci=$row['G_contact'] ;
   $ca =$row['C.A'] ;
   $pa=$row['P.A'] ;
   $img =$row['IMG'] ;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo" title="Student Details Dashboard">
            <img src="../images/logo.png" alt="">
            <h2>S<span class="danger">D</span>D</h2>
        </div>
        <div class="navbar">
            <a href="index.php" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.html" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="exam.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="password.html">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>

    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="../images/profile-1.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Hey,</p><?php echo $name ; ?>
                        <small class="text-muted"><?php echo $uid ; ?></small>
                    </div>
                </div>
                <div class="about">
                <h3>Course </h3>
                    <div class="about" id="course"><?php echo $course ; ?></div>
                    <h3>DOB</h3>
                    <div class="about" id="dob"><?php echo $dob ; ?></div>
                    <h3>Blood Group</h3>
                    <div class="about" id="bg"><?php echo $blood_grp ; ?></div>
                    <h5>Contact</h5>
                    <div class="about" id="contact"><?php echo $contact ; ?></div>
                    <h5>Email</h5>
                    <div class="about" id="email"><?php echo $email; ?></div>
                    <h5>Father's Name</h5>
                    <div class="about" id="fn"><?php echo $fname ; ?></div>
                    <h5>Mother's Name</h5>
                    <div class="about" id="mn"><?php echo $mname ; ?></div>
                    <h5>Guardian's Contact Info</h5>
                    <div class="about" id="gc"><?php echo $gci; ?></div>
                    <h5>Current Address</h5>
                    <div class="about" id="ca"><?php echo $ca; ?></div>
                    <h5>Permanent Address</h5>
                    <div class="about" id="pa"><?php echo $pa ; ?></div>
                </div>
            </div>
        </aside>

        <main>
            <h1>Attendance</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">architecture</span>
                    <h3>Software Engineering</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">functions</span>
                    <h3>Probablity-Statistics</h3>
                    <h2>27/29</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">computer</span>
                    <h3>Computer Architecture</h3>
                    <h2>27/30</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>Python Programming</h3>
                    <h2>24/25</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>Computer Networks</h3>
                    <h2>25/27</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>

            <div class="Querry" id="Querry">
                <table>
                    <thead>
                        <tr>
                            <th><h2>Student's Querries</h2><h6><p><?php echo $student_q ; ?></p></h6></th>
                                
                         </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                </div>
                <div class="Moocs" id="Moocs">
                    <table>
                        <thead>
                            <tr>
                                <th><h2>Moocs & GP<h2><h6>MOOC COURSE:<p>Coursera course</p></h6><h6>GP COURSE:<p>LinekdIn Course</p></h6></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            
        </main>

        <div class="right">
            <div class="announcements">
                <h2>Achievements:</h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>Academic</b> Won first position in G-hackathon.</p>
                        <small class="text-muted">YEAR - 2022</small>
                    </div>
                    <div class="message">
                        <p> <b>Sports</b> 3rd Position in badminton championship.</p>
                        <small class="text-muted">YEAR - 2021</small>
                    </div>
                    <div class="message">
                        <p> <b>Creative</b> 2nd position in Sketching Contest.</p>
                        <small class="text-muted">YEAR - 2022</small>
                    </div>
                </div>
            </div>

            <div class="leaves">
                <div class="teacher">
                    <h2>Coordinator Info:</h2>
                    <div class="info">
                        <h3>Richa Sharma</h3>
                        <small class="text-muted">MAIL: coord@1.com</small>
                    </div>
                </div>
                <div class="teacher">
                    <h2>Mentor Info:</h2>
                    <div class="info">
                        <h3>Afaan Farooq</h3>
                        <small class="text-muted">MAIL: ment@1.com</small>
                    </div>
                </div>
                <div class="teacher">
                    <h2>Disciplinary Action:</h2>
                    <div class="info">
                        <h3>UMC</h3>
                        <small class="text-muted">SEM-2</small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="timeTable.js"></script>
    <script src="app.js"></script>
</body>
</html>