<?php

namespace Example;

use HtmlObjectModel\Container;
use HtmlObjectModel\Element;

/**
 * A fieldform field.
 */
class Field
{
    const TYPE_TEXT = 'text';
    const TYPE_PASS = 'password';

    protected Container $field;

    public function __construct(string $label, string $type)
    {
        $this->field = (new Container('div'))
            ->setAttribute('class', 'field')
            ->addNode(
                (new Container('label'))->addNode($label)
            )->addNode(
                (new Element('input'))
                    ->setAttribute('type', $type)
            );
    }

    public function build(): string
    {
        return $this->field->build();
    }

    public function __toString()
    {
        return $this->build();
    }
}