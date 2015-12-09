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
			<li style="font-size:16px;"><span class="active">Projects</span></li>
			<li style="font-size:16px;"><a href="teams.php">Team</a></li>
			<li style="font-size:16px;"><a href="others.php">Others</a></li>
		</ul>
		<a href="ara_add_project.php" style="float:right;margin-top:-90px;font-size:18px; margin-right:150px;color:blue;"><b>Switch To Arabic</b></a> 		
		<div id="content" class="container_16 clearfix">
			<div class="grid_16">
				<form method="post">
    				<table align="center">
    					<tr>
    						<td align="center">
    							<center>
    								<span title="Click here to projects Page">
    									<a href="projects.php" style="font-size:20px;color:red;text-decoration:none"><b>Projects</b></a>
    								</span>
    							</center>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<input type="text" style="font-size:22px" name="name" placeholder="Enter name of project" required />
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<input type="text" style="font-size:22px"name="description" placeholder="Enter Description of project" required />
    						</td>
    					</tr>
						<tr>
    						<td>
    							<input type="url" style="font-size:22px"name="url" placeholder="Enter URL of project"  />
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<input type="file" style="font-size:22px"name="img"  />
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
 				$name = $_POST['name'];
 				$description = $_POST['description'];
 				$url=$_POST['url'];
 				  if ($_FILES["img"]["error"] > 0)
  {
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else
   {
     move_uploaded_file($_FILES["img"]["tmp_name"],"images/" . $_FILES["img"]["name"]);
     echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

     $file="images/".$_FILES["img"]["name"];
     // $sql="INSERT INTO eikones (auxon, path) VALUES ('','$file')";

   
   }
	 			// sql query for inserting data into database
 				$sql_query = "INSERT INTO project(name,description,url,image) VALUES('$name','$description','$url','$file')";
 				mysql_query($sql_query);
			}
		?>
</html>