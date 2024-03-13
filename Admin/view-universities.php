<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
 
	<title>View Universities</title>
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
 

  <form class="form-table"> 
    <table>
      <div>
        <center>
          <h3 class="form-style-heading">REGISTERED UNIVERSITIES</h3>
        </center>
      </div>
     
          <thead>
              <tr>
                  <th height="60px"><div align="center">University Code</div></th>
                  <th height="60px"><div align="center">University Name</div></th>
                  <th height="60px"><div align="center">Edit</div></th>
                  <th height="60px"><div align="center">Delete</div></th>
              </tr>
          </thead>
          <tbody>
              <?php
include "connect.php";
$sql= "SELECT * FROM university";  

      $row = mysqli_query($conn,$sql);
      
                 if(!empty($row))
                 foreach($row as $rows)
                { 
              ?>
              <tr >
                  <td><div align="center"><?php echo $rows['University_code']; ?></div></td>
                  <td><div align="center"><?php echo $rows['University_Name']; ?></div></td>
                  <td><div align="center"> <a  class ="" href="edit-university-info.php?Id=<?php echo $rows['University_code']?>">Edit</a></div></td>
                  <td><div align="center"> <a  class ="" id="delete" href="admin_delete_data.php?Id=<?php echo $rows['University_code']?>">Delete</a></div></td> 
              </tr>
              <?php } ?>
          </tbody>
      </table><br>
  
  
    </form>
    

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