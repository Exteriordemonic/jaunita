<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$services = new FieldsBuilder('services');
  
$services
    ->addSelect('bg_color',  ['label'=>'Background color', 'wrapper'=>['width'=>'50%']])
        ->addChoice('light')
        ->addChoice('gray')
        ->setDefaultValue('light');
return $services;