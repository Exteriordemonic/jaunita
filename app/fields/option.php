<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-page-settings');
  
$option_page
    ->addTab('Infobar', ['label' => 'Infobar', 'placement' => 'left'])
        ->addText('infobar_text', ['label' => 'Infobar text'])
    ->addTab('Header', ['label' => 'Header', 'placement' => 'left'])
        ->addImage('logo')
    ->addTab('Appointment', ['label' => 'Appointment', 'placement' => 'left'])
        ->addLink('appointment',['label'=>'Request an Appointment']);
    ;
        
return $option_page;