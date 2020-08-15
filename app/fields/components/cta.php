<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cta = new FieldsBuilder('cta');
  
$cta
    ->addText('cta');
    
return $cta;