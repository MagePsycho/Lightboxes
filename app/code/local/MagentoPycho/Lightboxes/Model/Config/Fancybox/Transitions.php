<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Transitions
{
    public function toOptionArray()
    {
        return array(
            'fade'    => Mage::helper('lightboxes')->__('fade'),
            'elastic'    => Mage::helper('lightboxes')->__('elastic'),
            'none'    => Mage::helper('lightboxes')->__('none'),
        );
    }
}