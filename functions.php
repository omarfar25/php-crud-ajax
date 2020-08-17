<?php
	// function read_all_data($db){
	// 	// $username = $_SESSION['username'];
	// 	foreach ($db->query("SELECT * FROM contact ") as $rows)
	// 		return $rows;
	// }
	?>

	<?php
	function read_all_data($db){
				$sql = "SELECT * FROM contact" ;

				$stmt = $db->prepare($sql);
				$stmt->execute();

				$rows =$stmt->fetchAll();
				return $rows;
			}
				 ?>