<?php

session_start();

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login IAW</title>

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none; 
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="checklogin.php" method="POST">

  <img class="mb-4" src="../assets/iaw.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">please log in</h1>
  
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
  
  <label for="inputPassword" class="sr-only" >Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">registro</button>
  <p class="mt-5 mb-3 text-muted">&copy; IAW-2019</p>


</form>
</body>
</html>

