<?php

namespace Concrete5\ContentLibrary\api;

use Concrete\Core\Express\ObjectManager;
use Concrete\Core\Page\Page;
use Concrete\Core\Page\PageList;
use Symfony\Component\HttpFoundation\JsonResponse;

class Content
{
    protected $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function getContent($id)
    {

        $page = Page::getByID($id);
        $blocks = $page->getBlocks('Main');
        $content = 'None';
        $title = $page->getCollectionName();

        foreach ($blocks as $block) {
            if ($block->getBlockTypeHandle() === 'content') {
                $content = $block->getController()->getContent();
            }
        }


        return new JsonResponse(['title' => $title, 'content' => $content]);
    }

    public function getNavigation()
    {
        $home = Page::getByID(1);

        $nav = $home->getCollectionChildrenArray($oneLevelOnly = true);
        $navigation = [];

        foreach ($nav as $p) {
            /** @var $page Concrete\Core\Page\Page */
            $page = Page::getByID($p);
            $navigation[] = ['id' => (int)$page->getCollectionID(), 'name' => $page->getCollectionName(), 'url' => $page->getCollectionPath()];
        }

        return new JsonResponse($navigation);
    }
}
