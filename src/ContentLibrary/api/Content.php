<?php

namespace Concrete5\ContentLibrary\api;

use Concrete\Core\Express\ObjectManager;
use Concrete\Core\Page\Page;
use Symfony\Component\HttpFoundation\JsonResponse;

class Content 
{
    protected $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function getContent($path)
    {
        
        $page = Page::getByPath('/'.$path);
        $blocks = $page->getBlocks('Main');
        $content = 'None';

        foreach ($blocks as $block) {
            if ($block->getBlockTypeHandle() === 'content') {
                $content = $block->getController()->getContent();
            }
        }

        
        return new JsonResponse(['content' => $content]);
    }
}