<?php
namespace Block\Admin\Product;

    \Mage::loadFileByClassName('Block\Core\Grid');

    class Grid extends \Block\Core\Grid 
    {
        protected $filter = null;
        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('./view/admin/product/grid.php');
        }   

        public function prepareCollection()
        {
            $product = \Mage::getModel('Product');
            $query = "SELECT * FROM `{$product->getTableName()}` ";
            $collection = $product->fetchAll($query);
            $this->setCollection($collection);
            return $this;
        }

        public function setFilter($filter)
        {
            $this->filter = $filter;
            return $this;
        }

        public function getFilter()
        {
            return $this->filter;
        }

        public function getFilteredData()
        {
            if(!empty($this->getFilter()))
            {
                $product = \Mage::getModel('Product');
                $query = "SELECT * FROM `{$product->getTableName()}` ";
                $query .= " WHERE 1=1";
                foreach($this->getFilter() as $filters)
                {
                    if(!$filters['name']){
                        return null;
                    }
                    foreach($filters as $key => $value)
                    {
                        $query .= " AND `{$key}` LIKE '%{$value}%'";
                    }
                }
                return $product->fetchAll($query);
            }
            return null;
        }

        public function getEditurl($id)
        {
            $url = $this->getUrl()->getUrl('form', null, ['productId' => $id], true);
            return $url;
        }

        public function getTitle()
        {
            return 'Items Detail';
        }

        public function getAddUrl()
        {
            $url = $this->getUrl()->getUrl('form',null,null,true);
            return $url;
        }

        public function getFilterUrl()
        {
            $url = $this->getUrl()->getUrl('filter',null,null,true);
            return $url;
        }

    }

?>