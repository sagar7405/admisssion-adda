<html>
	<head>
		<style>
			html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}


		</style>
	</head>
	<body>
		
	</body>
<?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
        }
               

                $cn = mysqli_connect("localhost", "root", "", "db_admission");
				$sql = "select * from stu22";
				
				$table = mysqli_query($cn, $sql);

				print '<div class="a">';
				print '<button><a href="form.html">create profile</button>';
				print '<div class="container">';
				print '<table>';
				print '<tr></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					
					print '<tr>';
					print'<th>box</th>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["name"]).'</td>';
					print '<td>'.htmlentities($row["phone"]).'</td>';
					print '<td>'.htmlentities($row["Email"]).'</td>';
					print '<td>'.htmlentities($row["address"]).'</td>';
					print '<td>'.htmlentities($row["City"]).'</td>';
					print '<td>'.htmlentities($row["Pin_Code"]).'</td>';
					print '<td> 
					<a class= "action-e" href= "student.php='.$row["id"].'"><i class="fa fa-wrench" title="Update">ss</i></a>
					';
					print '</tr>';
				}
	
				print '</table>';
				print '</div>';
				print '</div>';


    function delete()
        {
            global $cn;
            $sql = "delete from student where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
   </body>  
</html>
