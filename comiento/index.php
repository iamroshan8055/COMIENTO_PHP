<!DOCTYPE html>

<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "admin_master";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
define("base_url", "http://localhost/project/comiento/theme/");
?>

<html lang="en">
<head>
<title>Comiento Food Dish</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Royal Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="main.css">

<!-- font -->
<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->

    <!-- Custom fonts for this template-->
    <link href="<?=base_url;?>admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?=base_url;?>admin_theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url;?>admin_theme/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<style type="text/css">
	
	#f:hover {
		color: white;
		background: rgb(60,90,153);
		width: 30px;
 		height: 30px;
   		font-size: 14px;
  		line-height: 30px;
	}

	#t:hover {
		color: white;
		background: rgb(29, 161, 242);
		width: 30px;
 		height: 30px;
   		font-size: 14px;
  		line-height: 30px;
	}

	#i:hover {
  border-radius: 5px;
  display: inline-block;
  width: 34px;
  height: 34px;
  text-align: center;
  color: #fff;
  font-size: 34px;
  line-height: 34px;
  vertical-align: middle;
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  box-shadow: 0px 3px 10px rgba(0,0,0,.25);
}

	#g:hover {
		color: rgb(221,75,57);
	}

	#e:hover {
		color: rgb(255,165,0);
	}
	#y:hover {
		color: rgb(255,0,0);
		border-radius: 5px;
		background: white;
		width: 32px;
 		height: 32px;
   		font-size: 32px;
  		line-height: 32px;
	}
	/*#pum:hover {
		display: inline-block;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: none;
		z-index: auto;
		width: auto;
		height: auto;
		position: static;
		cursor: default;
		opacity: 1;
		/ margin: 0;
		padding: 10px; /
		overflow: visible;
		border: none;
		/ -webkit-border-radius: 0;
		border-radius: 0;
		font: normal 48px/normal "Warnes", Helvetica, sans-serif;
		color: rgb(252,95,15); /
		text-decoration: normal;
		text-align: center;
		-o-text-overflow: clip;
		text-overflow: clip;
		white-space: pre;
		background: none;
		-webkit-box-shadow: none;
		box-shadow: none;
		text-shadow: 0 0 10px rgb(255,254,214) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;
		-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-webkit-transform: none;
		transform: none;
		-webkit-transform-origin: 50% 50% 0;
		transform-origin: 50% 50% 0;
	}*/

	#com:hover {
		display: inline-block;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: none;
		z-index: auto;
		width: auto;
		height: auto;
		position: static;
		cursor: default;
		opacity: 1;
		/*margin: 0;
		padding: 10px;*/
		overflow: visible;
		border: none;
		/*-webkit-border-radius: 0;
		border-radius: 0;
		font: normal 48px/normal "Warnes", Helvetica, sans-serif;
		color: rgb(252,95,15);*/
		text-decoration: normal;
		text-align: center;
		-o-text-overflow: clip;
		text-overflow: clip;
		white-space: pre;
		background: none;
		-webkit-box-shadow: none;
		box-shadow: none;
		text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;
		-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		-webkit-transform: none;
		transform: none;
		-webkit-transform-origin: 50% 50% 0;
		transform-origin: 50% 50% 0;
	}
	.blinking{
		animation:blinkingText 2s infinite;
    animation:blinkingText 0.
     infinite;
	}
	@keyframes blinkingText{
	    0%{     color: #000;    }
	    45%{    color: transparent; }
	    22%{     color: #716733;    }
	    24%{    color: transparent; }
	    26%{     color: #716733;    }
	    28%{    color: transparent; }
	    30%{     color: #807632;    }
	    32%{    color: transparent; }
	    34%{     color: #716733;    }
	    36%{    color: transparent; }
	    38%{     color: #807632;    }
	    40%{    color: transparent; }
	    42%{     color: #716733;    }
	    44%{    color: transparent; }
	    48%{     color: #807632;    }
	    50%{     color: #716733;    }
	    52%{    color: transparent; }
	    54%{     color: #F0E29A;    }
	    80%{    color:white;  }
	    97%{   text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
	    100%{   text-shadow: 0 0 10px rgb(255,254,214) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
	}
	/*  .button1 {
	  background-color: #004A7F;
	  -webkit-border-radius: 10px;
	  border-radius: 10px;
	  border: none;
	  color: #FFFFFF;
	  cursor: pointer;
	  display: inline-block;
	  font-family: Arial;
	  font-size: 20px;
	  padding: 5px 10px;
	  text-align: center;
	  text-decoration: none;
	  -webkit-animation: glowing 1500ms infinite;
	  -moz-animation: glowing 1500ms infinite;
	  -o-animation: glowing 1500ms infinite;
	  animation: glowing 1500ms infinite;
	}
	@-webkit-keyframes glowing {
	  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
	  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
	  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
	}

	@-moz-keyframes glowing {
	  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
	  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
	  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
	}

	@-o-keyframes glowing {
	  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
	  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
	  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
	}

	@keyframes glowing {
	  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
	  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
	  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
	}  */


	/*-----FOOTER ICONS CSS START-----*/
	
	#ul
	{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		margin: 0;
		padding: 0;
		display: flex;
	}
	#ul #li
	{
		list-style: none;
		margin: 0 20px;
	}
	#ul #li a .fab
	{
		font-size: 20px;
		color: #262626;
		line-height: 40px;
		transition: .5s;
	}
	#ul #li #a .fas
	{
		font-size: 20px;
		color: #262626;
		line-height: 40px;
		transition: .5s;
	}
	#ul #li #a
	{
		position: relative;
		display: block;
		width: 40px;
		height: 40px;
		background: #fff;
		text-align: center;
		transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(0,0);
		transition: .5s;
		box-shadow: -20px 20px 10px rgba(0,0,0,.5);
	}
	#ul #li #a:before
	{
		content: '';
		position: absolute;
		top: 5px;
		left: -10px;
		height: 100%;
		width: 10px;
		background: #b1b1b1;
		transition: .5s;
		transform: rotate(0deg) skewY(-45deg);
	}
	#ul #li #a:after
	{
		content: '';
		position: absolute;
		bottom: -10px;
		left: -5px;
		height: 10px;
		width: 100%;
		background: #b1b1b1;
		transition: .5s;
		transform: rotate(0deg) skewX(-45deg);
	}
	#ul #li #a:hover
	{
		transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px,-20px);
		box-shadow: -50px 50px 50px rgba(0,0,0,.5);
	}

	/*------------Color Icons-------------*/

	#ul #li #a:hover .fab
	{
		color: #fff;
	}
	#ul #li #a:hover .fas
	{
		color: #fff;
	}

	/*FACEBOOK*/
	#ul #li:hover:nth-child(1) #a
	{
		background: #3b5999;
	}
	#ul #li:hover:nth-child(1) #a:before
	{
		background: #2e4a86;
	}
	#ul #li:hover:nth-child(1) #a:after
	{
		background: #4a69ad;
	}

	/*TWITTER*/
	#ul #li:hover:nth-child(2) #a
	{
		background: #55acee;
	}
	#ul #li:hover:nth-child(2) #a:before
	{
		background: #4184b7;
	}
	#ul #li:hover:nth-child(2) #a:after
	{
		background: #4d9fde;
	}

	/*INSTAGRAM*/
	#ul #li:hover:nth-child(3) #a
	{
		background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
	}
	#ul #li:hover:nth-child(3) #a:before
	{
		background: radial-gradient(circle at 30% 107%, #dcd47f 0%, #dcd47f 5%, #e24f40 45%,#c32191 60%,#224bc3 90%);
	}
	#ul #li:hover:nth-child(3) #a:after
	{
		background: radial-gradient(circle at 30% -20%, #fff8ad -10%, #fff8ad 5%, #ff6859 60%,#ff6859 75%,#f33cba 90%);
	}

	/*GOOGLE PLUS*/
	#ul #li:hover:nth-child(4) #a
	{
		background: #dd4b39;
	}
	#ul #li:hover:nth-child(4) #a:before
	{
		background: #c13929;
	}
	#ul #li:hover:nth-child(4) #a:after
	{
		background: #e45c4b;
	}

	/*YOUTUBE*/
	#ul #li:hover:nth-child(5) #a
	{
		background: #ff0000;
	}
	#ul #li:hover:nth-child(5) #a:before
	{
		background: #ce0000;
	}
	#ul #li:hover:nth-child(5) #a:after
	{
		background: #ff3131;
	}

	/*ENVELOPE*/
	#ul #li:hover:nth-child(6) #a
	{
		background: #ffa500;
	}
	#ul #li:hover:nth-child(6) #a:before
	{
		background: #e09000;
	}
	#ul #li:hover:nth-child(6) #a:after
	{
		background: #ffba3b;
	}
	/*-----Hover Light-----*/
	#ul #li:hover 
	{
		text-shadow: 0 0 5px rgb(128,128,128) , 0 0 10px rgb(255,255,255) , 0 0 15px rgb(255,255,255) , 0 0 20px rgb(255,255,255) , 0 0 35px rgb(255,238,128) , 0 0 40px rgb(255,214,45) , 0 0 50px rgb(255,205,0) ;

	}

	/*-----FOOTER ICONS CSS START-----*/

	/*search box css start here*/

.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:50px;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:50px;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
.s{
        top: 80%;
        left: 25%;
        transform: translate(13%,-30%);
      }

      /*Search Button color Start*/

     .btn-cool-blues {
	    background: #2175b0; 
	    background: -webkit-linear-gradient(to right, #6dd5ed, #2175b0); 
	    background: linear-gradient(to right, #6dd5ed, #2175b0);
	    color: #fff;
	    border: 3px solid #eee;
	    transition-duration: 1000ms;
	    transition-property: background, transform;
	}
	.btn-cool-blues:hover {
	    background: #6dd5ed; 
	    background: -webkit-linear-gradient(to right, #2175b0, #6dd5ed); 
	    background: linear-gradient(to right, #2175b0, #6dd5ed);
	    color: #fff;
	    border: 3px solid #eee;
	}

	.btn-orange-moon {
	    background: #fc4a1a; 
	    background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a); 
	    background: linear-gradient(to right, #f7b733, #fc4a1a);
	    color: #fff;
	    border: 3px solid #eee;
	    transition-duration: 1000ms;
	    transition-property: background, transform;
	}
	.btn-orange-moon:hover {
	    background: #f7b733; 
	    background: -webkit-linear-gradient(to right, #fc4a1a, #f7b733); 
	    background: linear-gradient(to right, #fc4a1a, #f7b733);
	    color: #fff;
	    border: 3px solid #eee;
	}

	/*Search Button color End*/

	.card-img{
		padding-top: 10%;
		padding-bottom: 10%;
		border-radius: 10px;
	}
	.card-body{
		padding-top: 15px;
	}

	.card {

		padding-left: 10%;
	}
.card-title {
    margin-bottom: .75rem;
}
.h5, h5 {
    font-size: 1.25rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: .5rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
h5 {
    display: block;
    font-size: 0.83em;
    margin-block-start: 1.67em;
    margin-block-end: 1.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.rating-md {
    font-size: 25px;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
table {
    border-collapse: collapse;
}
user agent stylesheet
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
.glyphicon {
    position: relative;
    top: 1px;
    font-family: 'Glyphicons Halflings';
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon, a.asc:after, a.desc:after {
    display: inline-block;
    font-style: normal;
    font-weight: 400;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
i, cite, em, var, address, dfn {
    font-style: italic;
}
.rating-container .star {
    display: inline-block;
    margin: 0 2px;
    text-align: center;
}
.rating-container .filled-stars {
    position: absolute;
    left: 0;
    top: 0;
    margin: auto;
    color: #fde16d;
    white-space: nowrap;
    overflow: hidden;
    -webkit-text-stroke: 1px #777;
    text-shadow: 1px 1px #999;
}
.rating-container.is-display-only .rating-input, .rating-container.is-display-only .rating-stars {
    cursor: default;
}
.rating-container .rating-stars {
    position: relative;
    cursor: pointer;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
}
.rating-md {
    font-size: 27px;
}
table {
    border-collapse: collapse;
}
user agent stylesheet
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
	/*Card View Button Gradiant Color*/
	.btn-orange-moon.o:hover {
	    background: #fc4a1a; 
	    background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a); 
	    background: linear-gradient(to right, #f7b733, #fc4a1a);
	    color: #fff;
	    border-radius: 3px;
	    border: 3px solid #eee;
	    transition-duration: 1000ms;
	    transition-property: background, transform;
	}
	.btn-orange-moon.o {
	    background: #ff7b00; 
	    border-radius: 3px;
	    color: white;
	}
	/*Card View Button*/
	.view{
		padding-right: 20px;
	}
	/*Star Rting CSS Start*/
	.result-container{
	width: 82px; height: 18px;
	position: relative;
	background-color: #ccc;
	border: #ccc 1px solid;
	}
	.rate-stars{
		width: 82px; height: 18px;
		background: url(rate-stars.png) no-repeat;
		position: absolute;
	}
	.rate-bg{
		height: 18px;
		background-color: #ffbe10;
		position: absolute;
	}
	/*Star Rting CSS End*/

	.up{
		-webkit-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
		-moz-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
		box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
		border-radius: 50%;
	}


</style>


</head>
<body>
		<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a id="com" class="blinking" href="index.php">Comiento</a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#services" class="scroll">Features</a></li>
									<li><a href="#specials" class="scroll">Plans</a></li>
									<li><a href="#team" class="scroll">Team</a></li>


									<?php
									if (!isset($_SESSION['session_login'])) {
										?>
									<li><a href="reg-demo.php" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Register</a></li>
									<li><a href="login-demo.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
									<?php } ?>


									<li>
										<?php
										if (isset($_SESSION['session_login'])) { 
											$login="";
								        	if(!empty($_POST["email"])){
								        		$login .= "'".$_POST["email"]."'";
								        	}

								        	//echo date('Y-m-d', strtotime("+30 days"));

										?>
										<nav class="navbar navbar-expand static-top">
											<ul class="navbar-nav nav ml-auto ml-md-0">
												<li class="nav-item dropdown no-arrow">
												<div class="btn-group">
										          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

										            <?php echo "<img value = '".$_SESSION['session_login']['email']."'' src='./images/".$_SESSION['session_login']["image"]."' class='up' width='50px' height='50px'>";
 													?>
										          </a>
										          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
										          	<p class="dropdown-item" href="#">
										          		<b>&nbsp&nbsp<?=$_SESSION['session_login']["email"]?>&nbsp&nbsp</b>
										          	</p>
										            &nbsp&nbsp<a class="dropdown-item" href="user-profile.php">Profile</a><br>
										            &nbsp&nbsp<a class="dropdown-item" href="#">Activity Log</a>
										            <div class="dropdown-divider"></div>
										            <!--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>-->
										            &nbsp&nbsp<a class="dropdown-item" href="logout.php" >Logout</a>
										        	</div>
										          </div>
										      	
										        </li>
										    </ul>
										</nav>
										<?php } ?>
									</li>


								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-text">
						<h4><img src="images/logo-c.png" alt="" width="175" height="175"></span></h4>

						

        <form action="aftersearch.php" method="GET" novalidate="novalidate">
            <div class="row s">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <?php

								$mysqli = new mysqli('localhost','root','','admin_master');                
					 			$resultSet = $mysqli->query("SELECT * FROM city_master");

				 			?>

				 			<tr>

								<div class="form-group">
									<td>
									<select name="cityname" class="custom-select mb-3 form-control search-slt">
								      
										<?php 

										while ($rows = $resultSet->fetch_assoc()) 
										{
											echo "<option value = '".$rows['cityname']."'>".$rows['cityname']."</option>";
										}
										
										?>
					
								    </select>
								    <td>
								</div>

				 			</tr>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="category">
                                <option value="">--Select Category--</option>
						        <option value="veg">veg</option>
						        <option value="non-veg">non-veg</option>
						        <option value="veg/non-veg">veg/non-veg</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="col btn btn-orange-moon wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

						<h2>Your One Stop for Hunger!!</h2>
						<p>Pay once and eat with any of our partnered restaurants.</p>
						<div class="w3-button">
							<ul>
								<li><a href="#specials" class="scroll button1">View More</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Royal Food</h4>
						<h5>24 Sept 2017</h5>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- welcome -->
	<div class="welcome" id="about">
		<div class="container" id="about">
			<div class="col-md-6 agileits_welcome_grid_left">
				<h3 id="pum">About Us!</h3>
				<h5>Comiento is a food ordering system which offers coupons that you can use in our partnered restaurnats.</h5>
				<p>We found out that many peoples were facing food problems.
					So decided to develop an food ordereing coupon system that
					users can use in many our partnered restaurants. Users can 
					use food tokens that are provided to them based upon there
					uses.They can also share there passes if they are not using
					it. The receivier must also be registered with our system.
				</p>
			</div>
			<div class="col-md-6 agileits_welcome_grid_right">
				<img src="images/2.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- markets -->
	<div class="markets" id="services">
		<div class="container">
			<div class="wthree-heading">
				<h3 id="pum">Our Services</h3>
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Suspendisse</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-glass" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Aliquam</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Consectetur</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Bibendum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Vestibulum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-coffee" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Fermentum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- gallery -->
	
		<div class="container" id="specials">
					
			<div id="generic_price_table">   
				<section>
			        <div class="container">
			            <!--BLOCK ROW START-->
			            <div class="row">


<form action="receipt.php" method="GET">
<?php  

	$sql = "SELECT * FROM `plan_master`";
          $retval = $conn->query($sql);
           // while($row = $retval->fetch_assoc())
            while($row = $retval->fetch_assoc()) {
          
	 ?>

			                <div class="col-md-4">
			                	<!--PRICE CONTENT START-->
			                    <div class="generic_content clearfix">
			                        <!--HEAD PRICE DETAIL START-->
			                        <div class="generic_head_price clearfix">
			                            <!--HEAD CONTENT START-->
			                            <div class="generic_head_content clearfix">
			                            	<!--HEAD START-->
			                                <div class="head_bg"></div>
			                                <div class="head">
			                                    <span><?=$row["type"]?></span>
			                                </div>
			                                <!--//HEAD END-->  
			                            </div>
			                            <!--//HEAD CONTENT END-->
			                            <!--PRICE START-->
			                            <div class="generic_price_tag clearfix">	
			                                <span class="price">
			                                    <span class="sign"><i class="fas fa-rupee-sign"></i></span>
			                                    <span class="currency"><?=$row["price"]?></span>
			                                    <span class="cent"><?=$row["months"]?></span>
			                                    <span class="month">/MON</span>
			                                </span>
			                            </div>
			                            <!--//PRICE END-->
			                        </div>                            
			                        <!--//HEAD PRICE DETAIL END-->
			                        <!--FEATURE LIST START-->
			                        <div class="generic_feature_list">
			                        	<ul>
			                            	<li><span><?=$row["days"]?></span> Days</li>
			                                <li><span><?=$row["tokens"]?></span> Tokens</li>
			                                <li><span>24/7</span> Support</li>
			                            </ul>
			                        </div>
			                        <!--//FEATURE LIST END-->
			                        <!--BUTTON START-->
			                        <div class="generic_price_btn clearfix">
			                        	<a class="" href="receipt.php?id=<?=$row["id"]?>">Book</a>
			                        </div>
			                        <!--//BUTTON END-->
			                    </div>
			                    <!--//PRICE CONTENT END-->
			                </div>


			            <?php } ?>
			            
			                </form>
			            </div>	
			            <!--//BLOCK ROW END-->
			        </div>
			    </section> 
			</div>
				<!-- plans end -->
		</div>
	</div>

	<!-- //gallery -->

	
<?php
        	$search="";
        	if(!empty($_GET["cityname"])){
        		$search .= " and city = '".$_GET["cityname"]."'";
        	}
        	if(!empty($_GET["category"])){
        		$search .= " and category = '".$_GET["category"]."'";
        	}
        	//echo "SELECT * FROM restaurant_master WHERE 1=1 ".$search; die();
        	$mysqli = new mysqli('localhost','root','','admin_master');
			$result = mysqli_query($mysqli,"SELECT * FROM restaurant_master WHERE 1=1 ".$search);
			while ($rows = $result->fetch_assoc()) 
						{
							//print_r($rows);
							//echo "<a href='./theme/restaurant master/upload/".$rows['image']."'><img value = '".$rows['city']."''".$rows['category']."'' src='./theme/restaurant master/upload/".$rows['image']."' class='card-img' width='125px' height='175px'></a>";
							//echo "<h2 value = '".$rows['city']."''".$rows['category']."''>".$rows['restaurantname']."</h2>";
		        				//echo "<object align='right' class='view'><a style=\"text-decoration:none;\" class=\"btn btn-orange-moon\" href=\"index3.php\">View</a></object>";
					?>



<!-- Restaurant View Cards Start -->

<div class="card mb-12 bj">
  <div class="row no-gutters">
    <div class="col-md-2">

        	<?php echo "<a href='./theme/restaurant master/upload/".$rows["image"]."'><img value = '".$rows['city']."''".$rows['category']."'' src='./theme/restaurant master/upload/".$rows["image"]."' class='card-img' width='125px' height='175px'></a>";
 ?>

    </div>
    <div class="col-md-8">
      <div class="card-body">
      	
        <h2 class="card-title">
        	<?=$rows["restaurantname"]?>
        </h2>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
        </p>
       <?php include ("./Star-Rating/index.php"); ?>
      </div>
    </div>
<div class="col-md-2">
	<a href="index3.php?id=<?=$rows["id"]?>" style="margin: 45%;" class="btn btn-orange-moon o">View</a>
</div>
  </div>
</div>


<?php	}
			?>
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="wthree-heading">
				<h3 id="pum">Our Team</h3>
			</div>
			<div class="agileinfo-team-grids">
				<div class="col-md-3 wthree-team-grid">
					<img src="images/t1.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Mary Jane</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/t2.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Peter Parke</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/t3.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Jennifer Watson</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/t4.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Steven Wilson</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- testimonial -->
	<div class="testimonial jarallax">
		<div class="container">
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus eros a neque. Integer ipsum sem, consectetur a mollis ac, cursus eu ipsum.</p>
											<h5>John Smith <span>- Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
											<h5>Divide Rule <span>- CEO</span></h5>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="wthree-heading">
				<h3 id="pum">Subscribe with Us</h3>
			</div>
			<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="email" placeholder="Email" name="email" required="">
					<button class="btn1"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="wthree-heading">
				<h3 id="pum">Contact</h3>
			</div>
			<div class="agile-contact-grids">
				<div class="col-md-6 agile-contact-left">
					<div class="address-grid">
						<h4>Our Address</h4>
						<ul class="w3_address">
							<li><i class="fas fa-map-marker-alt" aria-hidden="true"></i> 50, Vallabh Kunj  <span>Ahmedabad City.</span></li>
							<li><i class="far fa-envelope" aria-hidden="true"></i><a href="mailto:roshanbosspatel@gmail.com"> roshanbosspatel@gmail.com</a></li>
							<li><i class="fas fa-mobile-alt" aria-hidden="true"></i><a href="tel:+917096373795"> +91 709 637 3795</a></li>
						</ul>
					</div>
					<div class="contact-form">
						<h4>Contact Form</h4>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="Subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="Message" required=""></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-6 agile-contact-right">
					<div class="agileits-map">
						<h4>Our Location</h4>
					</div>
					<div class="map-grid">
						<iframe src="https://maps.google.com/maps?q=comiento&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->

<?php include("footer.php");  ?>