<?php include('server.php')?>
<?php include('errors.php')?>
<?php
if($_SESSION['email']== NULL){
  header("location: signin.php");
  }
?>
<body>
<?php
$connection = mysqli_connect('database-2.ctvudsuid3uk.eu-west-1.rds.amazonaws.com', 'admin', 'admin123', 'sqmail');

$mail = $_SESSION['email'];
$result = mysqli_query($connection, "SELECT * FROM send where sender = '".$_SESSION['email']."'");

?>
<table class="mailList table table-hover" id="MailList">
<?php

  if (mysqli_num_rows($result) > 0)
  {
      while($row = mysqli_fetch_array($result))
      {
		  $mailId = $row['id'];
		  ?>
	<tr onclick="readSentMail(<?php echo $mailId;?>)" style="cursor:pointer">

          <td class='col-1'><i class='far fa-star'></i>&nbsp;&nbsp; 
          <?php echo $row['receipent'];
          echo "</td>
            <td class='col-2'>";
          echo$row['subject'];
          echo "</td>
            <td class='col-3'>";
          echo substr($row['body'],0,100);
          echo "</td>
            <td class='col-4'>";
			
			$dateTime=$row['sendTime'];
			
			if($dateTime!='0000-00-00 00:00:00')
			{
				$timestamp = strtotime($dateTime);
				$new_date = date('F j, Y, g:i a', $timestamp);
				echo $new_date;
			}
			else
			{
				echo 'Null';
			}
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

<div class="modal fade" id="readSendMail" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
		<form class="sentmaildata" method="" >
		</form>
		</div>
	</div>
  </div>
</div>
</body>
