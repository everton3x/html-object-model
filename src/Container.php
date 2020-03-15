<?php

namespace HtmlObjectModel;

use UnexpectedValueException;

class Container extends EntityAbstract
{

    /**
     * List of entity nodes.
     *
     * @var array
     */
    protected $nodes = [];
    //protected array $nodes = [];
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
     * @param  number|string|null $attrId An optional id to node.
     * @return Container
     */
    public function addNode($node, $attrId = null): Container
    {
        $this->nodes[$attrId] = $node;
        return $this;
    }

    /**
     * Checks whether a given node id exists in the list of nodes.
     *
     * @param  string|number $attrId
     * @return boolean
     */
    public function hasNodeId($attrId): bool
    {
        return array_key_exists($attrId, $this->nodes);
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
     * @param  string|number $attrId
     * @return void
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function getNodeById($attrId)
    {
        if ($this->hasNodeId($attrId) === false) {
            throw new UnexpectedValueException("Node id not found: $attrId");
        }
        return $this->nodes[$attrId];
    }

    /**
     * Get all the nodes.
     *
     * @return array
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
     * @return array
     */
    public function getAllNodesId(): array
    {
        return array_keys($this->nodes);
    }

    /**
     * Removes a node using its id.
     *
     * @param  string|number $attrId
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function removeNodeById($attrId): Container
    {
        if ($this->hasNodeId($attrId) === false) {
            throw new UnexpectedValueException("Node id not found: $attrId");
        }

        unset($this->nodes[$attrId]);
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
        $attrId = $this->hasNode($node);
        if ($attrId === false) {
            throw new UnexpectedValueException("Node not found.");
        }

        unset($this->nodes[$attrId]);
        return $this;
    }

    /**
     * Replaces one node with another using the id.
     *
     * The new node will keep the same id as the old node.
     *
     * @param  string|number $attrId  the replaced node id.
     * @param  mixed         $newNode The new node
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function replaceNodeById($attrId, $newNode): Container
    {
        if ($this->hasNodeId($attrId) === false) {
            throw new UnexpectedValueException("Node id not found: $attrId");
        }

        $this->nodes[$attrId] = $newNode;
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
