<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><div class="a"><form method="POST">
    <input type="text" name="student_name" placeholder="Student Name" required autofocus />
    <input type="submit" value="Add Student" name="submit">
    
</form>
</div>
</body>

<?php 

    if(isset($_POST['submit']))
    {
        require_once("config.php");
        $student_name = $_POST['student_name'];
        $query = "INSERT INTO attendance_students(student_name) VALUE('$student_name')";
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));
        echo "Student has been added Successfully!";
    }
?>