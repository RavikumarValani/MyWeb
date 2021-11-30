<?php
namespace Controller\Admin;

    \Mage::loadFileByClassName('Controller\Core\Admin');

    class Index extends  \Controller\Core\Admin
    {
        public function indexAction()
        {
            try
            {
                if (!$this->getRequest()->isPost()) 
                {
                    $this->loginAction();
                }
                $adminData = $this->getRequest()->getPost('admin');
                $admin = \Mage::getModel('Admin');
                $admin = $admin->load(1);
                if($adminData['username'] == $admin->username && $adminData['password'] == $admin->password){
                    if(session_id() == '') {
                        session_start();
                    }
                    $_SESSION['login'] = 'true';
                    $this->dashboardAction();
                }
                else {
                    $this->loginAction();
                }

            } catch (\Exception $e) {
                $e->getMessage();
            }
        }

        public function loginAction()
        {
            try
            {
                $login = \Mage::getBlock('Login');
                echo $login->toHtml();

            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
        }

        public function dashboardAction()
        {
            try
            {
                $block = \Mage::getBlock('Admin\Index\Index');
                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($block);
                $this->tolayoutHtml();

            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
        }
    }
    
?>