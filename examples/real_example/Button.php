<?php

namespace Example;

use HtmlObjectModel\Container;

/**
 * An button.
 */
class Button
{
    const TYPE_SUBMIT = 'submit';
    const TYPE_RESET = 'reset';

    protected Container $button;

    public function __construct(string $label, string $type)
    {
        $this->button = (new Container('button'))
        ->setAttribute('class', 'ui button')
            ->setAttribute('type', $type)
            ->addNode($label);
    }

    public function build(): string
    {
        return $this->button->build();
    }

    public function __toString()
    {
        return $this->build();
    }
}