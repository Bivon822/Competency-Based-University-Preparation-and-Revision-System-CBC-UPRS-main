<?php  session_start(); ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JSUARS</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav1">
  <h1 class="title">Junior-Secondary-University-Application-and-Revision-system-(JSUARS)</h1>
  <h2 class= "title">Welcome  <?php echo $_SESSION['Username']; ?></h2> 
  <div class="top-right-form">
      <a href="" class="need-help">NEED HELP</a>
  </div>
</div>


<div class="navbar2">
  <a href="#home">HOME</a>
  <a href="#news">ABOUT US</a>
  <div class="dropdown">
    <button class="dropbtn">STUDENTS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Application.php">APPLICATION</a>
      <a href="courseRevision.php">REVISION</a>
      <a href="my_status.php">MY STATUS</a>
    </div>
  </div> 
</div>


<div class="display">
   <div class="home-content-1">
   <center><h5 class="quick-links-header">QUIKCK LINKS</h5></center><br>
        <button class="quick-links">
          <a href="">University Courses Cut-off Points</a>
        </button>
        <br>
        <button class="quick-links">
          <a href="Application.php">New Applications</a><br>
        </button><br>
        <button class="quick-links">
          <a href="">University News and Events</a>
        </button><br>
        <button class="quick-links">
          <a href="">Know your KCSE Results</a>
        </button><br>
        <button class="quick-links">
          <a href="">Help</a>
        </button>
     </div>

    <div class="home-content-2">
    <center><h5 class="header1">WELCOME TO JSUARS</h5></center><br>
      <h6 class="sub-header">The Joint Admissions Board(JAB)</h6><br>
      <p>Admission to any University is done according to well laid down procedures. The addmission options available to prospective students are as follows:</p><br>
      <h6 class="sub-header">Undergaduate module I</h6><br>
      <p>(Sponsered by the Kenyan Government): This is done through the national Joint Admission Board(JAB), the body that does admission of students for all public universities in Kenya. </p>
      <h6 class="sub-header">Undergraduate Module II</h6><br>
      <p>(SELF Sponsered) Students-Done internally at the university</p>
    </div><br>

    <div class="home-content-2">
    <center><h5 class="header2">OUR NEWS</h5></center><br>
      <p>(Sponsered by the Kenyan Government): This is done through the national Joint Admission Board(JAB), the body that does admission of students for all public universities in Kenya. </p>
    </div>
   </div>


    <script>
      //function applicationPage() {
        //  window.location.href = "Application.html";
      //}
  </script>
</body>
</html>