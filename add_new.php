<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>SIT</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
		        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        <script type='text/javascript' src='script.js'></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
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
			<li style="font-size:16px;"><span class="active">News</span></li>
			<li style="font-size:16px;"><a href="projects.php">Projects</a></li>
			<li style="font-size:16px;"><a href="teams.php">Team</a></li>
			<li style="font-size:16px;"><a href="others.php">Others</a></li>
		</ul>
<a href="ara_add_new.php" style="float:right;margin-top:-90px;margin-right:150px;font-size:18px;color:blue; "><b>Switch To Arabic</b></a> 		

		<div id="content" class="container_16 clearfix">	
			<div class="grid_16">
				<form method="post">
    				<table align="center">
    					<tr>
    						<td align="center">
	    						<center>
		    						<span title="Click here to News Page">
		    							<a href="news.php" style="font-size:20px;color:red;text-decoration:none"><b>News</b></a>
		    						</span>
	    						</center>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<input type="text" style="font-size:22px" name="title" placeholder="Enter title of New" required />
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<input type="text" style="font-size:22px"name="description" placeholder="Enter Description of New" required />
    						</td>
  					 	</tr>
 						<tr>
							<td>
    							<center>
    								<button type="submit" name="btn-save" style="color:blue; width: 15em;  height: 3em;"><strong>SAVE</strong></button>
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
 			$title = $_POST['title'];
 			$description = $_POST['description'];
  			$date = date("Y/m/d");
 			$img=$_FILES['images']['name'];
 			// sql query for inserting data into database
 			$sql_query = "INSERT INTO new(id,title,description,new_date) VALUES('','$title','$description','$date')";
 			mysql_query($sql_query);
 
		}
	?>
</html>