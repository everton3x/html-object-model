<?php

namespace HtmlObjectModel;

use UnexpectedValueException;

/**
 * An entity of type Element represents an HTML element that does not support children,
 * such as HR or INPUT, for example.
 */
class Element extends EntityAbstract
{
    /**
     * HTML entity that does not support children.
     *
     * @codeCoverageIgnore
     * @param              string $tag Tag of the HTML entity.
     * @throws             UnexpectedValueException Throws an UnexpectedValueException exception if the $tag value is zero lenght.
     */
    public function __construct(string $tag)
    {
        try {
            parent::__construct($tag);
        } catch (UnexpectedValueException $ex) {
            throw $ex;
        }
    }

    /**
     * See \HtmlObjectModel\EntityAbstract
     *
     * @return string
     */
    public function build(): string
    {
        return "<{$this->tag}{$this->buildAttributes()}>";
    }
}
