<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('page_template', '==', 'views/template-custom.blade.php');
  
$page
    ->addFields(get_field_partial('partials.builder'))
    ;
return $page;