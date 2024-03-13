
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>modify course</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
		 include('sidebar.php');   
	?> 
<?php
include 'connect.php';
$id = $_GET['Id'];
if(isset($id)){
    $statement=$conn-> prepare("SELECT Course_name FROM course where  Course_Code = $id");
    $statement->execute();
    $table=$statement -> fetch();
    
}?>
  <form  action=""  method="POST" class="form-style-9">
    <div class="form-style-heading">
      <center>

      <h3>REGISTER A NEW UNIVERSITY</h3>
    </center>
    </div>
    <ul>
    <li>
      <label for="" >University Code:</label>
        <input type="text" name="code" class="field-style field-split align-left" placeholder="Enter University Code"value="<?php echo $table['Course_name']?>" >
    </li>
    <li>
      <label for="">University Name:</label>
        <input type="text" name="Uname" class="field-style field-split align-left" placeholder="Enter University Name" >
    </li>
    <br>
    <li>
    <input type="submit" value="Submit" />
    <input type="submit" value="Reset" />
    </li>
    </ul>
    </form>
</body>
</html>