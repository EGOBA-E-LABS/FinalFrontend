<?php
		
		if (isset($_POST['submit'])) {
			$rat=$_POST['rating'];
			echo $rat;
		}
		else {
			echo "error";
		}

?>