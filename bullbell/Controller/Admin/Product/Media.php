<?php
namespace Controller\Admin\Product;

    \Mage::loadFileByClassName('Controller\Core\Admin');

    class Media extends  \Controller\Core\Admin
    {
        protected $images = [];

        public function setImages($images)
        {
            $this->images =$images;
            return $this;
        }
        public function getImages()
        {
            return $this->images;
        }

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
                $edit = \Mage::getBlock('Admin\Product\Edit\Media');
                
                $productMedia = \Mage::getModel('product\media');

                $layout = $this->getLayout();
                $content = $layout->getContent();
                $content->addChild($edit);
                $this->tolayoutHtml();
                
            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
        }

        public function uploadAction()
        {
            try 
            {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
                if(!$this->getRequest()->isPost())
                {
                    $this->getMessage()->setFailure('Unable To Process Request.');
                }

                $productImage = $this->getRequest()->getFiles('image');
                $productId = $this->getRequest()->getGet('productId');
                if(!$productId)
                {
                    $this->getMessage()->setFailure('Id Not Found.');
                }

                $productMedia = \Mage::getModel('Product\Media');
                
                $filename = $productImage['name'];
                $filetmp = $productImage['tmp_name'];
                $imagePath = $productMedia->getImagePath()."{$filename}";
                
                move_uploaded_file($filetmp, $imagePath);
                $imagePath = $productMedia->getImagePathForFront()."{$filename}";
                print_r($imagePath);
                die;
                move_uploaded_file($filetmp, $imagePath);
                
                $productMedia->Image = $filename;
                $productMedia->label = $filename;
                $productMedia->productId = $productId;

                if($productMedia->save()){
                        $param = ['name' => 'Uploaded', 'Uploaded' => true];
                }
                
            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            $this->redirect('grid',null,$param);
        }
        public function updateAction()
        {
            try 
            {
                if(session_id() == '') {
                    session_start();
                }
                if(!$_SESSION['login'] == 'true'){
                    $this->redirect('login','index',null,true);
                }
                if(!$this->getRequest()->isPost())
                {
                    $this->getMessage()->setFailure('Unable To Process Request.');
                }

                $product = \Mage::getModel('Product');
                $productMedia = \Mage::getModel('Product\Media');

                $productId = $this->getRequest()->getGet('productId');
                $imageData = $this->getRequest()->getPost('image');

                if($productId)
                {
                    $product = $product->load($productId);
                    if(!$product)
                    {
                        $this->getMessage()->setFailure('Unable To Load Data.');
                    }
                }

                if(!array_values($imageData['data'])){
                    $this->gridAction();
                }
                $imageData['data'] = array_filter(array_map(function ($value){
                    return array_filter($value);
                }, $imageData['data']));
                foreach ($imageData as $key => $value) 
                {
                    if($key == 'data')
                    {
                        foreach ($value as $imageId => $value) {
                            $productMedia->load($imageId);
                            $productMedia->gallary = 1;
                            $productMedia->save();
                        }
                    }

                    if($key == 'slider' || $key == 'base' || $key == 'thumnail')
                    {
                        if($key == 'slider'){
                            foreach ($imageData[$key] as $imageId => $value) {
                                $imageIds[$imageId] = $imageId;
                                $productMedia->load($imageId);
                                $productMedia->$key = 1;
                                $productMedia->save();
                            }
                            $productMedia = \Mage::getModel('Product\Media');
                            $query = "SELECT * FROM `product_media`
                            WHERE `productId` = '{$productId}' ";
                            $images = $productMedia->fetchAll($query);
                            foreach($images->getData() as $image){
                                if(!array_key_exists($image->imageId, $imageIds)){
                                    $productMedia->load($image->imageId);
                                    $productMedia->$key = 0;
                                    $productMedia->save();
                                }
                            }
                        }
                        else{
                            $productMedia->load($value);
                            $productMedia->$key = 1;
                            $productMedia->save();
                        }
                    }  

                    if($key == 'remove')
                    {
                        foreach($imageData['remove'] as $imageId => $value)
                        {
                            $productMedia = $productMedia->load($imageId);
                            $productMedia->delete($imageId);
                        }
                    }

                    if($value == null)
                    {
                        $this->getMessage()->setFailure('Please select any one field.');
                    }
                }
                

            } catch (\Exception $e) {
                $this->getMessage()->setFailure($e->getMessage());
            }
            $this->gridAction();
        }

    }
?>