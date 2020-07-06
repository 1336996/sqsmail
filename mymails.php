<?php include('server.php')?>
<?php include('errors.php') ?>

<?php
if($_SESSION['email']== NULL){
  header("location: signin.php");
  }
?>
<?php
include_once('/opt/lampp/lib/vendor/phpmailer/class.phpmailer.php');
require_once('/opt/lampp/lib/vendor/phpmailer/class.smtp.php');
require '/opt/lampp/lib/vendor/phpmailer/PHPMailerAutoload.php';
require '/opt/lampp/lib/vendor/autoload.php';

#include_once('C:/xampp/lib/vendor/phpmailer/class.phpmailer.php');
#require_once('C:/xampp/lib/vendor/phpmailer/class.smtp.php');
#require 'C:/xampp/lib/vendor/phpmailer/PHPMailerAutoload.php';
#require 'C:/xampp/lib/vendor/autoload.php';

$email=$_SESSION['email'];
$username=$_SESSION['username'];

function send_mail($to,$subject,$body,$from)
{

        $from = $from;
        $mail = new PHPMailer(true);
        $mail->Mailer = "smtp";
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth   = true;  // SMTP authentication
        $mail->Host = "email-smtp.eu-west-1.amazonaws.com"; // Amazon SES
        $mail->Port = 465;  // SMTP Port
        $mail->Username = "AKIATJUTUDQ2374KMQBN";  // SMTP  Username
        $mail->Password = "BHhtsjrSuJyRz+35wH/UMcFkxY0INfgvQd1qFO2F5plI";  // SMTP Password
        $mail->From = $from;
        $mail->FromName = 'SqMailDomain';
        $mail->addReplyTo($from);
       # $mail->SetFrom($from, 'SQMail');
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $address = $to;
        $mail->AddAddress($to);
        $mail->Send();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>theSQmail</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#007BA9">
  <meta name="msapplication-navbutton-color" content="#007BA9">
   <link rel="icon" href="/sqmail_final/repository/images/logo.png">
  <link rel="stylesheet" href="/sqmail_final/repository/css/bootstrap.min.css">
  <link rel="stylesheet" href="/sqmail_final/repository/css/main.css">
  <script src="/sqmail_final/repository/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vollkorn"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="/sqmail_final/repository/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
<div class="backside">
<div class="container-fluid"> 
  <div class="row ">
    <div class="col-sm-2">
      <div class="row">
        <div class="col-sm-12">
		  <div class="logo"><img src="/sqmail_final/repository/img/logo5.png" alt="themedemic" /></div>
        </div>
      </div>
    </div>
    <div class="col-sm-10"><br>
       <div class="row" >
        <div class="col-sm-1">
          <a href="#"><i class="bar  fas fa-arrow-left"></i></a>
        </div>
        <div class="col-sm-10">
          <input class="bar" type="text" placeholder="Search mail" id="SearchBox" onkeyup="SearchMailFunction()">
        </div>
        <div class="col-sm-1">
          <i class="fas fa-user-circle" data-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item"><i class="fas fa-user"></i>&nbsp;<?php echo $username; ?></a>
              <a class="dropdown-item"><i class="fas fa-envelope-open"></i>&nbsp;<?php echo $email; ?></a>
              <a class="dropdown-item" href=""><i class="fas fa-wrench"></i> &nbsp;Settings</a>
              <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            </div>
        </div>
      </div><br>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2" >
      <center>
        <div class="compose_btn" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Compose
        </div>
      </center><br>
                    <!-- The Modal -->
                      <div class="modal fade" id="myModal" data-backdrop="false">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Compose</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <style>
                                .box .input-box{
                                        position: relative;
                                    }
                                    .box .input-box input,textarea,select{
                                        width: 100%;
                                        padding: 10px,0;    
                                        font-size: 16px;
                                        margin-bottom: 10px;
                                        border: none;
                                        outline: none;
                                        border-bottom: 1px solid #09BCFF;
                                    }
                                    .box .input-box label{
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        color: #909090;
                                        padding: 10px,0;
                                        font-size: 16px;
                                        pointer-events: none;
                                        transition: .5s;
                                    }

                                    .box .input-box input:focus, textarea:focus{
                                        border-bottom: 2px solid #09BCFF;
                                    }

                                    .box .input-box input:focus ~ label, .box .input-box textarea:focus ~ label,
                                    .box .input-box input:valid ~ label, .box .input-box textarea:valid ~ label{
                                        top: -18px;
                                        left: 0;
                                        color: #09BCFF;
                                        font-size: 13px;
                                    }       
                            </style>
                            <div class="modal-body">
                              <div class="box">
                                <form method="post" enctype="multipart/form-data"><br>
				 <div class="row">
                                    <div class="col-sm-12">
                                      <div class="input-box">
                                        <input type="email" name="email" required autocomplete="off"/>
                                        <label>To *</label>
                                      </div>
                                    </div>
                                  </div><br><br>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="input-box">
                                        <input type="subject" name="subject" autocomplete="off"/>
                                        <label>Sub *</label>
                                      </div>
                                    </div>
                                  </div><br><br>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="input-box">
                                        <textarea name="body"  rows="4" autocomplete="off"></textarea>
                                        <label>Message *</label>
                                      </div>
                                    </div>
                                  </div><br><br>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <center><div class="next-button">
                                          <button type="submit" name="send_mail" id="send_mail" class="btn btn-primary">Send Mail</button>
                                      </div></center>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>	


<?php
if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['body'])){

$db = mysqli_connect('database-2.ctvudsuid3uk.eu-west-1.rds.amazonaws.com', 'admin', 'admin123', 'sqmail');

$recepient = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['body'];
$sender = $_SESSION['email'];
$date = date('Y-m-d h:i:s a');
$query = "INSERT INTO send (receipent,subject,body,sender,sendTime) VALUES('$recepient','$subject','$body','$sender','$date')";
mysqli_query($db, $query);
send_mail($_POST['email'],$_POST['subject'],$_POST['body'],$_SESSION['email']);
}
?>					  
					  
      <div class="row">
          <div class="pils" onclick="inbox()">
            <i class="fas fa-inbox"></i>&nbsp;&nbsp;Inbox
          </div>
      </div>
      <div class="row">
          <div class="pils" onclick="sent()">
            <i class="fab fa-telegram-plane"></i>&nbsp;&nbsp;&nbsp;Sent
          </div>
      </div>
      <div class="row">
          <div class="pils" onclick="star()">
            <i class="far fa-star"></i>&nbsp;&nbsp;Starred
          </div>
      </div>
      <div class="row">
          <div class="pils" onclick="draft()">
            <i class="fas fa-file"></i>&nbsp;&nbsp;&nbsp;Drafts
          </div>
      </div>
      <div class="row">
          <div class="pils" onclick="trash()">
            <i class="far fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;Trash
          </div>
      </div>
    </div>
    <div class="col-sm-10" id="demo">
    </div>
</div>   
</div>
</body>
<script src="/sqmail_final/repository/js/main.js" type="text/javascript"></script>
</html>


