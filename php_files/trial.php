<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
  
 /* user-side-bar css
*/
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins" , sans-serif;
      }
      .sidebar2{
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 78px;
        background: #11101D;
        padding: 6px 14px;
        z-index: 99;
        transition: all 0.5s ease;
      }
      .sidebar2.open{
        width: 250px;
      }
      .sidebar2 .logo-details{
        height: 60px;
        display: flex;
        align-items: center;
        position: relative;
      }
      .sidebar2 .logo-details .icon{
        opacity: 0;
        transition: all 0.5s ease;
      }
      .sidebar2 .logo-details .logo_name{
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        opacity: 0;
        transition: all 0.5s ease;
      }
      .sidebar2.open .logo-details .icon,
      .sidebar2.open .logo-details .logo_name{
        opacity: 1;
      }
      .sidebar2 .logo-details #btn{
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 22px;
        transition: all 0.4s ease;
        font-size: 23px;
        text-align: center;
        cursor: pointer;
        transition: all 0.5s ease;
      }
      .sidebar2.open .logo-details #btn{
        text-align: right;
      }
      .sidebar2 i{
        color: #fff;
        height: 60px;
        min-width: 50px;
        font-size: 28px;
        text-align: center;
        line-height: 60px;
      }
      .sidebar2 .nav-list{
        margin-top: 20px;
        height: 100%;
      }
      .sidebar2 li{
        position: relative;
        margin: 8px 0;
        list-style: none;
      }
      .sidebar2 li .tooltip{
        position: absolute;
        top: -20px;
        left: calc(100% + 15px);
        z-index: 3;
        background: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 15px;
        font-weight: 400;
        opacity: 0;
        white-space: nowrap;
        pointer-events: none;
        transition: 0s;
      }
      .sidebar2 li:hover .tooltip{
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
        top: 50%;
        transform: translateY(-50%);
      }
      .sidebar2.open li .tooltip{
        display: none;
      }
      .sidebar2 input{
        font-size: 15px;
        color: #FFF;
        font-weight: 400;
        outline: none;
        height: 50px;
        width: 100%;
        width: 50px;
        border: none;
        border-radius: 12px;
        transition: all 0.5s ease;
        background: #1d1b31;
      }
      .sidebar2.open input{
        padding: 0 20px 0 50px;
        width: 100%;
      }
      .sidebar2 .bx-search{
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 22px;
        background: #1d1b31;
        color: #FFF;
      }
      .sidebar2.open .bx-search:hover{
        background: #1d1b31;
        color: #FFF;
      }
      .sidebar2 .bx-search:hover{
        background: #FFF;
        color: #11101d;
      }
      .sidebar2 li a{
        display: flex;
        height: 100%;
        width: 100%;
        border-radius: 12px;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        background: #11101D;
      }
      .sidebar2 li a:hover{
        background: #FFF;
      }
      .sidebar2 li a .links_name{
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: 0.4s;
      }
      .sidebar2.open li a .links_name{
        opacity: 1;
        pointer-events: auto;
      }
      .sidebar2 li a:hover .links_name,
      .sidebar2 li a:hover i{
        transition: all 0.5s ease;
        color: #11101D;
      }
      .sidebar2 li i{
        height: 50px;
        line-height: 50px;
        font-size: 18px;
        border-radius: 12px;
      }
      .sidebar2 li.profile{
        position: fixed;
        height: 60px;
        width: 78px;
        left: 0;
        bottom: -8px;
        padding: 10px 14px;
        background: #1d1b31;
        transition: all 0.5s ease;
        overflow: hidden;
      }
      .sidebar2.open li.profile{
        width: 250px;
      }
      .sidebar2 li .profile-details{
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
      }
      .sidebar2 li img{
        height: 45px;
        width: 45px;
        object-fit: cover;
        border-radius: 6px;
        margin-right: 10px;
      }
      .sidebar2 li.profile .name,
      .sidebar2 li.profile .job{
        font-size: 15px;
        font-weight: 400;
        color: #fff;
        white-space: nowrap;
      }
      .sidebar2 li.profile .job{
        font-size: 12px;
      }
      .sidebar2 .profile #log_out{
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background: #1d1b31;
        width: 100%;
        height: 60px;
        line-height: 60px;
        border-radius: 0px;
        transition: all 0.5s ease;
      }
      .sidebar.open .profile #log_out{
        width: 50px;
        background: none;
      }
      .home-section{
        position: relative;
        min-height: 100vh;
        top: 0;
        left: 78px;
        width: calc(100% - 78px);
        transition: all 0.5s ease;
        z-index: 2;
      }
      .sidebar2.open ~ .home-section{
        left: 250px;
        width: calc(100% - 250px);
      }
      .home-section .text{
        display: inline-block;
        color: #11101d;
        font-size: 25px;
        font-weight: 500;
        margin: 18px
      }
      @media (max-width: 420px) {
        .sidebar2 li .tooltip{
          display: none;
        }
      }
