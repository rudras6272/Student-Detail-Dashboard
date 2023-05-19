<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <title>RAAR</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" required name="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" required name="password">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                    <input type="submit" name="submit" value="Log in" class="form-btn">
                </form>
            </div>
        </div>
<?php
    if(isset($_POST['submit'])){
    $email= $_POST['email'] ;
    $password= $_POST['password'] ;

    //database connection
    $con = new mysqli("localhost","root","","test") ;
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error) ;
    } else{
        $stmt = $con->prepare("select * from registration where email = ?") ;
        $stmt->bind_param("s",$email) ;
        $stmt->execute() ;
        $stmt_result =$stmt->get_result() ;
        if($stmt_result->num_rows > 0){
           $data = $stmt_result->fetch_assoc() ;
           if($data['password'] === $password){
             header("Location: ../search/searchbox.php") ;
           } else{
            echo "<h2>Invalid Email or Password</h2>" ;
           }
        } else{
            echo "<h2>Invalid Email or Password</h2>" ;
        }
    }
    }
?>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
