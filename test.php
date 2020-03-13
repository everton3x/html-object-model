<?php

include 'src\EntityAbstract.php';
include 'src/Element.php';

$el0 = new HtmlObjectModel\Element('hr');
$el0->setAttribute('id', 'teste1')
    ->setAttribute('class', 'estilo');
print_r($el0->getAllAttributes());
echo $el0;