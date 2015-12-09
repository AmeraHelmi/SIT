<?php
	include_once 'dbconfig.php';
	// delete condition
	if(isset($_GET['delete_id']))
	{
 		$sql_query="DELETE FROM team WHERE id=".$_GET['delete_id'];
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
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
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
  					window.location.href='ara_edit_team.php?edit_id='+id;
 				}
			}
			function delete_id(id)
			{
 				if(confirm('Sure to Delete ?'))
 				{
  					window.location.href='ara_teams.php?delete_id='+id;
 				}
			}
		</script>
	</head>
	<body >
		<h1 id="head">
			<a href="ara.php" style="font-size:40px;color:red;text-decoration:none">SIT</a>
		</h1>
		
		<ul id="navigation">
			<li style="font-size:16px;"><a style="float:right;" href="ara_admin.php">العروض</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_services.php">الخدمات</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_news.php">الاخبار</a></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_projects.php">المشاريع</a></li>
			<li style="font-size:16px;"><span style="float:right;" class="active">الفريق</span></li>
			<li style="font-size:16px;"><a style="float:right;" href="ara_others.php">اخرى</a></li>
			<li style="font-size:16px;"><a href=""></a></li>
		</ul>
		<a href="teams.php" style="float:right;margin-top:-90px;margin-right:150px;font-size:18px;color:blue; "><b>الانتقال الى اللغة الانجليزية</b></a> 		

		<div id="content" class="container_16 clearfix">
			<div class="grid_16">
				<center>
					<span title="click here to add new member">
						<a href="ara_add_team.php" style="font-size:20px;color:red;text-decoration:none; margin-top: 20px;"><b>اضافة عضو جديد</b></a>
					</span>
				</center>	
				<br/>
				<table>
					<thead>
						<tr>
							<th>الاسم</th>
							<th>الوظيفة</th>
							<th>الفيس بوك</th>
							<th>التويتر</th>
							<th colspan="2" width="10%">الضبط</th>
						</tr>
					</thead>
					<tbody>
						<?php
 							$sql_query="SELECT * FROM team";
 							$result_set=mysql_query($sql_query);
 							while($row=mysql_fetch_row($result_set))
 							{
  						?>
       					<tr>
        					<td><?php echo $row[1]; ?></td>
        					<td><?php echo $row[2]; ?></td>
        					<td><?php echo $row[4];?></td>
							<td><?php echo $row[5];?></td>        						
  							<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="edit">تعديل</a></td>
        					<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="delete">حذف</a></td>
        				</tr>
       					<?php
 							}
 						?>
 					</tbody>
				</table>
			</div>
		</div>
		
	</body>
</html>s