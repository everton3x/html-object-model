<?php

use Example\Button;
use Example\Field;
use Example\Form;
use Example\Page;

// The Composer autoloader.
require_once '../../vendor/autoload.php';

// Creation of fields for the form.
$user = new Field('User', Field::TYPE_TEXT);
$pass = new Field('Password', Field::TYPE_PASS);

// Creation of buttons for the form.
$login = new Button('Login', Button::TYPE_SUBMIT);
$cancel = new Button('Cancel', Button::TYPE_RESET);

// Form creation.
$form = new Form('Login');

// Fields added.
$form->addField($user);
$form->addField($pass);

// Buttons added.
$form->addButton($login);
$form->addButton($cancel);

// Page creation.
$page = new Page('Form Login Example');

// Form added to the page.
$page->addContent($form);

// Show page.
echo $page;