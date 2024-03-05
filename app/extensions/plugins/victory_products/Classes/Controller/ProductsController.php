<?php

declare(strict_types=1);

namespace Victory\VictoryProducts\Controller;

use Victory\VictoryProducts\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductsController extends ActionController
{
    public function __construct(
        protected ProductRepository $productRepository,
    ) {
        // ...
    }
    public function listAction()
    {
        $products = $this->$productRepository->findAll();

        $this->view->assign('product', $products);

        return $this->htmlResponse();
    }
}