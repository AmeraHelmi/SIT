<?php
	include_once 'dbconfig.php';
	if(isset($_GET['edit_id']))
	{
		$sql_query="SELECT * FROM new WHERE id=".$_GET['edit_id'];
		$result_set=mysql_query($sql_query);
		$fetched_row=mysql_fetch_array($result_set);
	}
	if(isset($_POST['btn-update']))
	{
 		// variables for input data
 		$title = $_POST['title'];
 		$description = $_POST['description'];
 		// sql query for update data into database
 		$sql_query = "UPDATE new SET title='$title',description='$description' WHERE id=".$_GET['edit_id'];
 		// sql query execution function
 	if(mysql_query($sql_query))
 	{
?>
  	<script type="text/javascript">
  		alert('Data Are Updated Successfully');
  		window.location.href='news.php';
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
 		// sql query execution function
	}
	if(isset($_POST['btn-cancel']))
	{
		 header("Location: news.php");
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
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
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
  					window.location.href='edit_new.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{
 				if(confirm('Sure to Delete ?'))
 				{
  					window.location.href='news.php?delete_id='+id;
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
			<li style="font-size:16px;"><span class="active">News</span></li>
			<li style="font-size:16px;"><a href="projects.php">Projects</a></li>
			<li style="font-size:16px;"><a href="teams.php">Team</a></li>
			<li style="font-size:16px;"><a href="others.php">Others</a></li>
		</ul>
		<a href="ara_edit_new.php" style="float:right;margin-top:-90px;margin-right:150px;font-size:18px; color:blue;"><b>Switch To Arabic</b></a> 		
		<div id="content" class="container_16 clearfix">
			<form method="post">
    			<table align="center">
    				<tr>
    					<td>
    						<input type="text" name="title" placeholder="<?php echo $fetched_row['title']; ?> " value="<?php echo $fetched_row['title']; ?>" required />
    					</td>
   					</tr>
					<tr>
    					<td>
    						<input type="text" name="description" placeholder="<?php echo $fetched_row['description']; ?> " value="<?php echo $fetched_row['description']; ?>" required />
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