/* End of user-side-bar css
*/

  body{
    background: #f2f2f2;
  }
  .left-side-container {
    margin-left: 20px;
    padding: 5px;
    height: 530px;
    display: flex;
    justify-content: space-between;
    

  }
  
  .progress-form {
    height: inherit;
    background-color: white;
    padding: 10px;
    margin-right:30px;
   
  }

  .progress-container {
    display: flex;
    height: inherit;
    display: block;
  }

  .average-expectation {
    display: flex;
    width: 450px;
    justify-content: space-evenly;
    border: 2px solid black;
  }

  .AverageScore {
    margin-bottom: 10px;
    margin-left: 5px;
    padding: inherit;
    width: 450px;
  }

  .knec-results {
    display: flex;
    height: inherit;
    width: 450px;
    
  }
  .knec-title{
    margin-left: 50px;
    margin: top 20px;
  }
  .index-number {
    display: flex;
  }

  .index-number-input {
    width: 150px;
    margin-left: 5px;
  }

  .grade {
    display: block;
    width: 260px;
    height: 430px;
    /* Adjust as needed */
    justify-content: space-between;
    padding: 10px;
    overflow: hidden;
    /* Hide overflow content */
    /* Prevent text from wrapping */
    white-space: nowrap;
    text-overflow: ellipsis;
    /* Display an ellipsis (...) to indicate clipped text */
  }

  .grade p {
    font-weight: bolder;
    margin-bottom: 10px;
  }

  .score {
    margin-left: 10px;
    height: 380px;
    width: 60px;
    padding: 10px;

  }
  .student-name{
    display: block;
    width: 100px;
    border: none;
    height: auto;
  }
  input {
    display: block;
    margin-bottom: 20px;
    width: 40px;
    border: none;
    height: auto;
  }

  .retrive-button {
    width: 110px;
    background-color: green;
  }

  .calculate-average-button {
    width: 150px;
    background-color: green;
    height: 30px;
  }

  /* ======================= */

  

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

.form-container {
        display: flex;
        margin-top: 30px;
        padding: 0px;
    }
form{
  margin-left: 30px;
  width: 500px;
  background-color: white;
  border-radius: 5px;
  padding: 20px;
  
}
form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 40px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 1px;
  padding-left: 15px;
  border:1px solid #B0CFE0;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  box-shadow: 0 0 5px #B0CFE0;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 20%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: blue;
   justify-content: center;
   align-items: center;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: green;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .user-details .input-box.col-75{
    margin-bottom: 15px;
    width: 100%;
  }

  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
.col-75 {
  
  height: 40px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 1px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  border:1px solid #B0CFE0;
  
}

</style>

   </head>
