<?php

/**
 * This file shows basic usage examples. These examples are for teaching purposes and will
 *  hardly illustrate a real use case.
 */

use HtmlObjectModel\Container;
use HtmlObjectModel\Element;

// Includes the Composer autoloader.
require_once '../vendor/autoload.php';

// Now let's create our first element. Elements represent html entities that cannot receive child nodes.
// A good example of this is an input.

// Notice that we created an HtmlObjectModel\Element instance by assigning it the "input" parameter value.
// So we say that the Element represents the html input tag.
$input1 = new Element('input');

// Now, we need to configure our input. For that, we will make use of the Element::setAttribute() method.
$input1->setAttribute('name', 'input1')
    ->setAttribute('type', 'text')
    ->setAttribute('placeholder', 'Type something here...');

// The workflow of the Html Object Model is to create, mconfigure, display.
// We have already created and configured our input, now we need to display it, that is, create its html code.
echo $input1->build();

// The Element::build() method returns a string with the element's html code.
// This is the generated code: <input name="input'" value="Some value" placeholder="Type something here...">

// But we don't just have html entities of the Element type.
// Some entities can receive child nodes and we call them Container.

// This is a Container...
$form = new Container('form');

// As we said, a Container can receive a child node. For that we use...
$form->addNode($input1);

// Now, if we generate the $form html code we will have something like...
echo $form;
// <form><input name="input1" value="Some value" placeholder="Type something here..."></form>

// In short, we have two types of entities, Element, without child support, and Container, with child support.
// The workflow is to create, configure and display. Do this and be happy.