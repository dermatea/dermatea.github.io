<!DOCTYPE html>
<html lang="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<style>
			.message,.page{position:relative}body,html{font-family:Arial,Helvetica,sans-serif}body,h2,h3,html{margin:0;padding:0}.page{width:100%;background-color:#fff;min-height:374px}.message{width:884px;border:6px solid #fcc92f;text-align:center;padding:36px 32px 30px;margin:68px auto 20px;box-sizing:border-box}h2{color:#fa501e;text-transform:uppercase;font-weight:900;font-size:25px;line-height:58px}h3{font-weight:400;font-size:19px;line-height:36px}input.btn-back{width:200px;line-height:35px;color:#000;padding:5px 10px;background-color:#f4f4f4;-moz-box-shadow:0 4px 0 #fa501e;-webkit-box-shadow:0 4px 0 #fa501e;box-shadow:0 4px 0 #fa501e;border:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s;transition:all linear .3s;outline:0;margin-top:34px}input.btn-back:hover{background-color:#dedede;-webkit-transition:none;-moz-transition:none;-ms-transition:none;-o-transition:none;transition:none}input.btn-back:active{position:relative;top:3px;-moz-box-shadow:0 1px 0 #fa501e;-webkit-box-shadow:0 1px 0 #fa501e;box-shadow:0 1px 0 #fa501e}@media screen and (max-width:920px){.message{width:750px}h2{font-size:20px}}@media screen and (max-width:767px){body,html{min-width:320px}.message{width:auto;margin-left:15px;margin-right:15px;margin-top:25px}h2{line-height:40px}}
		</style>
	</head>
	<body>
		<div class="page">
			<div class="message">
			<H2> SALAMAT! </h2>
			<h2> TAGUMPAY NA TINANGGAP NAMIN ANG IYONG ORDER <strong id = "lead-id"> </strong> </h2>
			<h3> Makikipag-ugnay kami sa iyo sa lalong madaling panahon! </h3>
			<input type = "button" class = "btn-back" value = "Return to Website" onclick = "history.back ()">
			</div>
		</div> 
		<img height="1" width="1" src="https://www.facebook.com/tr?id=<?php echo $_GET['fb'];?>&ev=Lead&noscript=1"/>
	</body>
</html>