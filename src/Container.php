<?php

namespace HtmlObjectModel;

use UnexpectedValueException;

final class Container extends EntityAbstract
{

    /**
     * List of entity nodes.
     *
     * @var array<mixed>
     */
    protected array $nodes = [];
    /**
     * HTML entity that supports children (nodes).
     *
     * @codeCoverageIgnore
     * @param string $tag Tag of the HTML element.
     * @throws UnexpectedValueException Throws an UnexpectedValueException exception if the $tag value is zero lenght.
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
     * Adds a new node to the container.
     *
     * @param  mixed              $node   The new node.
     * @param  number|string|null $nodeId An optional id to node.
     * @return Container
     */
    public function addNode($node, $nodeId = null): Container
    {
        if (is_null($nodeId)) {
            $this->nodes[] = $node;
            return $this;
        }
        $this->nodes[$nodeId] = $node;
        return $this;
    }

    /**
     * Get all the nodes.
     *
     * @return array<mixed>
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * See \HtmlObjectModel\EntityAbstract::build()
     *
     * @return string
     */
    public function build(): string
    {
        return "<{$this->tag}{$this->buildAttributes()}>{$this->buildNodes()}</{$this->tag}>";
    }

    /**
     * Builds the html code of the nodes.
     *
     * @codeCoverageIgnore
     * @return             string
     */
    protected function buildNodes(): string
    {
        // If there are no nodes, an empty string must be returned.
        if (count($this->nodes) == 0) {
            return '';
        }
        
        $code = [];
        foreach ($this->nodes as $node) {
            /* Here we need to convert the nodes to a string because if a node is an EntityAbstract instance
            it will automatically be converted to a string.
            If you use an object of another type of class as a node, make sure it has an appropriate __toString() method
            or convert it to a string before adding it to the node list.
            */
            $code[] = (string) $node;
        }
        
        return join(' ', $code);
    }
}
