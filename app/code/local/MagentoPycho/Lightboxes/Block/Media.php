<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/**
 * @depracted from 1.0.4
 */
class MagentoPycho_Lightboxes_Block_Media extends Mage_Catalog_Block_Product_View_Media
{
	public function getConfig($field, $group = 'option', $default = null){
        return Mage::helper('lightboxes')->getConfig($field, $group, $default);
	}

    public function getMainImageSize()
	{
		return Mage::helper('lightboxes')->getMainImageSize();
	}

	public function getThumbnailImageSize()
	{
		return Mage::helper('lightboxes')->getThumbnailImageSize();
	}

	public function getPopupImageSize()
	{
		return Mage::helper('lightboxes')->getPopupImageSize();
	}

    public function getFancyboxJsConfig(){
        return Mage::helper('lightboxes')->getFancyboxJsConfig();
    }

    public function getLightboxcloneJsConfig(){
        return Mage::helper('lightboxes')->getLightboxcloneJsConfig();
    }

    public function getPiroboxJsConfig(){
        return Mage::helper('lightboxes')->getPiroboxJsConfig();
    }

}