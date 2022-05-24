</head>
<link rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <style type="text/css">
       @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&family=Poppins:wght@300&display=swap');
    :root
    * {
      --purple:#814096;
      --pink:#f83292;
      --gradient:linear-gradient(90deg, var(--purple), var(--pink));
    }
    table {
    border: solid 1px black;
    border-collapse: collapse;
    border-spacing: 0;
    width: 70%;
    margin: 10px auto 10px auto;
}

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

  table {
    border: solid 1px black;
    border-collapse: collapse;
    border-spacing: 0;
    width: 70%;
    margin: 10px auto 10px auto;
}

  table thead th {
    background-color: lightpink;
    border: solid 1px black;
    color: black;
    padding: 10px;
    text-align: left;
    text-decoration: none;
}
  table tbody td {
    border: solid 1px black;
    color: black;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}

  .navbar {
    width: 100%;
    padding:0.5rem;
    background: #fff;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);
    align-items: center;
    justify-content: space-between;
    background-color: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(93,20,171,1) 100%); ;
}
</style>

<body class="">
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"  href="index.php" style="color: black;">AR'Ingrediant</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../login/user_page.php" style="color: white">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Tentang Toko
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Sosial Media</a></li>
          <li><a href="transaksi.php">Transaksi</a></li>
        </ul>
      </li>
      <li><a href=".././login/logout.php"  style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	
	<div class="container" style="min-height:500px;">
	