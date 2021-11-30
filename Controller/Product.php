<?php
namespace Controller;

    \Mage::loadFileByClassName("Controller\Core\Frontend");

    class Product extends \Controller\Core\Frontend 
    {
        public function listAction()
        {
            try 
            {
                $block = \Mage::getBlock('Product\Productlist');
                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($block);

                $this->tolayoutHtml();
            } catch (\Exception $e) {
                $e->getMessage();
            }
            
        }

        public function viewAction()
        {
            try 
            {
                $block = \Mage::getBlock('Product\View');
                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($block);

                $this->tolayoutHtml();
            } catch (\Exception $e) {
                $e->getMessage();
            }
            
        }

        public function filterAction()
        {
            if (!$this->getRequest()->isPost()) 
            {
                $this->viewAction();
            }
            $categoryData = $this->getRequest()->getPost();
            if(array_key_exists('category', $categoryData)){
                $category = $categoryData['category'];
            }
            $block = \Mage::getBlock('Product\Productlist');
            $block->setCategory($category);
            $layout = $this->getLayout();
            $content = $layout->getContent();
            $content->addChild($block);

            $this->tolayoutHtml();
        }
  
    }
?>