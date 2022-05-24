<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>SideBar
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  



<div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.png" class="img-fluid"/><span>ARDIAN'S</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="../adminData/index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Data Pengguna</span></a>
                </li>
		
		      <div class="small-screen navbar-display">
				</div>

               <li class="">
                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>log-out</span></a>
                </li>
				
				 <li  class="">
                    <a href="login_form.php"><i class="fa-solid fa-arrow-right-to-bracket"></i><span>login</span></a>
                </li>
               
               
            </ul>

           
        </nav>
		
		

        <!-- Page Content  -->
        <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                        </ul>
                    </div>
                </div>
            </nav>

    <!-- Custom styles for this template -->
    <!-- <link href="style.css" rel="stylesheet"> -->

    </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-transparent">
    <header class="mb-auto">
    <div>
    </div>
  </header>

  <main class="px-3">
  <h1 class="text text-light my-4">Hi, <b><?php echo htmlspecialchars($_SESSION["admin_name"]); ?></b>. Selamat datang di halaman Admin</h1>
    <p><a href="../admin/index.php" class="btn btn-secondary">Masuk halaman admin</a></p>
  </main>

  <footer class="mt-auto text-white-50">

  </footer>
</div>

	    </div>			
       </div>
       </div>
      </div>
      </div>
      </div>
     </div>
   </div> 

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

    




     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  
  



  </body>
  
  </html>


