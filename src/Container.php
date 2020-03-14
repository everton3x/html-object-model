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
     * @param  mixed              $node The new node.
     * @param  number|string|null $id   An optional id to node.
     * @return Container
     */
    public function addNode($node, $id = null): Container
    {
        $this->nodes[$id] = $node;
        return $this;
    }

    /**
     * Checks whether a given node id exists in the list of nodes.
     *
     * @param  string|number $id
     * @return boolean
     */
    public function hasNodeId($id): bool
    {
        return array_key_exists($id, $this->nodes);
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
     * @param  string|number $id
     * @return void
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function getNodeById($id)
    {
        if ($this->hasNodeId($id) === false) {
            throw new UnexpectedValueException("Node id not found: $id");
        }
        return $this->nodes[$id];
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
     * @param  string|number $id
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function removeNodeById($id): Container
    {
        if ($this->hasNodeId($id) === false) {
            throw new UnexpectedValueException("Node id not found: $id");
        }

        unset($this->nodes[$id]);
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
        if (($id = $this->hasNode($node)) === false) {
            throw new UnexpectedValueException("Node not found.");
        }

        unset($this->nodes[$id]);
        return $this;
    }

    /**
     * Replaces one node with another using the id.
     *
     * The new node will keep the same id as the old node.
     *
     * @param  string|number $id      the replaced node id.
     * @param  mixed         $newNode The new node
     * @return Container
     * @throws UnexpectedValueException Throws an exception of type UnexpectedValueException if the id is not found.
     */
    public function replaceNodeById($id, $newNode): Container
    {
        if ($this->hasNodeId($id) === false) {
            throw new UnexpectedValueException("Node id not found: $id");
        }

        $this->nodes[$id] = $newNode;
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
        if (($id = $this->hasNode($oldNode)) === false) {
            throw new UnexpectedValueException("Node not found.");
        }

        $this->nodes[$id] = $newNode;
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
