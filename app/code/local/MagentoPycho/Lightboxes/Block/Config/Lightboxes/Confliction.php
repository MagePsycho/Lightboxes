<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Block_Config_Lightboxes_Confliction
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
    <h4>Some notes on confliction with other jQuery plugins & it\'s fixing</h4>
    <p>If you are not using any other jQuery plugins then you don\'t need to worry about conflicion issues.<br/> But if you are using one or more jQuery plugins, then there is possibility of confliction issue between other jQuery plugins and lighboxes plugin. As a result jQuery Lightboxes extension may fail to work. This section provides different options so as to fix such confliction issues in order to make jQuery Lightboxes extension work like a charm and provides other options like inclusion of jQuery lighboxes globally so that it can be used with other than media gallery pages. <br />If none of these options are helpful in fixing of confliction issue then you must deal with the other jQuery plugins individually.<br /><br />
	Don\'t forgot to <a href="http://www.magepsycho.com/contacts" target="_blank">Contact Us</a> if you have any issues/suggestions/quotes etc.
    </p>
    </div>
';

        return $html;
    }
}
