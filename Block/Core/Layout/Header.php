<?php
namespace Block\Core\Layout;

    \Mage::loadFileByClassName('Block\Core\Template');

    class Header extends \Block\Core\Template
    {
        public function __construct()
        {
            parent::__construct();
            $this->setTemplate("./view/core/layout/header.php");
        }

        public function getProductListUrl()
        {
            $url = $this->getUrl()->getUrl('list','product');
            return $url;
        }
        
        public function getBaseUrl()
        {
            $url = $this->getUrl()->getUrl('index','index');
            return $url;
        }

        public function getAboutUrl()
        {
            $url = $this->getUrl()->getUrl('about','index');
            return $url;
        }

        public function getContactUrl()
        {
            $url = $this->getUrl()->getUrl('contact','index');
            return $url;
        }
    }
    
?>