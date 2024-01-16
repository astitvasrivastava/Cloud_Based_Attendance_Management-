<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="a">
    <h1> SCHOOL OF MANAGEMENT</h1>
            <div class="row ">
            <h2><ul>ATTENDANCE MANAGEMENT SYSTEM</ul></h>
                <div class="card">
                <h3>STUDENTS ATTENDANCE OF MONTH: <u><?php echo strtoupper(date("F")); ?></u></h3>
                </div>
            </div>
        </header>
    </div>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
 <div class="col-12">
        <div class="card-body">
            
            <form action ="addingStudents.php" method="post">
                <h2>Add New Students </h2>
                 <?php 
                    echo "<hr>";  
                ?>
                <button type="submit">  ADD  </button>
</br>
</br>
            </form>
        </div>
 </div>
   
    <div>
       
        <div class="col-12">
        <form action ="SmartAttendanceSheet.php" method="post">
    <h2>Marked Attendance </h2>
    <?php 
                echo "<hr>";  
         ?>
    <button type="submit">  CHECK  </button>
</br>
</br>

</form>
</div> </div>

<form action ="addAttendance.php" method="post">
    <h2>Mark Attendance</h2>
    <?php 
                echo "<hr>";  
         ?>
    <button type="submit">  MARK  </button>
</form>

<a href="logout.php">Logout</a>
</body>
</br>
</br>
<div class= "card-footer">
    <small>&copy; Astitva Srivastava</small>
        <?php 
                echo "<hr>";  
         ?>
    </div>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
