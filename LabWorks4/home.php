<html>
	<head>
		<link rel="stylesheet" href="./css/styles.css"/>
		<link rel="stylesheet" href="./css/styles2.css"/>
	</head>
	<body>
		<?php include "banner.php";?>
		<?php include "menu.php" ?>
		<h1 id="top-header">BOOK COLLECTION</h1>
		<?php include "db_connection.php";?>
		<?php
            $sql2="SELECT * FROM `universities_tab`"; //Selects all books from books table
            $result2=$connect->query($sql2);
			$count=0;
			echo "<table><tr>";
            while($row2 = $result2->fetch_assoc())
            {
				echo "<td>";
                echo $row2['uni_name']." - ";
				echo $row2['edition']."<br>";
                echo "<img src='./img/".$row2['uni_img']."'/>";
				echo "<br>";
				echo "</td>";
				$count++;
				if($count == 4){
					echo "</tr><tr>";
					$count=0;
				}
            }
			echo "</tr></table>";
        ?>
	</body>
</html>

