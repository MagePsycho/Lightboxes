<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Scrollings
{
    public function toOptionArray()
    {
        return array(
            'auto'    => Mage::helper('lightboxes')->__('auto'),
            'yes'    => Mage::helper('lightboxes')->__('yes'),
            'no'    => Mage::helper('lightboxes')->__('no'),
        );
    }
}