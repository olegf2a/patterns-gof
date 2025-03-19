<?php

namespace App\Controllers\Structural;

use App\Controllers\AbstractController;
use App\Patterns\Structural\Composite\Leafe;
use App\Patterns\Structural\Composite\Node;
use App\Views\TreeView;

class TreeController extends AbstractController
{
    public static $name = 'Tree (Composite)';

    public function index(): void
    {
        parent::index();

        $root = new Node(1);
        $firstLeaf = new Leafe(1);
        $secondNode = new Node(2);

        $thirdNode = new Node(3);
        $secondLeaf = new Leafe(2);


        $thirdLeaf1 = new Leafe(3);
        $thirdLeaf2 = new Leafe(3);


        $root->addChild($firstLeaf)->addChild($secondNode);
        $secondNode->addChild($secondLeaf)->addChild($thirdNode);
        $thirdNode->addChild($thirdLeaf1)->addChild($thirdLeaf2);

        /**
         * tree
         *               $root
         *             |      |
         *     $secondLeaf   $secondNode
         *       |              |
         *  $thirdLeaf        $thirdNode
         *                  |           |
         *             $forthLeaf1   $forthLeaf2
         */


        $view = new TreeView($root, 'initial');
        $view->render();

        $secondNode->operation(+5);
        $view = new TreeView($root, 'since second level increment 5');
        $view->render();


        $thirdNode->operation(-2);
        $view = new TreeView($root, 'since third level decrement 2');
        $view->render();


        parent::footer();
    }
}
