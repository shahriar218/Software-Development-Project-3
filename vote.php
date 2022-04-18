<?php include ('head.php');?>
<?php include('sess.php')?>
<body>
    <div id="wrapper" >
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-12">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading" style = "background-color:green;">
						<center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position" >
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" alt="centered image" height = "150px" width = "150px" class = "img"></center>
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;background-color:red;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
	
	<div class="col-lg-12">
	  <div class="panel panel-primary">
            <div class="panel-heading" style = "background-color:green;">
			<center>PRIME MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Prime minister'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" style="color:green">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;background-color:red;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "minister_id" class = "prime_minister"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-12" >
	  <div class="panel panel-primary" >
            <div class="panel-heading" style = "background-color:green;">
			<center >Commissioner</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Commissioner'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;background-color:red;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "commissioner_id" class = "commissioner"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 
	
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center></br></br></br>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			
			$(".prime_minister").on("change", function(){
				if($(".prime_minister:checked").length == 1)
					{
						$(".prime_minister").attr("disabled", "disabled");
						$(".prime_minister:checked").removeAttr("disabled");
					}
				else
					{
						$(".prime_minister").removeAttr("disabled");
					}
			});
			
			$(".commissioner").on("change", function(){
				if($(".commissioner:checked").length == 1)
					{
						$(".commissioner").attr("disabled", "disabled");
						$(".commissioner:checked").removeAttr("disabled");
					}
				else
					{
						$(".commissioner").removeAttr("disabled");
					}
			});
			
			
		});	
	</script>
</html>

