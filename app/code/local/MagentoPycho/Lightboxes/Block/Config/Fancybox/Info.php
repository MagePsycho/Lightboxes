<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Block_Config_Fancybox_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<div style="border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 10px 10px 10px;">
    <h4>About FancyBox</h4>
    <p>FancyBox is a tool for displaying images, html content and multi-media in a Mac-style "lightbox" that floats overtop of web page.<br />
    For more details visit the links: <a href="http://fancybox.net/home" target="_blank">Homepage</a> |
    <a href="http://fancybox.net/api" target="_blank">Configuration Options</a>
    </p>
    </div>
';

        return $html;
    }
}
