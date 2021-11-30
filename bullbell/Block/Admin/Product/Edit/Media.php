<?php
namespace Block\Admin\Product\Edit;

    \Mage::loadFileByClassName("Block\Core\Edit");

    class Media extends \Block\Core\Edit
    {
        protected $image = null;
        protected $images = [];

        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/admin/product/edit/media.php');
        }

        public function setImages($images = null)
        {
            if(!$images)
            {
                $productMedia = \Mage::getModel('Product\Media');
                $productId = $this->getRequest()->getGet('productId');
                $query = "SELECT * FROM `product_media`
                WHERE `productId` = '{$productId}' ";
                $images = $productMedia->fetchAll($query);
            }
            $this->images = $images;
            return $this;
        }
        public function getImages()
        {
            if(!$this->images)
            {
                $this->setImages();
            }
            return $this->images;
        }

        public function setImage(\Model\Product\Media $image = null)
        {
            if(!$image)
            {
                $image = \Mage::getModel('Product\Media');
            }
            if($imageId = (int) $this->getRequest()->getGet('imageId'))
            {
                $image = $image->load($imageId);
            }
            $this->image = $image;
            return $this;
        }
        public function getImage()
        {
            if(!$this->image)
            {
                $this->setImage();
            }
            return $this->image;
        }

        public function getBackUrl()
        {
            $productId = $this->getRequest()->getGet('productId');
            $url = $this->getUrl()->getUrl('form', 'product', ['productId' => $productId], true);
            return $url;
        }

    }
    
?>