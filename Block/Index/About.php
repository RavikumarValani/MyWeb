<?php
namespace Block\Index;

    \Mage::loadFileByClassName('Block\Core\Template');

    class About extends \Block\Core\Template
    {
        public function __construct()
        {
            $this->setTemplate('./view/index/about.php');
        }
    }
    
?>