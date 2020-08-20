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
    ->addTab('Testimonials', ['label' => 'Testimonials', 'placement' => 'left'])
        ->addText('testimonials_title', ['label'=>'Title'])
        ->addRepeater('testimonials', ['label'=>'Services'])
            ->addGroup('content', ['label'=>''])
                ->addText('title', ['label'=>'Title'])
                ->addTextarea('text', ['label'=>'Text'])
                ->addText('name', ['label'=>'Name'])
            ->endGroup()
        ->endRepeater()
    ->addTab('Offert', ['label' => 'Offert', 'placement' => 'left']) 
        ->addText('offert_title', ['label'=>'Title'])
        ->addTextarea('offert_text', ['label'=>'Text'])
        ->addRepeater('offert_list', ['label'=>'List'])
            ->addText('text', ['label'=>'Text'])
        ->endRepeater()
        ->addText('offert_tex2', ['label'=>'Text bottom'])
        ->addImage('offert_image', ['label'=>'Image 600x1000'])
    ->addTab('Map', ['placement' => 'left'])
        ->addRepeater('pins')
            ->addImage('icon', ['label'=>'icon'])
            ->addGoogleMap('pin')
        ->endRepeater()
    ->addTab('Address', ['placement' => 'left'])
        ->addText('address_title', ['label'=>'Visit us title'])
        ->addText('address_title2', ['label'=>'Hours title'])
        ->addText('address', ['label'=>'Address'])
        ->addText('tel', ['label'=>'Phone'])
        ->addTextarea('hours', ['label'=>'Hours', 'new_lines'=>'br'])
        ->addImage('hours_image', ['label'=>'Hours Image 800x600'])
    ->addTab('Footer', ['placement' => 'left'])
        ->addText('copyrights', ['label'=>'Copyrights'])
    ->addTab('Social Icons', ['placement' => 'left'])
        ->addUrl('facebook')
        ->addUrl('twitter')
        ->addUrl('instagram')
    ;
        
return $option_page;