# Html Object Model
**It provides web developers with an abstraction for html entities similar to the Document Object Model.**

![](https://github.com/everton3x/html-object-model/workflows/Code%20Quality/badge.svg)
![](https://img.shields.io/github/issues/everton3x/html-object-model)
![](https://img.shields.io/github/forks/everton3x/html-object-model)
![](https://img.shields.io/github/stars/everton3x/html-object-model)
![](https://img.shields.io/github/license/everton3x/html-object-model)

Anyone who uses [PHP](https://php.net) for web development is used to using object orientation daily. However, when the developer goes on to create the user interface, he invariably has to leave object orientation to write markup code. Even if the web developer uses some template tools, like [Twig](https://twig.symfony.com/), even so, he needs to have a lot of work with *HTML* making the models, besides needing to use a whole library of templates, usually bigger and with more features than necessary.

It is for this context that the **Html Object Model** was conceived: to make it possible to develop user interfaces in fully object-oriented *HTML*. **Html Object Model** is inspired by the [PHP Object Model Document](https://www.php.net/manual/en/book.dom.php) and allows the web developer to create *HTML* in an object-oriented way.

## Installation
The standard method of installation is through [Composer](https://getcomposer.org/):

```sh
composer require everton3x/html-object-model
```

## Use
The **Html Object Model** workflow follows the following scheme:

**Create -> Configure -> Build**

See an example:

```php
<?php

require_once 'vendor/autoload.php';// Don't forget to include the Composer Autoloader.

// Create
$entity = new HtmlObjectModel\Element('input');

// Configure
$entity->setAttribute('id', 'entity1')
    ->setAttribute('class', 'mystyle')
    ->setAttribute('name', 'myfield');

// Build
echo $entity->build();

```

The generated html code should look something like:

```html
<input id="entity1" class="mystyle" name="myfield">
```

**Html Object Model** offers many other methods for manipulating attributes and children (nodes) in *HTML* entities created with this library. Be sure to [read the documentation](https://github.com/everton3x/html-object-model/wiki/) to learn about all the available features and about API.

## How to contribute
Please, see the [CONTRIBUTING](https://github.com/everton3x/html-object-model/wiki/Contributing) section on [project wiki](https://github.com/everton3x/html-object-model/wiki/).

## Mantainer
[Everton da Rosa](https://everton3x.github.io)