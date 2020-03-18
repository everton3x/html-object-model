<?php

namespace HtmlObjectModel;

use UnexpectedValueException;

/**
 * Abstraction for html entities.
 *
 * This abstract class is necessary so that there is a way for the user of the Html Object Model
 * to be able to identify if it is an element, container or any of the two.
 */
abstract class EntityAbstract
{

    /**
     * Builds the html code of the entity.
     *
     * @codeCoverageIgnore
     * @return             string
     */
    abstract public function build(): string;

    /**
     * List with the attribute = value pairs of the HTML entity.
     *
     * @var array<string>
     */
    protected array $attributes = [];
    /**
     * Html tag of the entity.
     *
     * @var string
     */
    //protected $tag = '';
    protected string $tag = '';

    /**
     * Each html tag represents an entity.
     *
     * @codeCoverageIgnore
     * @param string $tag Tag of the HTML entity.
     * @throws UnexpectedValueException Throws an UnexpectedValueException exception if the $tag value is zero lenght.
     */
    public function __construct(string $tag)
    {
        if (strlen($tag) == 0) {
            throw new UnexpectedValueException('$tag cannot be zero lenght.');
        }
        $this->tag = $tag;
    }

    /**
     * Getter for the entity tag.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Sets an HTML attribute for the entity.
     *
     * If the attribute is already configured, it updates the value.
     *
     * @param  string        $name  Attribute name.
     * @param  string|number $value Attribute value.
     * @return EntityAbstract
     */
    public function setAttribute(string $name, $value): EntityAbstract
    {
        $this->attributes[$name] = (string) $value;
        return $this;
    }

    /**
     * Returns a list of all attributes.
     *
     * @return array<string>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    
    /**
     * Builds the html code of the attributes.
     *
     * @codeCoverageIgnore
     * @return             string
     */
    protected function buildAttributes(): string
    {
        // If there are no attributes, an empty string must be returned.
        if (count($this->attributes) == 0) {
            return '';
        }
        
        // It was necessary to start the array with an empty entity to place a space between
        // the tag and the first attribute.
        $attr = [''];

        foreach ($this->attributes as $name => $value) {
            $attr[] = sprintf('%s="%s"', $name, $value);
        }
        
        return join(' ', $attr);
    }

    /**
     * See the magic __toString method in the  PHP documentation.
     *
     * @codeCoverageIgnore
     * @link               https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
     * @return             string
     */
    public function __toString()
    {
        return $this->build();
    }
}
