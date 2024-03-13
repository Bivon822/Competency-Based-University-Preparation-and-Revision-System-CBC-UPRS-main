<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Register New Student</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body>
<?php
    include "siderbar.php";
    ?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
      <!--
        <a href="#" class="nav-link">Categories</a>
      -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
      <!--
        <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
      -->
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>

  <!--
    form
  -->

  <form class="form-style-9"  method="POST" id="myform">
  <div class="form-style-heading">
  
  <h2 id="messageHeader"></h2>
        <div id="errorMessage" class="alert alert-danger fade show" role="alert"></div><center>
      <h3>REGISTER A NEW STUDENT</h3>
     
    </center>
    </div>

    <ul>
    <li>
      <label for="">Student Name</label>
        <input type="text" name="student_Name" class="field-style field-split align-left" placeholder="Enter Student Name" required />
    </li>
    
    <li>
      <label for="">Certificate Number</label>
        <input type="text" name="cert_number" class="field-style field-split align-left" placeholder="Enter certification number " required />
    </li>

    <li>
      <label for="">Identificatin number</label>
        <input type="text" name="identification_number" class="field-style field-split align-left" placeholder="Enter identification number " required />
    </li>
  
   
    <li>
    <input type="submit" name="submit" onclick="submitForm()" />
    </li>
    </ul>
    </form>
  
	</section>
	
	<script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>