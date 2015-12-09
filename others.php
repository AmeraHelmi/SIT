<?php
include_once 'dbconfig.php';

$v=1;
$sql_query="SELECT * FROM others WHERE id=".$v;
		$result_set=mysql_query($sql_query);
		$fetched_row=mysql_fetch_array($result_set);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>SIT</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<script type="text/javascript">
			glow.ready(function(){
				new glow.widgets.Sortable(
					'#content .grid_5, #content .grid_6',
					{
						draggableOptions : {
							handle : 'h2'
						}
					}
				);
			});
		</script>
	</head>
	<body>

		<h1 id="head">
			<a href="index.php" style="font-size:40px;color:red;text-decoration:none">SIT</a>
		</h1>
		
		<ul id="navigation">
			<li style="font-size:16px;"><a href="admin.php">Offers</a></li>
			<li style="font-size:16px;"><a href="services.php">Services</a></li>
			<li style="font-size:16px;"><a href="news.php">News</a></li>
			<li style="font-size:16px;"><a href="projects.php">Projects</a></li>
			<li style="font-size:16px;"><a href="teams.php">Team</a></li>
			<li style="font-size:16px;"><span class="active">Others</span></li>
		</ul>
<a href="ara_others.php" style="float:right;margin-top:-90px;font-size:18px;margin-right:150px;color:blue; "><b>Switch To Arabic</b></a> 		
		<div id="content" class="container_16 clearfix">
			<div class="grid_16" style="overflow: scroll ;max-height: 550px; width: 50%;">
				<form method="post">
    				<table align="center">
    				
    					<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="vision" placeholder="<?php if(! empty($fetched_row['vision'])) {echo $fetched_row['vision'];} else{ echo'Enter Vision Here';}?>" ></textarea>
    						</td>
    					</tr>
    					<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="mission" placeholder="<?php if(! empty($fetched_row['mision'])) {echo $fetched_row['mision'];} else{ echo"Enter Mission Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="history" placeholder="<?php if(! empty($fetched_row['history'])) {echo $fetched_row['history'];} else{ echo"Enter history Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="about" placeholder="<?php if(! empty($fetched_row['about'])) {echo $fetched_row['about'];} else{ echo"Enter About Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    							<td>
    								<input type="email" style="font-size:22px" name="email" placeholder="<?php if(! empty($fetched_row['email'])) {echo $fetched_row['email'];} else{ echo"Enter Email Here";}?>"  />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="tel" style="font-size:22px" name="telphone" placeholder="<?php if(! empty($fetched_row['phone'])) {echo $fetched_row['phone'];} else{ echo"Enter Phone Here";}?>"  />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="tel" style="font-size:22px" name="telmobile" placeholder="<?php if(! empty($fetched_row['mobile'])) {echo $fetched_row['mobile'];} else{ echo"Enter Mobile Here";}?>" />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="url" style="font-size:22px" name="web" placeholder="<?php if(! empty($fetched_row['web'])) {echo $fetched_row['web'];} else{ echo"Enter WebSite Link Here";}?>" />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="url" style="font-size:22px" name="tw" placeholder="<?php if(! empty($fetched_row['tw'])) {echo $fetched_row['tw'];} else{ echo"Enter Twitter Here";}?>" />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="url" style="font-size:22px" name="fb" placeholder="<?php if(! empty($fetched_row['fb'])) {echo $fetched_row['fb'];} else{ echo"Enter Facebook Here";}?>" />
    							</td>
    						</tr>
    							<tr>
    							<td>
    								<input type="url" style="font-size:22px" name="lin" placeholder="<?php if(! empty($fetched_row['linkedin'])) {echo $fetched_row['linkedin'];} else{ echo"Enter linkedin Here";}?>"/>
    						</tr>
    							<tr>
    							<td>
    								<input type="url" style="font-size:22px" name="google" placeholder="<?php if(! empty($fetched_row['google'])) {echo $fetched_row['google'];} else{ echo"Enter Google+ Account Here";}?>"  />
    							</td>
    						</tr>
    							<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="offer_desc" placeholder="<?php if(! empty($fetched_row['offer_desc'])) {echo $fetched_row['offer_desc'];} else{ echo"Enter Offer Description Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="service_desc" placeholder="<?php if(! empty($fetched_row['service_desc'])) {echo $fetched_row['service_desc'];} else{ echo"Enter Service Description Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="project_desc"placeholder="<?php if(! empty($fetched_row['project_desc'])) {echo $fetched_row['project_desc'];} else{ echo"Enter Project Description Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="team_desc"placeholder="<?php if(! empty($fetched_row['team_desc'])) {echo $fetched_row['team_desc'];} else{ echo"Enter Team Description Here";}?>"></textarea>
    						</td>
    					</tr>
    						<tr>
    						<td>
    						<textarea rows="3" cols="50" style="font-size:22px"name="new_desc"placeholder="<?php if(! empty($fetched_row['new_desc'])) {echo $fetched_row['new_desc'];} else{ echo"Enter News Description Here";}?>"></textarea>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<center>
    								<button type="submit" name="btn-save" style="color:blue; width: 15em;  height: 3em"><strong>SAVE</strong></button>
    							</center>
    						</td>
    					</tr>
    				</table>
    			</form>
			</div>
		</div>
	</body>
		<?php
			include_once 'dbconfig.php';
			if(isset($_POST['btn-save']))
			{
 				// variables for input data
                if(empty($_POST['vision']))
                {
                    $vision=$fetched_row['vision'];
                }
                else
                {
                  $vision=$_POST['vision'];  
                }
 				if(empty($_POST['mission']))
                {
                    $mission=$fetched_row['mision'];
                }
                else
                {
                    $mission=$_POST['mission'];    
                }
 				if(empty($_POST['history']))
                {
                    $history=$fetched_row['history'];
                }
                else
                {
                    $history=$_POST['history'];    
                }
 				if(empty($_POST['about']))
                {
                    $about=$fetched_row['about'];
                }
                else
                {
                    $about=$_POST['about'];
                }
 				if(empty($_POST['email']))
                {
                    $email=$fetched_row['email'];
                }
                else
                {
                    $email=$_POST['email'];
                }
 				if(empty($_POST['telphone']))
                {
                    $phone=$fetched_row['phone'];
                }
 				else
                {
                    $phone=$_POST['telphone'];
                }
                if(empty($_POST['telmobile']))
                {
                    $mobile=$fetched_row['mobile'];
                }
 				else
                {
                    $mobile=$_POST['telmobile'];
                }
                if(empty($_POST['web']))
                {
                    $web=$fetched_row['web'];
                }
 				else
                {
                    $web=$_POST['web'];
                }
                if(empty($_POST['tw']))
                {
                    $tw=$fetched_row['tw'];
                }
 				else
                {
                    $tw=$_POST['tw'];
                }
                if(empty($_POST['fb']))
                {
                    $fb=$fetched_row['fb'];
                }
                else
                {
                    $fb=$_POST['fb'];
                }
 				if(empty($_POST['lin']))
                {
                    $lin=$fetched_row['linkedin'];
                }
                else
                {
                    $lin=$_POST['lin'];    
                }
 				if(empty($_POST['google']))
                {
                    $google=$fetched_row['google'];
                }
                else
                {
                    $google=$_POST['google'];    
                }
 				if(empty($_POST['offer_desc']))
                {
                    $offer_desc=$fetched_row['offer_desc'];
                }
                else
                {
                  $offer_desc=$_POST['offer_desc'];  
                }
 				if(empty($_POST['service_desc']))
                {
                    $service_desc=$_POST['service_desc'];
                }
                else
                {
                    $service_desc=$_POST['service_desc'];    
                }
 				if(empty($_POST['project_desc']))
                {
                    $project_desc=$fetched_row['project_desc'];
                }
                else
                {
                    $project_desc=$_POST['project_desc'];    
                }
 				if(empty($_POST['team_desc']))
                {
                    $team_desc=$fetched_row['team_desc'];
                }
                else
                {
                    $team_desc=$_POST['team_desc'];    
                }
 				if(empty($_POST['new_desc']))
                {
                    $new_desc=$fetched_row['new_desc'];
                }
                else
                {
                    $new_desc=$_POST['new_desc'];    
                }
 				
                // $vision=$_POST['vision'];
                // $mission=$_POST['mission'];
                // $history=$_POST['history'];
                // $about=$_POST['about'];
                // $email=$_POST['email'];
                // $phone=$_POST['telphone'];
                // $mobile=$_POST['telmobile'];
                // $web=$_POST['web'];
                // $tw=$_POST['tw'];
                // $fb=$_POST['fb'];
                // $lin=$_POST['lin'];
                // $google=$_POST['google'];
                // $offer_desc=$_POST['offer_desc'];
                // $service_desc=$_POST['service_desc'];
                // $project_desc=$_POST['project_desc'];
                // $team_desc=$_POST['team_desc'];
                // $new_desc=$_POST['new_desc'];
 				// sql query for inserting data into database

 				$v=1;
 				$sql_query = "UPDATE others SET vision='$vision',mision='$mission',history='$history',about_us='$about',email='$email',phone='$phone',mobile='$mobile',web='$web',tw='$tw',fb='$fb',linkedin='$lin',google='$google',offer_desc='$offer_desc',project_desc='$project_desc',team_desc='$team_desc',service_desc='$service_desc',new_desc='$new_desc' WHERE id=".$v;
 				mysql_query($sql_query);
?>
<script type="text/javascript">location.href = 'admin.php';</script>
<?php

			}
			// header("Location: admin.php");
		?>
		
</html>