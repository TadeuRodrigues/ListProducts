<?php

class TadeuRodrigues_ListProducts_Block_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{
    protected $_direction = 'desc';
	
	protected function _construct() {
		parent::_construct();
		
		if(Mage::getStoreConfig('catalog/frontend/direction_sort')) {
			$this->_direction = Mage::getStoreConfig('catalog/frontend/direction_sort');
		}
	}
}