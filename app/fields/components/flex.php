<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');
  
$flex
    ->addGroup('options', ['label'=>'', 'wrapper'=>['width'=>'50%']])
        ->addImage('image', ['label'=>'Image 600x600'])
        ->addTrueFalse('pattern', ['label'=>'Pattern'])
        ->addSelect('bg_color',  ['label'=>'Background color', 'wrapper'=>['width'=>'50%']])
            ->addChoice('light')
            ->addChoice('gray')
            ->setDefaultValue('light')
        ->addSelect('direction',  ['label'=>'Image direction', 'wrapper'=>['width'=>'50%']])
            ->addChoice('left')
            ->addChoice('right')
            ->setDefaultValue('left')
        ->addNumber('offset_top', ['label'=>'Image offset top in %','default_value'=>0, 'wrapper'=>['width'=>'50%']])
        ->addNumber('offset_bottom', ['label'=>'Image offset bottom in %','default_value'=>0, 'wrapper'=>['width'=>'50%']])
    ->endGroup()
    ->addGroup('content', ['label'=>'', 'wrapper'=>['width'=>'50%']])
        ->addText('title', ['label'=>'Title'])
        ->addText('subtitle', ['label'=>'SubTitle'])
        ->addTextarea('text', ['label'=>'Text', 'new_lines'=>'br'])
        ->addLink('link', ['label'=>'Link'])
    ;
    
return $flex;