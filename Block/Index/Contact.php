<?php
namespace Block\Index;

    \Mage::loadFileByClassName('Block\Core\Template');

    class Contact extends \Block\Core\Template
    {
        public function __construct()
        {
            $this->setTemplate('./view/index/contact.php');
        }

        public function getSaveUrl()
        {
            return $this->getUrl()->getUrl('sendMail','index',null,true);
        }
    }
    
?>