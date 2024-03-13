<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Admin</title>
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
		<!-- NAVBAR -->

		<!-- MAIN -->


		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			<?php 
       
	
	   include 'connect.php';

	   $total_students_result = $conn->query("SELECT * FROM student_info");
	   $total_students = $total_students_result->num_rows;
	   
	   $total_courses_result = $conn->query("SELECT * FROM course");
	   $total_courses =  $total_courses_result->num_rows;
	   
	   $total_universities_result = $conn->query("SELECT * FROM university");
	   $total_universities =  $total_universities_result->num_rows;
	   

   ?>
<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php  echo $total_students; ?></h3>
						<p>Students</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-graduation' ></i>
					<span class="text">
						<h3><?php echo $total_courses ?></h3>
						<p>Courses</p>
					</span>
				</li>
				<li>
					<i class='bx bx-building-house'></i>
					<span class="text">
						<h3><?php  echo $total_universities; ?></h3>
						<p>Universities</p>
					</span>
				</li>
			</ul>
    

			<div class="table-container">
        <div class="table-wrapper">
				<form class="form-style-9">
            <h2>Registered Students</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Certificate Number</th>
                        <th>Id Number</th>
                    </tr>
                </thead>
				<tbody>
				<?php
            include "connect.php";
            $sql= "SELECT *
			FROM student_info
			LIMIT 5;
			";  
            $row = mysqli_query($conn,$sql);
            
                   foreach($row as $rows)
                  { 
                ?>
                <tr >
                    <td><?php echo $rows['Student_Name'] ?></td>
                    <td><?php echo $rows['Id_Number']; ?></td>
                    <td><?php echo $rows['Cert_Number']; ?></td>
          
                </tr>
                
                <?php } ?>
            </tbody>
            </table>
						</form>
        </div>

        <div class="table-wrapper">
				<form class="form-style-9">
            <h2>Registered Courses</h2>
            <table>
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Trend</th>
                    </tr>
                </thead>
                <tbody>

                    	<?php
            include "connect.php";
            $sql= "SELECT *
			FROM course
			LIMIT 5;
			";  
            $row = mysqli_query($conn,$sql);
            
                   foreach($row as $rows)
                  { 
                ?>
                <tr >
                    <td><?php echo $rows['Course_Code'] ?></td>
                    <td><?php echo $rows['Course_name']; ?></td>
                    <td><?php echo $rows['Trend']; ?></td>
          
                </tr>
                
                <?php } ?>
                </tbody>
            </table>
						</form>
        </div>

        <div class="table-wrapper">
				<form class="form-style-9">
            <h2>Registered Universities</h2>
            <table>
                <thead>
                    <tr>
                        <th>University Code</th>
                        <th>University Name</th>
                     
                    </tr>
                </thead>
                <tbody>
				<?php
            include "connect.php";
            $sql= "SELECT *
			FROM university
			LIMIT 5;
			";  
            $row = mysqli_query($conn,$sql);
            
                   foreach($row as $rows)
                  { 
                ?>
                <tr >
                    <td><?php echo $rows['University_code'] ?></td>
                    <td><?php echo $rows['University_Name']; ?></td>
                    
          
                </tr>
                
                <?php } ?>
                </tbody>
            </table>
						</form>
        </div>
    </div>
   
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>