<body>
<div class="sidebar2">
    <div class="logo-details">
      <i class='bx bx-food-menu'></i>
        <div class="logo_name">Main Menu</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
      <a href="Dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
       <a href="user-profile.php">
        <i class='bx bx-user' ></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <li>
       <a href="Application.php">
        <i class='bx bxs-graduation'></i>
         <span class="links_name">Application/Revision</span>
       </a>
       <span class="tooltip">Application/Revision</span>
     </li>
     <li>
       <a href="courseRevision.php">
        <i class='bx bx-book-reader'></i>
         <span class="links_name">Course Revision</span>
       </a>
       <span class="tooltip">Course Revision</span>
     </li>
     <li>
       <a href="New-appllicant-form.php">
        <i class='bx bxs-book-open'></i>
         <span class="links_name">New Applicant</span>
       </a>
       <span class="tooltip">New Applicant</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
      <a href="#">
        <i class='bx bx-log-out' id="log_out" ></i>
        <span class="links_name">Logout</span>
      </a>
      <span class="tooltip">Logout</span>
    </li>
    </ul>
  </div>
  <section class="home-section">
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the input KCSE index number
  $index_number = $_POST['index_number'];

  // Database connection parameters
  $servername = "localhost";
  $username = "root"; // Replace with your MySQL username
  $password = ""; // Replace with your MySQL password
  $dbname = "jsuars"; // Replace with your MySQL database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare SQL statement to retrieve data based on the index number
  $sql = "SELECT * FROM knec_results_table WHERE index_number = '$index_number'"; // Replace your_table with your actual table name
  $result = $conn->query($sql);

  // Check if there is any data
  if ($result->num_rows > 0) {
    // Output data of the first row (assuming there is only one match for the index number)
    $row = $result->fetch_assoc();
  echo '<div class="form-container">';
    echo  '<div class="left-side-container">';
    echo  '<form class="progress-form" action="">';
    echo  '<div class="AverageScore">';
    echo  '<p class="knec-title" >KNEC RESULTS</p>';
    echo  '<div class="average-expectation">';
    echo  '<p id="averageExpectation"></p>';
    echo  '<p id="expectation"></p>';
    echo '</div>';
    echo '</div>';

    echo '<input class="student-name" type="text" name="studentname" value="' . $row["student_name"] . '" readonly style="appearance: textfield;">';

    // Populate the subject scores dynamically
    echo '<div class="knec-results">';
    echo '<!-- Input field for KCSE index number -->';
    echo '<div class="grade">';
    echo '<p>English</p>';
    echo '<p>Kiswahili</p>';
    echo '<p>Mathematics</p>';
    echo '<p>Integrated Science</p>';
    echo '<p>Health Education</p>';
    echo '<p>Pre-Technical</p>';
    echo '<p>Social Studies</p>';
    echo '<p>Religious Education</p>';
    echo '<p>Business Studies</p>';
    echo '<p>Agriculture</p>';
    echo '<p>Life Skills</p>';
    echo '<p>Sports and Physical Education</p>';
    echo '</div>';
    
    // ==============================

    echo '<div class="score">';

    echo '<input type="number" name="englishScore" value="' . $row["english_score"] . '" placeholder="English Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="kiswahiliScore" value="' . $row["kiswahili_score"] . '" placeholder="Kiswahili Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="mathematicsScore" value="' . $row["mathematics_score"] . '" placeholder="Mathematics Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="integratedScienceScore" value="' . $row["integrated_science_score"] . '" placeholder="Integrated Science Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="healthEducationScore" value="' . $row["health_education_score"] . '" placeholder="Health Education Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="preTechnicalScore" value="' . $row["pre_technical_score"] . '" placeholder="Pre-Technical Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="socialStudiesScore" value="' . $row["social_studies_score"] . '" placeholder="Social Studies Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="religiousEducationScore" value="' . $row["religious_education_score"] . '" placeholder="Religious Education Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="businessStudiesScore" value="' . $row["business_studies_score"] . '" placeholder="Business Studies Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="agricultureScore" value="' . $row["agriculture_score"] . '" placeholder="Agriculture Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="lifeSkillsScore" value="' . $row["life_skills_score"] . '" placeholder="Life Skills Score" readonly style="appearance: textfield;">';
    echo '<input type="number" name="sportsAndPhysicalEducationScore" value="' . $row["sports_and_physical_education_score"] . '" placeholder="Sports and Physical Education Score" readonly style="appearance: textfield;">';

    echo '</div>';

    echo '</div>';
    echo '</form>';
    // ===========
   echo '<form action="" method="POST">';
    echo '<h5>CONTACT INFORMATION</h5>';
     echo '<div class="user-details">';
       echo '<div class="input-box">';
         echo '<span class="details">Your Email</span>';
         echo '<input type="email" id="" name="" placeholder=" Enter Your Email" required>';
        echo '</div>';
      
       echo '<div class="input-box">';
         echo '<span class="details">Guardian/Parent Email</span>';
         echo '<input type="email" id="" name="" placeholder=" Enter Guardian/Parent Email" required>';
       echo '</div>';

       echo '<div class="input-box">';
         echo '<span class="details">Your Phone</span>';
         echo '<input type="number" id="" name="" placeholder=" Enter Your Phone" required>';
       echo '</div>';

       echo '<div class="input-box">';
         echo '<span class="details">Guardian/Parent Phone</span>';
         echo '<input type="number" id="" name="" placeholder=" Enter Your Guardian/Parent phone " required>';
       echo '</div>';
       echo '<div class="input-box">';
         echo '<span class="details">County</span>';
         echo '<select id="" name="" class="col-75">';
         echo '<option value="">Enter Your County</option>';
             echo '<option value="">Mombasa</option>';
             echo '<option value="">Kisumu</option>';
             echo '<option value="">Nairobi</option>';
             echo '<option value="">Kisii</option>';
         echo '</select>';
       echo '</div>';

       echo '<div class="input-box">';
         echo '<span class="details">Constituency</span>';
         echo '<select id="" name="" class="col-75">';
         echo '<option value="">Enter Your Constituency</option>';
             echo '<option value="">Embakasi West</option>';
             echo '<option value="">Embakasi East</option>';
             echo '<option value="">Kitutu Chache South</option>';
             echo '<option value="">Kitutu Chache North</option>';
         echo '</select>';
       echo '</div>';
     echo '</div>';
  
    echo '<center><div class="button">';
       echo '<input type="submit" value="Submit">';
     echo '</div>';
   echo '</center>'; 
   echo '</form>';
    echo '</div>';
  echo '</div>';

  } else {
    echo "No results found for the provided index number.";
  }

  // Close database connection
  $conn->close();
}
?>

