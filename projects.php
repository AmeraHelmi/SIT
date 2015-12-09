<?php
	include_once 'dbconfig.php';
	// delete condition
	if(isset($_GET['delete_id']))
	{
 		$sql_query="DELETE FROM project WHERE id=".$_GET['delete_id'];
 		mysql_query($sql_query);
 		header("Location: $_SERVER[PHP_SELF]");
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
  					window.location.href='edit_project.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{
 				if(confirm('Sure to Delete ?'))
 				{
  					window.location.href='projects.php?delete_id='+id;
 				}
			}
		</script>
	</head>
	<body >
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
		<a href="ara_projects.php" style="float:right;margin-top:-90px;font-size:18px;margin-right:150px;color:blue; "><b>Switch To Arabic</b></a> 		
		<div id="content" class="container_16 clearfix">
			<div class="grid_16">
				<center>
					<span title="click here to add new project">
						<a href="add_project.php" style="font-size:20px;color:red;text-decoration:none; margin-top: 20px;"><b>Add new Project</b></a>
					</span>
				</center>	
				<br/>
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>URL</th>
					
							<th colspan="2" width="10%">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
 							$sql_query="SELECT * FROM project";
 							$result_set=mysql_query($sql_query);
 							while($row=mysql_fetch_row($result_set))
 							{
  						?>
       					 <tr>
       						<td><?php echo $row[1]; ?></td>
       						<td><?php echo $row[2]; ?></td>
       						<td><?php echo $row[3]; ?></td>
       						
        					<td align="center">
        						<a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="edit">Edit</a>
        					</td>
        					<td align="center">
        						<a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="delete">Delete</a>
        					</td>
        				</tr>
        					<?php
 								}
 							?>
					</tbody>
				</table>
			</div>
		</div>
		
	</body>
</html>