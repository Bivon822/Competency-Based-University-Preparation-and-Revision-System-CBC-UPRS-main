<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<title>View Courses</title>
	<style>
    .form-table{
      max-width: 800px;
      background: #FAFAFA;
      padding: 30px;
      margin: 50px auto;
      box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
      border-radius: 5px;
    }
  </style>

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
 

  <form class="form-table">
  <center>
          <h3 class="form-style-heading">REGISTERED COURSES</h3>
        </center>
      </div>
    <table>
    <thead>
        <tr>
            <th width="20%" height="60px"><div align="center">Course Code</div></th>
            <th width="30%" height="60px"><div align="center">Course Name</div></th>
            <th width="20%" height="60px"><div align="center">University Code</div></th>
            <th width="8%" height="60px"><div align="center">Edit</div></th>
            <th width="8%" height="60px"><div align="center">Delete</div></th>
        </tr>
    </thead>
     <tbody>
              <?php
include "connect.php";
$sql= "SELECT * FROM course";  

      $row = mysqli_query($conn,$sql);
      
                 if(!empty($row))
                 foreach($row as $rows)
                { 
              ?>
              <tr >
                  <td ><div align="center"><?php echo $rows['Course_Code']; ?></div></td>
                  <td><div align="center"><?php echo $rows['Course_name']; ?></div></td>
                  <td><div align="center"><?php echo $rows['University_Code']; ?></div></td>
                  <td><div align="center"> <a  class ="" href="admin-edit-course.php?Id=<?php echo $rows['Course_Code']?>">Edit</a></div></td>
                  <td><div align="center"> <a  class ="" href="admin-delete-course.php?Id=<?php echo $rows['Course_Code']?>">Delete</a></div></td> 
              </tr>
              <?php } ?>
          </tbody>
</table>
 </form>

	</section>

	<script src="script.js"></script>
</body>
</html>