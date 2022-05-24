<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet">
    <title>Admin Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .btn-secondary,
      .btn-secondary:hover,
      .btn-secondary:focus{
          color:rgb(243, 239, 239);
          text-shadow: none;
      }

      body{
          background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url(../admin/background3.jpeg); 
          background-size: cover; 
          background-attachment: fixed;
      }

      .cover-container{
          max-width: 42em;
      }

      /*
      header
      */

      .nav-masthead .nav-link{
          padding: 1rem 0;
          font-weight: 700;
          color: rgba(255,255,255, .5);
          background-color: transparent;
          border-bottom: .25rem solid transparent;
      }

      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus{
          border-bottom-color: rgba(255,255,255, .25);
      }

      .nav-masthead .nav-link + .nav-link{
          margin-left: 1rem;
      }

      .nav-masthead .active{
          color: #fff;
          border-bottom-color: #fff;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="style.css" rel="stylesheet"> -->

   </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-transparent">
    <header class="mb-auto">
    <div>
      <!-- <h3 class="float-md-start mb-0">Selamat Datang</h3> -->
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="login_form.php">login</a>
        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        <a class="nav-link active" aria-current="page" href="../adminData/index.php">Data Pengguna</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
  <h1 class="text text-light my-4">Hi, <b><?php echo htmlspecialchars($_SESSION["admin_name"]); ?></b>. Selamat datang di halaman Admin</h1>
    <p><a href="../admin/index.php" class="btn btn-secondary">Masuk halaman admin</a></p>
  </main>

  <footer class="mt-auto text-white-50">

  </footer>
</div>


    
  </body>
</html>