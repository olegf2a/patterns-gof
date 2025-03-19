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
        $secondLeaf = new Leafe(2);

        $thirdNode = new Node(3);

        $fourthNode = new Node(4);

        $fourthLeaf1 = new Leafe(4);
        $fourthLeaf2 = new Leafe(4);


        $root->addChild($firstLeaf)->addChild($secondNode);
        $secondNode->addChild($secondLeaf)->addChild($thirdNode);
        $thirdNode->addChild($fourthNode);
        $fourthNode->addChild($fourthLeaf1)->addChild($fourthLeaf2);

        /**
         * tree
         *                $root
         *             |        |
         *     $firstLeaf    $secondNode
         *                    |      |
         *            $secondLeaf  $thirdNode
         *                             |
         *                        $fourthNode
         *                          |      |
         *                 $fourthLeaf1   $fourthLeaf2
         */


        $view = new TreeView($root, 'initial');
        $view->render();

        $secondNode->operation(+5);
        $view = new TreeView($root, 'since second level increment 5');
        $view->render();


        $fourthNode->operation(-2);
        $view = new TreeView($root, 'since fourth level decrement 2');
        $view->render();


        parent::footer();
    }
}
