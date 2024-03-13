<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
 
	<title>Register New University</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>

  <!--
    form
  -->
 

  <form  action="register-new-university-insert.php"  method="POST" class="form-style-9" id="formSubmission">
    <div class="form-style-heading">
      <center>
      <h3>REGISTER A NEW UNIVERSITY</h3>
    </center>
    </div>
    <ul>
    <li>
      <label for="" >University Code:</label>
        <input type="number" name="code" class="field-style field-split align-left" placeholder="Enter University Code" required />
    </li>
    <li>
      <label for="">University Name:</label>
        <input type="text" name="Uname" class="field-style field-split align-left" placeholder="Enter University Name" required />
    </li>
    <li>
    <input type="submit" value="Submit" />
    <input type="submit" value="Reset" />
    </li>
    </ul>
    </form>
    <script>
$(document).ready(function(){
    $('#formSubmission').submit(function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'register-new-university-insert.php', // Path to your PHP script handling insertion
            data: formData,
            success: function(response){
                if(response == 'duplicate'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data already exists!',
                    });
                } else if(response == 'success'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data inserted successfully!',
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response,
                    });
                }
            }
        });
    });
});
</script>

	</section>
	<script>
$(document).ready(function() {
   
    var deleteScript = 'admin_delete_data.php';

    $('#delete').click(function() {
        
        var primaryKeyValue = 'University_code';

      
        $.ajax({
            type: 'POST',
            url: deleteScript,
            data: {University_code: University_cod},
            success: function(response) {
                alert(response); 
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
	

	<script src="script.js"></script>
</body>
</html>