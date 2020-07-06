<?php include('server.php') ?>
<?php include('errors.php') ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/sqmail_final/repository/img/logo5.png">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#007BA9">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#007BA9">
        <!-- iOS Safari -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vollkorn"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="#007BA9">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="/sqmail_final/repository/css/bootstrap.min.css">
        <title>theSQmail</title>
    </head>
<link rel="stylesheet" href="/sqmail_final/repository/css/forms.css" type="text/css">
<div class="backside">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
			<div class="loginbox">
		
            <div class="box">
                <div class="logo logo-m">
                    <div class="col-sm-12">
						<div class="logo"><img src="/sqmail_final/repository/img/logo5.png" alt="themedemic" /></div>
					</div>
                </div>
                
		<h1>Signin</h1>
                <h4>in your ThesqMail Account</h4>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-box">
                                <input type="text" name="email" required/>
                                <label>Email *</label>
                                <spam >eg.demo@thesqmails.com</spam>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-box">
                                <input type="password" name="password" required/>
                                <label>Password *</label>
								
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
						<label id="forgot-label"><a href="signup.php">New Here?Sign Up!</a></label>
                        <div class="next-button1">
                            <button type="submit" name="login_user" id="submit" value="submit" class="btn btn-primary">Sign in</button>
                        </div>
						
                    </div>
                    
                </form>
            </div>
			</div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>      

    <footer>
        <div class="footer">
            <style>
                .fab{
                    font-size:21px;
                }
            </style>
            <center>
                <span class="copyright" style="color:#fff">All copyrights reserved © ThesqMails 2020
                </span>
            </center>
        </div>
    </footer>
    <script src="/sqmail_final/repository/js/jquery.min.js" type="text/javascript"></script>
    <script src="/sqmail_final/repository/js/main.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/sqmail_final/repository/js/bootstrap.min.js" type="text/javascript"></script>
	</div>
  </body>
</html> 
