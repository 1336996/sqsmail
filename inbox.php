<?php include('server.php')?>
<?php
if($_SESSION['email']== NULL){
  header("location: signin.php");
  }
?>
<body>
<?php

$connection = mysqli_connect('database-2.ctvudsuid3uk.eu-west-1.rds.amazonaws.com', 'admin', 'admin123', 'sqmail');

$mail = $_SESSION['email'];


$result = mysqli_query($connection, "SELECT * FROM receive where Tou = '".$_SESSION['email']."'");

?>
<table class="mailList table table-hover" id="MailList">
<?php
 $inbox=mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0)
  {
      while($row = mysqli_fetch_array($result))
      {
		  $mailId = $row['id'];
		  ?>
		  

<tr onclick="readmail(<?php echo $mailId;?>)" style="cursor:pointer">          
          <td class='col-1'><i class='far fa-star'></i>&nbsp;&nbsp;
         <?php echo $row['SentFrom'];
          echo "</td>
            <td class='col-2'>";
          echo $row['Subject'];
          echo "</td>
            <td class='col-3'>";
          echo substr($row['Body'],0,100);
          echo "</td>
	<td class='col-4'>";
		  
          $dateTime=$row['ReceivedDate'];
			$timestamp = strtotime($dateTime);
			$new_date = date('F j, Y, g:i a', $timestamp);
		echo $new_date;			
          echo "</td>
            </tr>";
     }
  }
  else
  {
    echo "<tr>
              <td><center>Sorry, you don't have any mail</center></td>
             </tr>";
  }
?>

</table>
</body>
