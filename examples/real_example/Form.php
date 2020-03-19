<?php

namespace Example;

use Example\Button;
use Example\Field;
use HtmlObjectModel\Container;

/**
 * Abstraction for a web form.
 */
class Form
{
    /**
     * The form object.
     * 
     * @var HtmlObjectModel\Container
     */
    protected Container $form;

    /**
     * List of the form fields.
     * 
     * @var array<Example\Field>
     */
    protected array $fields = [];

    /**
     * List of form buttons.
     * 
     * @var array<Example\Button>
     */
    protected array $buttons = [];

    /**
     * The constructor.
     * 
     * @param string $title Form title.
     */
    public function __construct(string $title)
    {
        $this->form = (new Container('form'))
            ->setAttribute('class', 'ui form')//<form class="ui inverted blue form">
            ->addNode(
                (new Container('h1'))//<h1 class="ui header">$title</h1>
                ->setAttribute('class', 'ui header')
                ->addNode($title)
            );
    }

    /**
     * Adds a field to the form.
     *
     * @param Example\Field $field
     * @return Form
     */
    public function addField(Field $field): Form
    {
        $this->fields[] = $field;
        return $this;
    }

    /**
     * Addsa a button to the form.
     *
     * @param Button $button
     * @return Form
     */
    public function addButton(Button $button): Form
    {
        $this->buttons[] = $button;
        return $this;
    }

    /**
     * Build the source code.
     *
     * @return string
     */
    public function build(): string
    {
        foreach ($this->fields as $item) {
            $this->form->addNode($item);
        }

        foreach ($this->buttons as $item) {
            $this->form->addNode($item);
        }

        return $this->form->build();
    }

    public function __toString()
    {
        return $this->build();
    }
}