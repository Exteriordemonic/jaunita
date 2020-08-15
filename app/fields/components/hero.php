<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');
  
$hero
    ->addText('hero');
    
return $hero;