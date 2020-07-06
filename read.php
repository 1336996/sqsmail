<?php
$mailId = $_GET['mailId'];
include('server.php');
if($_SESSION['email']== NULL){
  header("location: signin.php");
  }
  
$connection = mysqli_connect('database-2.ctvudsuid3uk.eu-west-1.rds.amazonaws.com', 'admin', 'admin123', 'sqmail');

$mail = $_SESSION['email'];
#$lname = $_SESSION['lname'];
#$fname = $_SESSION['fname'];

#$sql = "SELECT * FROM mails WHERE c_2= '$mail'  AND trash=0  AND draft=0 order by date desc;";


$result = mysqli_query($connection, "SELECT * FROM receive where id = '".$mailId."'");
#$result = mysqli_query($connection, "SELECT * FROM receive where u_id = '25'");
$query_data = mysqli_fetch_row($result)
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <link rel="icon" href="/sqmail_final/repository/images/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/sqmail_final/repository/css/bootstrap.min.css">
  <link rel="stylesheet" href="/sqmail_final/repository/css/main.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vollkorn"/>
  <link rel="stylesheet" href="/sqmail_final/repository/css/forms.css">
  <script src="/sqmail_final/repository/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="/sqmail_final/repository/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
<div class="mailside">
<div class="container-fluid"> 
  <div class="row ">
    <div class="col-sm-12"><br>
       <div class="row" >
        <div class="col-xs-3">
         <a onclick="inbox()" style="text-decoration: none;">&emsp;<i class="fa fa-arrow-left" style="color:black;font-size: 1.2rem;"></i></a>
        </div>
        <div class="col-sm-10">
          <h4><?php echo $query_data[4]; ?></h4>
        </div>
        
      </div><br>
    </div>
  </div>
  <div class="row">
		<div class="col-xs-1">
        &emsp;<i class="fas fa-user-circle" style="color:black"></i>
        </div>
        <div class="col-sm-8">
            <!--Nested row-->
			
            <div class="row">
                <div class="col-sm-8">
                    <a><b><?php echo $query_data[2]; ?></b></a>
                </div>
            </div>
            <!--Nested rows-->
            <div class="row">
                <div class="col-sm-8">
                    <a>to <?php echo $query_data[1]; ?></a>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <p><?php 
			 $dateTime=$query_data[6];
			$timestamp = strtotime($dateTime);
			$new_date = date('F j, Y, g:i a', $timestamp);
		echo $new_date; ?></p>

        </div>
		<div class="col-sm-1">
		<a href="" style="text-decoration: none;"><i class="fas fa-reply" style="color:black"></i>&emsp;</a>
          <i class="fas fa-ellipsis-v" data-toggle="dropdown" style="cursor:pointer"></i>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item"><i class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
			  <a class="dropdown-item"><i class="fas fa-reply-all"></i>&nbsp;&nbsp;reply all</a>
              <a class="dropdown-item"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;forward</a>
              <a class="dropdown-item" href=""><i class="fas fa-trash"></i>&nbsp;&nbsp;delete</a>
            </div>
        </div>
    </div>
	
	<div class="row ">
    <div class="col-sm-12"></br>
	<div class="row ">
       <div class="col-xs-1">&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</div>
		<div class="col-sm-10">
		<?php echo $query_data[5]; ?>
                 </div>
		<div class="col-sm-1">
      </div>
         
        </div>
		</div>
        
      </div></br>
	  
	  
	  
	  
	  <div class="row ">
    <div class="col-sm-12"></br>
	<div class="row ">
       <div class="col-xs-1">&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</div>
		<div class="col-sm-10">
        <button class="btn"><i class="fas fa-reply"></i>&nbsp;&nbsp;Reply</button>&emsp;
	  <button class="btn"><i class="fas fa-share"></i>&nbsp;&nbsp;Forward</button></br></br>
                </div>
		<div class="col-sm-1">
      </div>
         
        </div>
		</div>
        
      </div></br>
	  
	 
  </div>
</div>


  </div>
  <script src="/sqmail_final/repository/js/main.js" type="text/javascript"></script>
</html>
