<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Pirobox_Themes
{
    public function toOptionArray()
    {
        return array(
            'demo1'    => Mage::helper('lightboxes')->__('double border corners white/black'),
            'demo2'    => Mage::helper('lightboxes')->__('black border corners + shadow'),
            'demo3'    => Mage::helper('lightboxes')->__('white border corners + shadow'),
            'demo4'    => Mage::helper('lightboxes')->__('shadow'),
            'demo5'    => Mage::helper('lightboxes')->__('double border corners black/white'),
        );
    }
}