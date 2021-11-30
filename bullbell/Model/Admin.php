<?php
namespace Model;

    \Mage::loadFileByClassName("Model\Core\Table");
    
    class Admin extends \Model\Core\Table
    {
        public function __construct()
        {
            $this->setTableName('mar_adm_bull');
            $this->setPrimaryKey('id');
        }
        
    }
    
?>