<?php 
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');
  
$hero
    ->addRepeater('hero')
        ->addImage('img', ['label'=>'Image 1920x1080'])
        ->addGroup('content')
            ->addText('title' , ['label'=>'Title'])
            ->addTextarea('subtitle' , ['label'=>'Text'])
            ->addLink('link' , ['label'=>'Link'])
    ;
    
return $hero;