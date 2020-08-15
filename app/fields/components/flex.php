<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');
  
$flex
    ->addText('flex');
    
return $flex;