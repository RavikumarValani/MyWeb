<?php
namespace Controller\Core;

    class Frontend 
    {
        protected $request = null;

        protected $layout = null;
        protected $message = null;

        public function __construct()
        {
            $this->setRequest();
        }

        public function setRequest()
        {
            $this->request = \Mage::getModel('Core\Request');
            return $this;
        }
        public function getRequest()
        {
            return $this->request;
        }

        public function setLayout(\Block\Core\Layout $layout = null)
        {
            if(!$layout)
            {
                $layout = \Mage::getBlock('Core\Layout');
            }
            $this->layout = $layout;
            return $this;
        }
        public function getLayout()
        {
            if (!$this->layout) {
                $this->setLayout();
            }
            return $this->layout;
        }
        public function toLayoutHtml()
        {
            echo $this->getLayout()->toHtml();
        }

        public function redirect($actionName=null,$controllerName=null,$params=null,$resetParams=false)
        {
            header("location:".$this->getUrl($actionName,$controllerName,$params,$resetParams));
            exit(0);
        }

        public function getUrl($actionName=null,$controllerName=null,$params=null,$resetParams=false)
        {
            $final = $_GET;
            if($resetParams)
            {
                $final = [];
            }
            if ($actionName == null) 
            {
                $actionName = $this->getRequest()->getActionName();
            }
            if ($controllerName == null) 
            {
                $controllerName = $this->getRequest()->getControllerName();
            }

            $final['c'] = $controllerName;
            $final['a'] = $actionName;

            if(is_array($params))
            {
                $final = array_merge($final,$params);
            }

            $urlString = http_build_query($final);
            return "http://localhost:8080/martina/index.php?{$urlString}";
        }
    }
