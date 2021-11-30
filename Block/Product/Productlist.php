<?php
namespace Block\Product;
\Mage::loadFileByClassName('Block\Core\Template');

    class Productlist extends \Block\Core\Template
    {
        protected $category = "All";
        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/product/productlist.php');
        }  

        public function setCategory($category)
        {
            $this->category = $category;
            return $this;
        }

        public function getCategory()
        {
            return $this->category;
        }

        public function getProductCollection()
        {
            $product = \Mage::getModel('Product');
            $query = "SELECT * FROM `{$product->getTableName()}` ";
            if($this->getCategory() != "All"){
                $query .= "WHERE `category` LIKE '%{$this->getCategory()}%'";
            }
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

        public function getCategories()
        {
            $categories = [
                "All",
                "Indian Fusion Wear",
                "Western Wear",
                "Sports Wear & Active Wear",
                "Footwear &  Fitness",
                "Accessories"
            ];
            return $categories;
        }

        public function getProductUrl($id)
        {
            $url = $this->getUrl()->getUrl('view','product',['productId' => $id]);
            return $url;
        }

        public function getBaseUrl()
        {
            $url = $this->getUrl()->getUrl('index','index');
            return $url;
        }

        public function getFormUrl()
        {
            $url = $this->getUrl()->getUrl('filter','product');
            return $url;
        }

    }

?>