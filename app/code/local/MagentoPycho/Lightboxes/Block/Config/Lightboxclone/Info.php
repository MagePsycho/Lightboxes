<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Block_Config_Lightboxclone_Info
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
    <h4>About LightboxClone</h4>
    <p>jQuery lightBox plugin is simple, elegant, unobtrusive, no need extra markup and is used to overlay images on the current page through the power and flexibility of jQuery\'s selector.<br />
LightBox is a plugin for jQuery. It was inspired in Lightbox JS by Lokesh Dhakar.<br /><br />
    Click <a href="http://leandrovieira.com/projects/jquery/lightbox/" target="_blank" >here</a> for more details
    </p>
    </div>
';

        return $html;
    }
}
