<?php
	if(isset($_SESSION['u_id']) != session_id())
	{
		header('Location: login.php');
	}
?>