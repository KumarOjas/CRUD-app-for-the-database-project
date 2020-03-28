<?php

include_once 'db.php';
	
	/*if ($_REQUEST['delete']) {
		
		$d_id = $_REQUEST['delete'];
		$delete_query = mysqli_query($con, "DELETE FROM users WHERE id='$d_id'");
        
        if ($delete_query > 0) {
			echo "Product Deleted Successfully ...";
		}
		
	}