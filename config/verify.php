<?php
	session_start();
	header('content-type:image/png');
	$image=imagecreatetruecolor(100, 40);
	$bgcolor=imagecolorallocate($image, 255, 255, 255);
	imagefill($image,0,0, $bgcolor);
	$captch_code='';
	for ($i=0; $i < 4; $i++) { 
		$fontsize=14;
		$fontcolor=imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
		$data="abcdefghijkmpqrstuvwxy3456789";
		$fontcontent=substr($data,rand(0,strlen($data)-1),1);
		$captch_code.=$fontcontent;
		$x=($i*25)+rand(5,10);
		$y=rand(10,15);
		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
	}
	$_SESSION['verify']=$captch_code;
	for ($i=0; $i < 200; $i++) { 
		$pointcolor=imagecolorallocate($image, rand(150,250), rand(150,250), rand(150,250));
		imagesetpixel($image, rand(1,100), rand(1,39), $pointcolor);
	}
	imagepng($image);
	imagedestroy($image);

