<?php
	include_once 'dbconfig.php';
	if(isset($_GET['edit_id']))
	{
 		$sql_query="SELECT * FROM team WHERE id=".$_GET['edit_id'];
 		$result_set=mysql_query($sql_query);
 		$fetched_row=mysql_fetch_array($result_set);
	}
	if(isset($_POST['btn-update']))
	{
 		// variables for input data
 		$name = $_POST['name'];
 		$title = $_POST['title'];
 		$fb=$_POST['fb'];
 		$tw=$_POST['tw'];
 		// sql query for update data into database
 		$sql_query = "UPDATE team SET name='$name',title='$title',fb='$fb',tw='$tw' WHERE id=".$_GET['edit_id'];
 		// sql query execution function
 		if(mysql_query($sql_query))
 		{
?>
  	<script type="text/javascript">
  		alert('Data Are Updated Successfully');
  		window.location.href='teams.php';
  	</script>
<?php
	 	}
 		else
 		{
?>
  	<script type="text/javascript">
  		alert('error occured while updating data');
  	</script>
<?php
 		}
	}
	if(isset($_POST['btn-cancel']))
	{
 		header("Location: teams.php");
	}
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
		<script type="text/javascript">
			function edt_id(id)
			{
 				if(confirm('Sure to edit ?'))
 				{
  					window.location.href='edit_team.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{
 				if(confirm('Sure to Delete ?'))
 				{	
  					window.location.href='teams.php?delete_id='+id;
 				}
			}
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
			<li style="font-size:16px;"><span class="active">Team</span></li>
			<li style="font-size:16px;"><a href="others.php">Others</a></li>
		</ul>
		<a href="ara_edit_team.php" style="float:right;margin-top:-90px;margin-right:150px;font-size:18px; color:blue;"><b>Switch To Arabic</b></a> 		
		<div id="content" class="container_16 clearfix">
			<form method="post">
    			<table align="center">
    				<tr>
    					<td>
    						<input type="text" name="name" placeholder="<?php echo $fetched_row['name']; ?>" value="<?php echo $fetched_row['name']; ?>" required />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="text" name="title" placeholder="<?php echo $fetched_row['title']; ?>" value="<?php echo $fetched_row['title']; ?>" required />
    					</td>
   					</tr>
       				<tr>
    					<td>
    						<input type="url" name="fb" placeholder="<?php echo $fetched_row['fb']; ?>" value="<?php echo $fetched_row['fb']; ?>" required />
    					</td>
    				</tr>
       				<tr>
    					<td>
    						<input type="url" name="tw" placeholder="<?php echo $fetched_row['tw']; ?>" value="<?php echo $fetched_row['tw']; ?>" required />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    						<button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    					</td>
    				</tr>
    			</table>
    		</form>
		</div>
	</body>
</html>