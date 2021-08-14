
 <?php include('../config/constants.php');?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .food-search{
            height:100vh;
        }
    </style>
</head>

<body>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Admin Login</h2>

            <form action="" method="post" class="order">
                <fieldset>
                    <legend>Admin Details</legend>
                    <div class="order-label">Username</div>
                    <input type="text" name="username" placeholder="" class="input-responsive" required>

                    <div class="order-label">Password</div>
                    <input type="password" name="password" placeholder="" class="input-responsive" required>
                   
                    <div class="order-label">Don't have an account yet?  <a href="http://localhost:7882/wowfood/admin/add-admin.php"> Sign Up</a> </div>

                    <input type="submit" name="submit" value="login" class="btn btn-primary px-2">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->
<?php include('./partials/footer.php'); ?>
<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = md5($_POST['password']);
    }else{
        
    }

?>