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
        ->addLink('appointment',['label'=>'Request an Appointment'])
    ->addTab('Services', ['label' => 'Services', 'placement' => 'left'])
        ->addText('services_title', ['label'=>'Title'])
        ->addTextarea('services_text', ['label'=>'Text'])
        ->addRepeater('services', ['label'=>'Services'])
            ->addImage('icon', ['label'=>'Icon'])
            ->addGroup('content', ['label'=>''])
                ->addText('title', ['label'=>'Title'])
                ->addTextarea('text', ['label'=>'Text'])
    ;
        
return $option_page;