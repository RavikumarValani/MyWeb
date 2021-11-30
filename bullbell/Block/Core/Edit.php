<?php
namespace Block\Core;

    \Mage::loadFileByClassName("Block\Core\Template");

    class Edit extends \Block\Core\Template
    {
        protected $tableRow = null;

        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/core/edit.php');
        }
        
        public function setTableRow(\Model\Core\Table $tableRow)
        {
            $this->tableRow = $tableRow;
            return $this;
        }
        public function getTableRow()
        {
            return $this->tableRow;
        }
        
        public function getFormUrl()
        {
            return $this->getUrl()->getUrl('save');
        }
    }
    
    ?>