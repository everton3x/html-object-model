<?php

namespace Example;

use HtmlObjectModel\Container;
use HtmlObjectModel\Element;

/**
 * Abstraction for the html code of a web page with Semantic UI support.
 * 
 * @link https://semantic-ui.com/
 */
class Page
{
    /**
     * DOCTYPE for page.
     * 
     * @var string
     */
    protected string $doctype = '<!DOCTYPE HTML>';

    /**
     * html tag
     * 
     * @var HtmlObjectModel\Container
     */
    protected Container $html;

    /**
     * head tag
     * 
     * @var HtmlObjectModel\Container
     */
    protected Container $head;

    /**
     * body tag
     * 
     * @var HtmlObjectModel\Container
     */
    protected Container $body;
    
    /**
     * The constructor.
     *
     * @param string $title Title for the web page.
     */
    public function __construct(string $title)
    {
        // Here we create the objects for the html, head and body tags.
        $this->html = new Container('html');
        $this->head = new Container('head');
        $this->body = new Container('body');

        // We built the page head.
        $this->buildHead($title);
    }

    /**
     * Builder for page head.
     *
     * @param string $title Page title.
     * @return void
     */
    protected function buildHead(string $title)
    {
        $this->head->addNode(//<meta charset="utf-8">
            (new Element('meta'))->setAttribute('charset', 'utf-8')
        )->addNode(//<meta name="viewport" content="width=device-width; initial-scale=1; minimun-scale=1; maximun-scale=1">
            (new Element('meta'))
                ->setAttribute('name', 'viewport')
                ->setAttribute('content', 'width=device-width; initial-scale=1; minimun-scale=1; maximun-scale=1')
        )->addNode(//<title>$title</title>
            (new Container('title'))->addNode($title)
        )->addNode(//<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
            (new Element('link'))
                ->setAttribute('rel', 'stylesheet')
                ->setAttribute('integrity', 'sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=')
                ->setAttribute('href', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css')
                ->setAttribute('crossorigin', 'anonymous')
        )
        ->addNode(//<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
            (new Container('script'))
                ->setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js')
                ->setAttribute('integrity', 'sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=')
                ->setAttribute('crossorigin', 'anonymous')
        );
    }

    /**
     * Adds some contento to the body of the web page.
     *
     * @param mixed $content
     * @return Page
     */
    public function addContent($content): Page
    {
        $this->body->addNode($content);
        return $this;
    }

    /**
     * Builds the source code of the page and its content.
     *
     * @return string
     */
    public function build(): string
    {
        $this->html->addNode($this->head)
            ->addNode($this->body);
        return "{$this->doctype}{$this->html->build()}";
    }

    public function __toString()
    {
        return $this->build();
    }
}