<?php
 
class TadeuRodrigues_ListProducts_Model_Catalog_Config extends Mage_Catalog_Model_Config
{
    public function getAttributeUsedForSortByArray()
    {	
        $options = array(
            'created_at' => Mage::helper('catalog')->__('Date Added'),
            'position' => Mage::helper('catalog')->__('Position')
        );
 
        foreach ($this->getAttributesUsedForSortBy() as $attribute) {
		 	$options[$attribute->getAttributeCode()] = $attribute->getStoreLabel();
        }
		
		
		/*
		if(Mage::getStoreConfig('catalog/frontend/show_sort')){
			$show = Mage::getStoreConfig('catalog/frontend/show_sort');
			
			$show = explode(',', $show);
			
			foreach ($show as $key => $item) {
				 $result =  array_key_exists ( $item , $options );
				if($result) { 
					$options_new[] = $options[$item];
				}
			}
		}

		
		return $options_new;
		*/
		
		return $options;
    }

    public function getProductListDefaultSortBy($store = null) {
        return Mage::getStoreConfig(self::XML_PATH_LIST_DEFAULT_SORT_BY, $store);
        //return "created_at";
    }
}