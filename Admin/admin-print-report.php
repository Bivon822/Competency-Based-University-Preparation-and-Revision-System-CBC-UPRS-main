<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
    
    
    <title>report</title>
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
        <form class="form-style-9" action="admin-print.php" method="POST" onsubmit="return validateForm()">
    <div class="form-style-heading">
      <center>
      <h3>Print Report </h3>
    </center>
    </div>
    <ul>
    <li>
    <label for="">Student Lists</label>
    <select name="registrationYear" id="registrationYear" class="field-style field-split align-right">
        <option value="">Choose Registration Year</option>
        <?php
        $years = range(date("Y"), 2015);
        foreach ($years as $year) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select><br><br>
    </li>
    <li>
    <label for="">University lists</label>
    <select id="UniversityType" name="UniversityType" class="field-style field-split align-right">
        <option value="">Filter by University Type</option>
        <option value="Public">Public</option>
        <option value="Private">Private</option>
    </select><br><br>
    </li>
    
    <li>
    <label for="">Courses</label>
    <select id="CourseLevel" name="CourseLevel" class="field-style field-split align-right">
        <option value="">Filter by Level</option>
        <option value="Degree">Degree</option>
        <option value="Diploma">Diploma</option>
    </select><br><br>


    <li>
    <input type="submit" class="bi bi-printer" name="submit" value="print" />
   
    </li>
    </ul>
	</section>
   <style>
    .toast {
        position: fixed;
        bottom: 20px;
        left: 60%;
        bottom: 85%;
        transform: translateX(-50%);
        background-color: #333;
        color: #fff;
        padding: 15px;
        border-radius: 5px;
        opacity: 1;
        transition: opacity 1s ease-in-out;
        z-index: 999;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .progress-bar {
        height: 5px;
        width: 100%;
        background-color: #ddd;
        position: absolute;
        bottom: 0;
        left: 0;
        border-radius: 0 0 5px 5px;
    }

    .progress-bar-fill {
        height: 100%;
        background-color: #4caf50;
        border-radius: 0 0 5px 5px;
        transition: width 5s linear;
    }

    .close-icon {
        cursor: pointer;
    }
</style>

<script>
    function showToast(message, duration) {
        var toast = document.createElement('div');
        toast.className = 'toast';

        var progressBar = document.createElement('div');
        progressBar.className = 'progress-bar';
        var progressBarFill = document.createElement('div');
        progressBarFill.className = 'progress-bar-fill';

        progressBar.appendChild(progressBarFill);
        toast.appendChild(progressBar);

        toast.innerHTML += `
            <span>${message}</span>
            <span class="close-icon" onclick="closeToast(this)">&#10006;</span>
        `;

        document.body.appendChild(toast);

        setTimeout(function () {
            toast.style.opacity = '0';
            progressBarFill.style.width = '100%';
            setTimeout(function () {
                document.body.removeChild(toast);
            }, 1000);
        }, duration);
    }

    function closeToast(element) {
        var toast = element.closest('.toast');
        toast.style.opacity = '0';
        var progressBarFill = toast.querySelector('.progress-bar-fill');
        progressBarFill.style.width = '100%';
        setTimeout(function () {
            document.body.removeChild(toast);
        }, 1000);
    }

    function validateForm() {
        var registrationYear = document.getElementById('registrationYear').value;
        var universityType = document.getElementById('UniversityType').value;
        var courseLevel = document.getElementById('CourseLevel').value;

 
        if (registrationYear === '' && universityType === '' && courseLevel === '') {
            showToast('Please select at least one option before submitting the form', 5000);
            return false; 
        }

        return true; }
        
</script>



	<script src="script.js"></script>
    

</body>
</html>