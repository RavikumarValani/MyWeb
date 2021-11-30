<?php
namespace Model\Core;

    class Url 
    {
        protected $request = null;

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
            return "http://localhost:8080/martina/bullbell/index.php?{$urlString}";
        }

        public function baseUrl($baseUrl = null)
        {
            $url =  "http://localhost:8080/martina/bullbell/";
            if($baseUrl)
            {
                $url .= $baseUrl;
            }
            return $url;
            
        }
    }
    
?>