<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Titlepositions
{
    public function toOptionArray()
    {
        return array(
            'outside'    => Mage::helper('lightboxes')->__('outside'),
            'inside'    => Mage::helper('lightboxes')->__('inside'),
            'over'    => Mage::helper('lightboxes')->__('over'),
        );
    }
}