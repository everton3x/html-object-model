<?php

namespace HtmlObjectModel;

use UnexpectedValueException;

class Container extends EntityAbstract
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
     * @param  string $tag Tag of the HTML element.
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
     * Checks whether a given node id exists in the list of nodes.
     *
     * @param  string|number $nodeId
     * @return boolean
     */
    public function hasNodeId($nodeId): bool
    {
        return array_key_exists((string) $nodeId, $this->nodes);
    }

    /**
     * Checks whether a given node exists in the list of nodes.
     *
     * @param  mixed $node
     * @return string|number|boolean Returns the node id if it exists, if not, returns false.
     * This method can return false "false", if the returned id is zero, so always use === when checking.
     */
    public function hasNode($node)
    {
        return array_search($node, $this->nodes, true);
    }

    /**
     * Get the node using your id.
     *
     * @param  string|number $nodeId
     * @return mixed
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function getNodeById($nodeId)
    {
        if ($this->hasNodeId($nodeId) === false) {
            throw new UnexpectedValueException("Node id not found: $nodeId");
        }
        return $this->nodes[$nodeId];
    }

    /**
     * Get all the nodes.
     *
     * @return array<mixed>
     */
    public function getAllNodes(): array
    {
        return $this->nodes;
    }

    /**
     * Reports the number of existing nodes.
     *
     * @return integer
     */
    public function countNodes(): int
    {
        return count($this->nodes);
    }

    /**
     * Get all nodes id.
     *
     * @return array<string|number>
     */
    public function getAllNodesId(): array
    {
        return array_keys($this->nodes);
    }

    /**
     * Removes a node using its id.
     *
     * @param  string|number $nodeId
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function removeNodeById($nodeId): Container
    {
        if ($this->hasNodeId($nodeId) === false) {
            throw new UnexpectedValueException("Node id not found: $nodeId");
        }

        unset($this->nodes[$nodeId]);
        return $this;
    }

    /**
     * Removes a node.
     *
     * @param  mixed $node
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the node is not found.
     */
    public function removeNode($node): Container
    {
        $nodeId = $this->hasNode($node);
        if ($nodeId === false) {
            throw new UnexpectedValueException("Node not found.");
        }

        unset($this->nodes[$nodeId]);
        return $this;
    }

    /**
     * Replaces one node with another using the id.
     *
     * The new node will keep the same id as the old node.
     *
     * @param  string|number $nodeId  the replaced node id.
     * @param  mixed         $newNode The new node
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function replaceNodeById($nodeId, $newNode): Container
    {
        if ($this->hasNodeId($nodeId) === false) {
            throw new UnexpectedValueException("Node id not found: $nodeId");
        }

        $this->nodes[$nodeId] = $newNode;
        return $this;
    }

    /**
     * Replaces one node with another.
     *
     * @param  mixed $oldNode The old node.
     * @param  mixed $newNode the new node.
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the node is not found.
     */
    public function replaceNode($oldNode, $newNode): Container
    {
        $attrId = $this->hasNode($oldNode);
        if ($attrId === false) {
            throw new UnexpectedValueException("Node not found.");
        }

        $this->nodes[$attrId] = $newNode;
        return $this;
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
     * @return string
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
