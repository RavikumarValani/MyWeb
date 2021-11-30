<?php
namespace Block\Index;

    \Mage::loadFileByClassName('Block\Core\Template');

    class Index extends \Block\Core\Template
    {
        public function __construct()
        {
            $this->setTemplate('./view/index/index.php');
        }

        public function getProductCollection()
        {
            $product = \Mage::getModel('Product');
            $productMedia = \Mage::getModel('Product\Media');
            $query = "SELECT * FROM `{$product->getTableName()}` as main_table 
                        JOIN `{$productMedia->getTableName()}` as media 
                        ON main_table.id = media.productId LIMIT 6";
            $productCollection = $product->fetchAll($query);
            if($productCollection){
                return $productCollection->getData();
            }
            return null;
        }

        public function getImages($productId)
        {
            $productMedia = \Mage::getModel('Product\Media');
            $query = "SELECT * FROM `{$productMedia->getTableName()}`
            WHERE `productId` = '{$productId}' ";
            $images = $productMedia->fetchAll($query);
            if($images){
                return $images->getData();
            }
            return null;
        }

        public function getSliderImages($productId)
        {
            $productMedia = \Mage::getModel('Product\Media');
            $query = "SELECT * FROM `{$productMedia->getTableName()}`
            WHERE `productId` = '{$productId}' AND `slider` = 1 ";
            $images = $productMedia->fetchAll($query);
            if($images){
                return $images->getData();
            }
            else {
                return $this->getImages($productId);
            }
        }

        public function getProductUrl($id)
        {
            $url = $this->getUrl()->getUrl('view','product',['productId' => $id]);
            return $url;
        }

    }
    
?>