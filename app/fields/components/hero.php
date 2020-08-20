<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');
  
$hero
    ->addRepeater('hero')
        ->addImage('img', ['label'=>'Image 1920x1080'])
        ->addGroup('content')
            ->addTrueFalse('overlay', ['label'=> 'Check if image is light'])
            ->addSelect('direction',  ['label'=>'Content direction'])
                ->addChoice('left')
                ->addChoice('right')
                ->setDefaultValue('left')
            ->addTextarea('title' , ['label'=>'Title', 'new_lines'=>'br'])
            ->addTextarea('subtitle' , ['label'=>'Text', 'new_lines'=>'br'])
            ->addLink('link' , ['label'=>'Link'])
    ;
    
return $hero;