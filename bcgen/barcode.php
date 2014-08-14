<?php

require_once("BarcodeBase.php");
require_once("Code128.php");



$width = isset($_GET['width'])?$_GET['width']:200;
$height = isset($_GET['height'])?$_GET['height']:40;
$barcode = isset($_GET['barcode'])?$_GET['barcode']:"No Barcode";
$label = isset($_GET['label'])?$_GET['label']:"No Label";


$barcodeObj = new emberlabs\Barcode\Code128();
$barcodeObj->setData($barcode);
$barcodeObj->setLabel($label);
$barcodeObj->setDimensions(400, 60);
$barcodeObj->setFontSize(5);
$barcodeObj->enableHumanText(true);
$barcodeObj->display();
//$b64 = $barcodeObj->base64();


