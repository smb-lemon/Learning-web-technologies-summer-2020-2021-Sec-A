<?php
session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript" src="../script.js">  </script>
	<body>
	</body>

<?php
	
	;
	require_once('../model/empDB.php');
	$emps = getAllEmp();

?>

<body>

Search <input type="text"  name="name"  id='name' placeholder="Search Here" onkeypress="ajax()"/>
	<div id="main_content">
	
	
		
			<legend>Display Employee Information</legend>
			<table border="0" width="100%">
				
				
					<th>
                   Employer ID
					</th>
				<th>
                  Employer Name

					</th>
					<th>
                   Company Name
					</th>
					<th>
                   Contact No
					</th>
					<th>
                  User Name
					</th>
                <th>
                  Password
					</th>
                
                <th>
                   Action
					</th>
 

				<?php for($i=0; $i < count($emps); $i++){ ?>
				<tr align="center">
				<td align="center"><?=$emps[$i]['eid']?></td>
					<td ><?=$emps[$i]['ename']?></td>
					<td><?=$emps[$i]['cname']?></td>
					<td><?=$emps[$i]['cno']?></td>
					<td><?=$emps[$i]['uname']?></td>
					<td><input type="button" name="roomNo" value="<?=$emps[$i]['pass'] ?>" hidden > hidden</td>
					<td>
					<form method="GET" action="../view/editemp.php">
                           <input type="button" name="uname" value="<?= $emps[$i]['uname']?>" hidden >
				        <input  type="submit" name="sub" value="Edit Room"  style="color:#00ccff;"  placeholder="" >
						</form>
						<form  action="../controller/deleteEmp.php" method="GET">
                           <input type="text" name="uname" value="<?= $emps[$i]['uname']?>" hidden >
				        <input  type="submit" name="not" value="Delete Room" style="color:#00ccff;" >
						</form>
					</td>
				</tr>

				<?php } ?>
			</table>
	
	</div>

</body>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>
      
  
	</head>
</html>