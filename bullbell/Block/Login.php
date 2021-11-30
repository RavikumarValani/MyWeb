<?php
namespace Block;

    \Mage::loadFileByClassName("Block\Core\Template");

    class Login extends \Block\Core\Template
    {

        public function __construct()
        {
            $this->setTemplate('./view/login.php');
        }

        public function getSubmitUrl()
        {
            $url = $this->getUrl()->getUrl('index','index');
            return $url;
        }

    }
    
?>