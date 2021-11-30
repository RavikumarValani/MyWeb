<?php
namespace Block\Product;
\Mage::loadFileByClassName('Block\Core\Template');

    class View extends \Block\Core\Template
    {
        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/product/view.php');
        }  

        public function getProduct()
        {
            $product = \Mage::getModel('Product');
            $productId = $this->getRequest()->getGet('productId');
            $query = "SELECT * FROM `{$product->getTableName()}` WHERE `id` = {$productId} ";
            $product = $product->fetchRow($query);
            return $product;
        }
       
        public function getProductImages()
        {
            $productMedia = \Mage::getModel('Product\Media');
            $productId = $this->getRequest()->getGet('productId');
            $query = "SELECT * FROM `{$productMedia->getTableName()}` WHERE `productId` = {$productId} ";
            $images = $productMedia->fetchAll($query);
            return $images->getData();
        }

        public function getBaseImage()
        {
            $base = null;
            $images = $this->getProductImages();
            foreach ($images as $image) {
                if($image->base){
                    $base = $image;
                }
            }
            if(!$base){
                $base = $images[0];
            }
            return $base;
        }

    }

?>