<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Star Rating</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<?php  
	$mysqli = new mysqli('localhost','root','','admin_master');
    $post_id = '1'; // yor page ID or Article ID
?>

<!-- <div class="container">
	<div class="rate">
		<div id="1" class="btn-1 rate-btn"></div>
        <div id="2" class="btn-2 rate-btn"></div>
        <div id="3" class="btn-3 rate-btn"></div>
        <div id="4" class="btn-4 rate-btn"></div>
        <div id="5" class="btn-5 rate-btn"></div>
	</div>
<br>
    <div class="box-result">
    	<?php
        	$query = mysqli_query($mysqli,"SELECT * FROM rating_master"); 
            	while($data = mysqli_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        ?> -->
    <div class="result-container">
    	<div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="font-size:16px;">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of <strong><?php echo $rate_times; ?></strong> Reviews</p>

</body>
</html>