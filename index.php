<html>
    <?php include ('head.php');?>
<body style="background-color: aquamarine;">
    <div class="header">
            <div class="logo_container">
                <h1>ONLINE<span>VOTE</span></h1>
            </div>  
    </div>
    <img src="C:\Users\shahr_ci11ebd\Desktop\vvv\images\e_vote.png.png" alt="HTML5 Icon" style="width: 500px; height: 300px;" class="type1 type2">
    
    <div class="container">
        
        <div class="row">
           
		<center><h3>Automated Voting Sytem</h3></center>
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In Here</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >ID No.</label>
										<input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							<?php include ('login_query.php');?>
									
                        </form>
                        <h4 style="color: crimson;"><b>Note:</b> <i>One voter can only vote/login one time!!</i> </h4>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
<footer id="footer">
    
    
    <div class="footer_container">
        
        <h1>Contact Us: <a href="#">onlinevote@gmail.com</a></h1>
        
    </div>
    <div class="footer_right">
        <h1>@All rights reserved by election commision.</h1>
    </div>
</footer>
    
<?php include ('script.php');?>

</body>

</html>
