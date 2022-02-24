<?php

require('fpdf.php');
	
	$font = 'C:\xampp\htdocs\certificatecode\Poppins-Medium.ttf';
	$fonts = mb_convert_encoding($font, 'big5', 'utf-8');
	$font1 = 'C:\xampp\htdocs\certificatecode\AGENCYR.ttf';
	$fonts1 = mb_convert_encoding($font1, 'big5', 'utf-8');
	$image=imagecreatefromjpeg("certificate-bg.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$name="Minakshee Awari";
	imagettftext($image,150,0,1000,1400,$color,$fonts,$name);
	
	$file=time();
	$file_path="certificate/".$file.".jpg";
	$file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);


	$pdf=new FPDF();
	$pdf->AddPage('L');
	$pdf->Image($file_path,0,0,301,215);
	$pdf->Output($file_path_pdf,"F");

	

?>
