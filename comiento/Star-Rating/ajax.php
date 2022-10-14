<?php
$mysqli = new mysqli('localhost','root','','admin_master');

    if($_POST['act'] == 'rate'){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

    	$query = mysqli_query("SELECT * FROM rating_master where ip= '$ip'  "); 
    	while($data = mysqli_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysqli_query("INSERT INTO rating_master (id_post, ip, rate)VALUES('$thepost', '$ip', '$therate')");
    	}else{
    		mysqli_query("UPDATE rating_master SET rate= '$therate' WHERE ip = '$ip'");
    	}
    } 
?>