<?php

include_once "processes.php";

if(isset($_POST['submit'])){
    
        $query = "INSERT INTO login(firstname, lastname, username, email, password, password_hash)VALUES(?, ?, ?, ?, ?, ?)";
    
    if($prepair = mysqli_prepare($db, $query)){
        
    
    $bind = mysqli_stmt_bind_param($prepair, "ssssss", $firstname, $lastname, $username, $email, $password, $password_hash);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_hash = md5(password_hash($password, PASSWORD_DEFAULT)) ;

    
if (mysqli_stmt_execute($prepair) === true) {
$to = $_POST['email'];
$from = 'Njengasam2406@gmail.com';
$message = 'Thank you for creating an account with us '. $firstname. ' '. $lastname ;

// send email
mail($to,"My subject",$message);

}else{

    echo "error";
}

 
    
    
}
mysqli_stmt_close($prepair);


}

if (isset($_POST["indexPage"])) {
        ob_start();
session_start();

header("Location:\.\New_projects\Get_Updated/index.php");
session_destroy();

;
    }    






?>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link type = "text/css" href = "css1.css" rel = "stylesheet"/>

<form action="create_account.php" method="post">    
    <div class="container">
            <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3 class="panel-title">Create your account<small>It's free!</small></h3>
                            </div>
                            <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name">
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>


    
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_hash" id="password_hash" class="form-control input-sm" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="submit" value="Register" class="btn btn-info btn-block" name="submit">

                                <div class="wrapper">
                                        <span class="group-btn">     
                                            <a href="Log-in.php" class="btn btn-primary btn-md">Log_In<i class="fa fa-sign-in"></i></a>
                                            <input type="submit" value="Cancel" class="btn btn-primary btn-md" name="indexPage">       
                                        </span>
               
                                        </div>

    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>