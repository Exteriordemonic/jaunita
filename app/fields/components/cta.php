<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cta = new FieldsBuilder('cta');
  
$cta
    ->addGroup('options', ['label'=>'', 'wrapper'=>['width'=>'50%']])
        ->addImage('image', ['label'=>'Image 600x600'])
        ->addSelect('direction',  ['label'=>'Image direction', 'wrapper'=>['width'=>'50%']])
            ->addChoice('left')
            ->addChoice('right')
            ->setDefaultValue('left')
    ->endGroup()
    ->addGroup('content', ['label'=>'', 'wrapper'=>['width'=>'50%']])
        ->addText('title', ['label'=>'Title'])
        ->addText('subtitle', ['label'=>'SubTitle'])
        ->addTextarea('text', ['label'=>'Text', 'new_lines'=>'br'])
        ->addLink('link', ['label'=>'Link'])
    ;
    
return $cta;