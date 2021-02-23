<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
<body>
<h1>Welcome</h1>
                       <br>
                        
  <table class="table table-striped" id="userTbl" >
        <tr class="header">
      
            <th colspan="7"><h2>Student login successfully</h2> </th>
         </tr>
   
        <tr>
        
           
            <th> Name </th>
            <th> Email </th>
            <th> phone </th>
            <th> address</th>
           
        </tr>
    <tr>
                
                
               
                        
<body>

<?php
	
	session_start();
	/*echo" NAme " .$_SESSION['name'];
	echo"<br>";
	echo"Email  " .$_SESSION['email'];
	echo"<br>";
	echo"cell  " .$_SESSION['phone'];
	echo"<br>";
	echo"cell  " .$_SESSION['address'];
	
	echo"<br>";
	echo"<br>";*/
	
	
	
	?>
     <td> <?php echo"" .$_SESSION['name']; ?></td>
     <td> <?php echo"" .$_SESSION['email']; ?></td>
     <td> <?php echo"" .$_SESSION['phone']; ?></td>
     <td> <?php echo"" .$_SESSION['address']; ?></td>
                </tr>
                      
                      </table>
                      
     \
     <a href="logout.php">LOGOUT</a>


</body>
</html>