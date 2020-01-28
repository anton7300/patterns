<?php

function __autoload($className)
{
  $className = strtolower(str_replace('..', '', $className));
  require "$className.php";
}

$factory = new PageFactory;
$pdf = $factory->getPage('pdf');
$pdf->createPage();