<script>
  function calculateAverage() {
    const englishScore = parseInt(document.querySelector('input[name="englishScore"]').value);
    const kiswahiliScore = parseInt(document.querySelector('input[name="kiswahiliScore"]').value);
    const mathematicsScore = parseInt(document.querySelector('input[name="mathematicsScore"]').value);
    const integratedScienceScore = parseInt(document.querySelector('input[name="integratedScienceScore"]').value);
    const healthEducationScore = parseInt(document.querySelector('input[name="healthEducationScore"]').value);
    const preTechnicalScore = parseInt(document.querySelector('input[name="preTechnicalScore"]').value);
    const socialStudiesScore = parseInt(document.querySelector('input[name="socialStudiesScore"]').value);
    const religiousEducationScore = parseInt(document.querySelector('input[name="religiousEducationScore"]').value);
    const businessStudiesScore = parseInt(document.querySelector('input[name="businessStudiesScore"]').value);
    const agricultureScore = parseInt(document.querySelector('input[name="agricultureScore"]').value);
    const lifeSkillsScore = parseInt(document.querySelector('input[name="lifeSkillsScore"]').value);
    const sportsAndPhysicalEducationScore = parseInt(document.querySelector('input[name="sportsAndPhysicalEducationScore"]').value);
    // Calculate the expectation for each subject
    const expectations = [];

    // Function to calculate expectation for each subject
    function calculateExpectation(score) {
      if (score >= 76) {
        return "Exceeds Expectations";
      } else if (score >= 51) {
        return "Meets Expectations";
      } else if (score >= 26) {
        return "Approaches Expectations";
      } else {
        return "Below Expectations";
      }
    }

    // Calculate expectation for each subject and add it to the array
    expectations.push(calculateExpectation(englishScore));
    expectations.push(calculateExpectation(kiswahiliScore));
    expectations.push(calculateExpectation(mathematicsScore));
    expectations.push(calculateExpectation(integratedScienceScore));
    expectations.push(calculateExpectation(healthEducationScore));
    expectations.push(calculateExpectation(preTechnicalScore));
    expectations.push(calculateExpectation(socialStudiesScore));
    expectations.push(calculateExpectation(religiousEducationScore));
    expectations.push(calculateExpectation(businessStudiesScore));
    expectations.push(calculateExpectation(agricultureScore));
    expectations.push(calculateExpectation(lifeSkillsScore));
    expectations.push(calculateExpectation(sportsAndPhysicalEducationScore));

    // Calculate the average expectation
    let totalExpectation = 0;
    for (let i = 0; i < expectations.length; i++) {
      if (expectations[i] === "Exceeds Expectations") {
        totalExpectation += 4;
      } else if (expectations[i] === "Meets Expectations") {
        totalExpectation += 3;
      } else if (expectations[i] === "Approaches Expectations") {
        totalExpectation += 2;
      } else {
        totalExpectation += 1;
      }
    }

    const averageExpectation = totalExpectation / expectations.length;

    let expectation;
    if (averageExpectation >= 3.5) {
      expectation = "Exceeds Expectations (EE)";
    } else if (averageExpectation >= 2.5) {
      expectation = "Meets Expectations (ME)";
    } else if (averageExpectation >= 1.5) {
      expectation = "Approaches Expectations (AE)";
    } else {
      expectation = "Below Expectations (BE)";
    }

    // Display the average expectation
    document.getElementById('averageExpectation').textContent = `Score: ${averageExpectation.toFixed(2)}`;

    // Display expectation
    document.getElementById('expectation').textContent = `${expectation}`;
  }
  window.onload = calculateAverage;
</script>


  </section>
  <script>
  let sidebar = document.querySelector(".sidebar2");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>

