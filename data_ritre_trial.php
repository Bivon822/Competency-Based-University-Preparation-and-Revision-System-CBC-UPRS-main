<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Knec Results</title>
  <style>
    .right-side-container {
      margin-left: 500px;
      border: 2px solid green;
      padding: 5px;
      width: 400px;

    }

    .progress-form {
      width: inherit;
      height: inherit;
      padding: 10px;
      border: 2px solid yellow;
      align-items: center;
    }

    .progress-container {
      display: flex;
      width: inherit;
      border: 2px solid palevioletred;
      height: inherit;
      display: block;
    }

    .index-number {
      display: flex;
      padding: 10px;
    }
    .index-number-input{
      width: 150px;
      border: 2px solid black;
      margin-left: 5px;
    }
    .grade {
    display: block;
    width: 160px;
    height: 440px; /* Adjust as needed */
    justify-content: space-between;
    border: 2px solid black;
    padding: 10px;
    overflow: hidden; /* Hide overflow content */
     /* Prevent text from wrapping */
     white-space: nowrap;
    text-overflow: ellipsis; /* Display an ellipsis (...) to indicate clipped text */
}

.grade p {
    font-weight: bolder;
    margin-bottom: 10px;
}
    .score {
      margin-left: 10px;
      height: 440px;
      border: 2px solid black;
      width: 60px;
      padding: 10px;

    }

    input {
      display: block;
      margin-bottom: 15px;
      width: 40px;
      height: auto;
    }
    .retrive-button{
      width: 110px;
      background-color: greenyellow;
    }
  </style>
</head>

<body>
  <div class="right-side-container">
    <div class="upper-part">
      <div class="student-knec-results"></div>
    </div>

    <div class="lower-part">
      <form class="progress-form" action="retrive_knec_data.php" method="post">
        <div class="progress-container">
          <div class="index-number">
            <label for="index_number">KCSE Index Number:</label><br>
            <input class="index-number-input" type="text" placeholder="Enter KCSE Index" id="index_number" name="index_number"><br><br>
          </div>
          

          </div>
        </div>
        <input class="retrive-button" type="submit" value="Display Results">
      </form>
    </div>
  </div>

</body>

</html>