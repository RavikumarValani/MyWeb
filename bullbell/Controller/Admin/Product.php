<?php
namespace Controller\Admin;

    \Mage::loadFileByClassName("Controller\Core\Admin");

    class Product extends \Controller\Core\Admin 
    {
        public function gridAction()
        {
            try 
            {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
                $block = \Mage::getBlock('Admin\Product\Grid');
                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($block);

                $this->tolayoutHtml();
            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            
        }
        
        public function formAction()
        {
            try 
            {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
                $edit = \Mage::getBlock('Admin\Product\Edit');
                
                $product = \Mage::getModel('Product');
                if($productId = (int) $this->getRequest()->getGet('productId'))
                {
                    $product->load($productId);
                    if(!$product)
                    {
                        $this->getMessage()->setFailure('Unable to Find Data.');   
                    }
                }
                $edit->setTableRow($product);

                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($edit);
                $this->tolayoutHtml();
                
            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
        }

        public function saveAction()
        {
           try 
           {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
               $flag = 0;
                if (!$this->getRequest()->isPost()) 
                {
                    $this->getMessage()->setFailure('Invalid Request Id.');
                }
                $product = \Mage::getModel('Product'); 
                if($productId = (int) $this->getRequest()->getGet('productId'))
                {
                    
                    $product->load($productId);
                    $product->updated_at = date("Y-m-d");
                    if(!$product->id)
                    {
                        $this->getMessage()->setFailure('Unable to Find Data.');   
                    }
                    $flag = 1;
                }
                $productData = $this->getRequest()->getPost('product');
                if(!$product->id)
                {
                    $product->created_at = date("Y-m-d");
                }
                $product->setData($productData);
                if($product->save()){
                    if($flag == 1){
                        $param = ['name' => 'Update', 'Update' => true];
                    }
                    else{
                        $param = ['name' => 'Added', 'Added' => true];
                    }
                }

            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            $this->redirect('grid',null,$param);
        }
        public function deleteAction()
        {
           try 
           {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
               $productId = $this->getRequest()->getGet('productId');
               if(!$productId)
               {
                    $this->getMessage()->setFailure('Id Not Found.');
               }
               $product = \Mage::getModel('Product');
               if($product->delete($productId))
               {
                    $this->getMessage()->setSuccess('Record Successful Deleted.');
               }
               else{
                    $this->getMessage()->setFailure('Unable to Delete Record');
               }
                if($product->delete($productId)){
                    $param = ['name' => 'Delete', 'Delete' => true];
                }
            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            $this->redirect('grid',null,$param);
        }
        
        public function filterAction()
        {
            try 
            {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
                $filters = $this->getRequest()->getPost('filter');
                $block = \Mage::getBlock('Admin\Product\Grid');
                $block->setFilter($filters);
                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($block);

                $this->tolayoutHtml();

            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            $this->gridAction();
            

        }
  
    }
?>