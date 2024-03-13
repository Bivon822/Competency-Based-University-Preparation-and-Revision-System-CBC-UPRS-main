<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Competency Based University Preparation and Revision System CBC-UPRS</title>
<style>
    body {
        background-size: cover;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        position: relative;
    }

    header {
        text-align: center;
        display: block;
        font-size: 20px;
        height: 20%;
        color: white;
        background-color:   #B0CFE0;
        text-align: center;
        padding: 1px 0;
    }

 .login-section {
        position: absolute;
        top: 105%;
        left: 80%;
        border-radius: 30%;
        transform: translateX(-30%);
        width: 250px;
        background-color: rgba(255, 255, 255, 0.6);
        padding: 30px;
        text-align: center;
    }   
    main {
        position: absolute;
        top: 140%;
        left: 10%;
        font-size: 27px;
        border-radius: 30%;
        transform: translateX(-30%);
        width: 310px;
        background-color: rgba(255, 255, 255, 0.4);
        padding: 30px;
        text-align: center;
    } 
    footer{
        position: absolute;
        top: 395%;
        left: 10%;
        transform: translateX(-10%);
        width: 100%;
        background-color: rgba(255, 255, 255, 0.6);
        padding: 10px;
        text-align: center;
    }

    #loginForm input {
        padding: 2px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    .image-section {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        z-index: -1;
    }

    .image-section img {
        width: 100%;
        height: 1100px;
        object-fit: cover;
    }
</style>
</head>
<body>

<div class="container">
    <header>
        <h1>Competency Based University Preparation and Revision System <br> CBC-UPRS</h1>
    </header>
    <section class="login-section">
        <h2>Login</h2>
        <form id="loginForm" onsubmit="return validateForm()" action="login.php" method="POST">
            <label for="indexNumber">Index Number:</label><br>
            <input type="text"  name="username" required pattern="\d{4,10}" maxlength="10"><br>
            <label for="birthCertificateNumber">Birth Certificate Number/ID:</label><br>
            <input type="text" name="pass" required pattern="\d{4,10}" maxlength="10"><br>
            <button type="submit">Login</button>
        </form>
       
    </section>
     <main>
      <p>
      <strong>This application is your opportunity to showcase your unique talents and aspirations. Be confident in who you are and what you have to offer!</strong>
      </p>
     </main>
    <footer>
    <strong>&copy; 2024 Competency Based University Preparation and Revision System CBC-UPRS. All Rights Reserved.</strong>
</footer>
    <section class="image-section">
        <img src="img/GENERATE A.png" alt="Background Image">
    </section>
</div>

<script>
    function validateForm() {
        var indexNumber = document.getElementById('indexNumber').value;
        var birthCertificateNumber = document.getElementById('birthCertificateNumber').value;
        var indexPattern = /^\d{4,10}$/;
        if (!indexPattern.test(indexNumber)) {
            alert('Index Number must be between 4 and 10 digits.');
            return false;
        }
        if (!indexPattern.test(birthCertificateNumber)) {
            alert('Birth Certificate Number/ID must be between 4 and 10 digits.');
            return false;
        }
        return true;
    }
</script>

</body>
</html>
