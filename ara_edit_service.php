<?php
	include_once 'dbconfig.php';
	if(isset($_GET['edit_id']))
	{	
 		$sql_query="SELECT * FROM service WHERE id=".$_GET['edit_id'];
 		$result_set=mysql_query($sql_query);
 		$fetched_row=mysql_fetch_array($result_set);
	}
	if(isset($_POST['btn-update']))
	{
 		// variables for input data
 		$name = $_POST['name'];
 		$description = $_POST['description'];
 		$type = $_POST['type'];
		// sql query for update data into database
 		$sql_query = "UPDATE service SET name='$name',description='$description',type='$type' WHERE id=".$_GET['edit_id'];
		// sql query execution function
 	if(mysql_query($sql_query))
 	{
?>
  	<script type="text/javascript">
 		alert('Data Are Updated Successfully');
  		window.location.href='ara_services.php';
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
 		header("Location: ara_services.php");
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
  					window.location.href='ara_edit_service.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{	
 				if(confirm('Sure to Delete ?'))
 				{
  					window.location.href='ara_services.php?delete_id='+id;
 				}
			}
		</script>
	</head>
	<body>
		<h1 id="head">
			<a href="ara.php" style="font-size:40px;color:red;text-decoration:none">SIT</a>
		</h1>
		
		<ul id="navigation">
			<li style="font-size:16px;"><a style="float:right;" href="ara_admin.php">العروض</a></li>
			<li style="font-size:16px;"><span style="float:right;" class="active">الخدمات</span></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_news.php">لااخبار</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_projects.php">المشاريع</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_teams.php">الفريق</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_others.php">اخرى</a></li>
			<li style="font-size:16px;"><a href=""></a></li>
		</ul>
		<a href="edit_service.php" style="float:right;margin-top:-90px;margin-right:150px;font-size:18px;color:blue; "><b>الانتقال الى اللغة الانجليزية</b></a> 		
		<div id="content" class="container_16 clearfix">
			<form method="post">
    			<table align="center">
    				<tr>
    					<td>
    						<input type="text" name="name" style="direction: rtl; text-align: right;" placeholder="<?php echo $fetched_row['name']; ?>" value="<?php echo $fetched_row['name']; ?>" required />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="text" name="description" style="direction: rtl; text-align: right;" placeholder="<?php echo $fetched_row['description']; ?>" value="<?php echo $fetched_row['description']; ?>" required />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="text" name="type" style="direction: rtl; text-align: right;" placeholder="<?php echo $fetched_row['type']; ?>" value="<?php echo $fetched_row['type']; ?>" required />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<button type="submit" name="btn-update"><strong>تعديل</strong></button>
    						<button type="submit" name="btn-cancel"><strong>الغاء</strong></button>
    					</td>
    				</tr>
    			</table>
    		</form>
		</div>
		
	</body>
</html>