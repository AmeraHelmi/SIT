<?php

if (!isset($_SERVER['HTTP_REFERER'])){

header("Location: ara_AdminLogin.php");
}

else {

// The script

include_once 'dbconfig.php';
session_start();
if(!isset($_SESSION['can_access']) || (isset($_SESSION['can_access']) && $_SESSION['can_access'] !== true))
{

	header("Location: ara_AdminLogin.php");
}
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM offer WHERE id=".$_GET['delete_id'];
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
  					window.location.href='ara_edit.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{
 				if(confirm('Sure to Delete ?'))
 				{
  					window.location.href='ara_admin.php?delete_id='+id;
 				}
			}
		</script>
	</head>
	<body >
		<h1 id="head">
			<a href="ara.php" style="font-size:40px;color:red;text-decoration:none">SIT</a>
		</h1>
		
		<ul id="navigation">
			<li style="font-size:16px;"><span style="float:right;" class="active">العروض</span></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_services.php">الخدمات</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_news.php">الاخبار</a></li>
			
			<li style="font-size:16px;"><a style="float:right;" href="ara_projects.php">المشاريع</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_teams.php">الفريق</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_others.php">اخرى</a></li>
			<li style="font-size:16px;"><a href=""></a></li>
		</ul>
		<a href="admin.php" style="float:right;margin-top:-90px;font-size:18px; margin-right:150px;color:blue;"><b>الانتقال الى اللغة الانجليزية</b></a> 		
		<div id="content" class="container_16 clearfix">
			<div class="grid_16">
				<center>
					<span title="click here to add new offer">
						<a href="ara_add_offer.php" style="font-size:20px;color:red;text-decoration:none; margin-top: 20px;"><b>اضافة عرض جديد</b></a>
					</span>
				</center>	
				<br/>
				<table>
					<thead>
						<tr>
							<th>الاسم</th>
							<th>الوصف</th>
							<th colspan="2" width="10%">الضبط</th>
						</tr>
					</thead>
					<tbody>
						<?php
 							$sql_query="SELECT * FROM offer";
 							$result_set=mysql_query($sql_query);
 							while($row=mysql_fetch_row($result_set))
 							{
  						?>
       					<tr>
        					<td><?php echo $row[1]; ?></td>
        					<td><?php echo $row[2]; ?></td>
  							<td align="center">
  								<a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="edit">تعديل</a>
  							</td>
        					<td align="center">
        						<a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="delete">حذف</a>
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
<?php
}
?>