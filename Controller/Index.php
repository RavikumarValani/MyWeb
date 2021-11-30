<?php
namespace Controller;

    \Mage::loadFileByClassName('Controller\Core\Frontend');

    class Index extends  \Controller\Core\Frontend
    {
        public function indexAction()
        {
            try
            {
                $dashboard = \Mage::getBlock('Index\Index');
                $layout = $this->getLayout();
                $layout->getContent()->addChild($dashboard);
                $this->toLayoutHtml();

            } catch (\Exception $e) {
                $e->getMessage();
            }
        }
        
        public function aboutAction()
        {
            try
            {
                $aboutBlock = \Mage::getBlock('Index\About');
                $layout = $this->getLayout();
                $layout->getContent()->addChild($aboutBlock);
                $this->toLayoutHtml();

            } catch (\Exception $e) {
                $e->getMessage();
            }
        }
       
        public function contactAction()
        {
            try
            {
                $aboutBlock = \Mage::getBlock('Index\Contact');
                $layout = $this->getLayout();
                $layout->getContent()->addChild($aboutBlock);
                $this->toLayoutHtml();

            } catch (\Exception $e) {
                $e->getMessage();
            }
        }

        public function sendMailAction()
        {
            try
            {
                if (!$this->getRequest()->isPost()) 
                {
                    $this->contactAction();
                }
                $emailData = $this->getRequest()->getPost('email');
                $to = "valaniravi11111@gmail.com";
                $subject = $emailData['subject'];
                $msg = $emailData['message'];
                $headers = "From: {$emailData['email']}" . "\r\n" .
                "Name: {$emailData['name']}";

                mail($to,$subject,$msg,$headers);
                die;
                $this->contactAction();

            } catch (\Exception $e) {
                $e->getMessage();
            }
        }

    }
    
?>