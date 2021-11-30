<?php
namespace Block\Admin\Product;

    \Mage::loadFileByClassName("Block\Core\Edit");

    class Edit extends \Block\Core\Edit
    {

        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/admin/product/edit.php');
        }

        public function getGridUrl()
        {
            $url = $this->getUrl()->getUrl('grid','product', null, true);
            return $url;
        }

        public function getDeleteUrl($id)
        {
            $url = $this->getUrl()->getUrl('delete', null, ['productId' => $id], true);
            return $url;
        }

        public function getMediaUrl($id)
        {
            $url = $this->getUrl()->getUrl('grid', 'product\media', ['productId' => $id], true);
            return $url;
        }
    }
?>