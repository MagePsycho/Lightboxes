<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getConfig($field, $group = 'option', $default = null){
        $value = Mage::getStoreConfig('lightboxes/'.$group.'/'.$field);
        if(!isset($value) or trim($value) == ''){
            return $default;
        }else{
            return $value;
        }
	}

    public function getLightboxUrl(){
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . 'lightboxes';
    }

    public function getMainImageSize()
	{
		list($main_width, $main_height) = explode('x', $this->getConfig('mainimage_size', 'option', '265x265'));

		$main_width = intval($main_width) > 0 ? intval($main_width) : 265;
		$main_height = intval($main_height) > 0 ? intval($main_height) : 265;

		return array($main_width, $main_height);
	}

	public function getThumbnailImageSize()
	{
		list($thu_width, $thu_height) = explode('x', $this->getConfig('thumbnail_size', 'option', '57x57'));

		$thu_width = intval($thu_width) > 0 ? intval($thu_width) : 57;
		$thu_height = intval($thu_height) > 0 ? intval($thu_height) : 57;

		return array($thu_width, $thu_height);
	}

	public function getPopupImageSize()
	{
		$sizes			= explode('x', $this->getConfig('popupimage_size', 'option'));

		$big_width		= isset($sizes[0]) ? $sizes[0] : '';
		$big_height		= isset($sizes[1]) ? $sizes[1] : '';

		$big_width		= intval($big_width) > 0 ? intval($big_width) : '';
		$big_height		= intval($big_height) > 0 ? intval($big_height) : '';

		return array($big_width, $big_height);
	}

	public function getLightboxRel($lightboxType, $default = ''){
		$rel = '';
		switch($lightboxType){
			case 'fancybox':
				$rel = 'fancybox';
				break;
			case 'lightboxclone':
				$rel = 'lightboxclone';
				break;
			case 'pirobox':
				$rel = 'pirobox';
				break;
			default:
				$rel = '';
				break;
		}
		if(!empty($default)){
			$rel .= $default;
		}
		return $rel;
	}

    public function getFancyboxJsConfig(){
        $js_string = '';
        if($this->getConfig('padding', 'fancybox')){
            $js_string .= "'padding' : " . $this->getConfig('padding', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('margin', 'fancybox')){
            $js_string .= "'margin' : " . $this->getConfig('margin', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('opacity', 'fancybox')){
            $js_string .= "'opacity' : " . $this->getConfig('opacity', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('modal', 'fancybox')){
            $js_string .= "'modal' : " . $this->getConfig('modal', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('cyclic', 'fancybox')){
            $js_string .= "'cyclic' : " . $this->getConfig('cyclic', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('scrolling', 'fancybox')){
            $js_string .= "'scrolling' : '" . $this->getConfig('scrolling', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('autoScale', 'fancybox')){
            $js_string .= "'autoScale' : " . $this->getConfig('autoScale', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('centerOnScroll', 'fancybox')){
            $js_string .= "'centerOnScroll' : " . $this->getConfig('centerOnScroll', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('hideOnOverlayClick', 'fancybox')){
            $js_string .= "'hideOnOverlayClick' : " . $this->getConfig('hideOnOverlayClick', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('hideOnContentClick', 'fancybox')){
            $js_string .= "'hideOnContentClick' : " . $this->getConfig('hideOnContentClick', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('overlayShow', 'fancybox')){
            $js_string .= "'overlayShow' : " . $this->getConfig('overlayShow', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('overlayOpacity', 'fancybox')){
            $js_string .= "'overlayOpacity' : " . $this->getConfig('overlayOpacity', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('overlayColor', 'fancybox')){
            $js_string .= "'overlayColor' : '" . $this->getConfig('overlayColor', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('titleShow', 'fancybox') != ''){
	    $titleShow = $this->getConfig('titleShow', 'fancybox') == 0 ? 'false' : true;
            $js_string .= "'titleShow' : " . $titleShow . "," . PHP_EOL;
        }
        if($this->getConfig('titlePosition', 'fancybox') != 'outside'){
            $js_string .= "'titlePosition' : '" . $this->getConfig('titlePosition', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('transitionIn', 'fancybox')){
            $js_string .= "'transitionIn' : '" . $this->getConfig('transitionIn', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('transitionOut', 'fancybox')){
            $js_string .= "'transitionOut' : '" . $this->getConfig('transitionOut', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('speedIn', 'fancybox')){
            $js_string .= "'speedIn' : " . $this->getConfig('speedIn', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('speedOut', 'fancybox')){
            $js_string .= "'speedOut' : " . $this->getConfig('speedOut', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('changeFade', 'fancybox')){
            $js_string .= "'changeFade' : '" . $this->getConfig('changeFade', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('easingIn', 'fancybox')){
            $js_string .= "'easingIn' : '" . $this->getConfig('easingIn', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('easingOut', 'fancybox')){
            $js_string .= "'easingOut' : '" . $this->getConfig('easingOut', 'fancybox') . "'," . PHP_EOL;
        }
        if($this->getConfig('showCloseButton', 'fancybox')){
            $js_string .= "'showCloseButton' : " . $this->getConfig('showCloseButton', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('showNavArrows', 'fancybox')){
            $js_string .= "'showNavArrows' : " . $this->getConfig('showNavArrows', 'fancybox') . "," . PHP_EOL;
        }
        if($this->getConfig('enableEscapeButton', 'fancybox')){
            $js_string .= "'enableEscapeButton' : " . $this->getConfig('enableEscapeButton', 'fancybox') . "," . PHP_EOL;
        }
	$js_string = rtrim($js_string, ",".PHP_EOL).PHP_EOL;
        return $js_string;
    }

    public function getLightboxcloneJsConfig(){
        $js_string = '';
        if($this->getConfig('overlayBgColor', 'lightboxclone')){
            $js_string .= "'overlayBgColor' : '" . $this->getConfig('overlayBgColor', 'lightboxclone') . "'," . PHP_EOL;
        }
        if($this->getConfig('overlayOpacity', 'lightboxclone')){
            $js_string .= "'overlayOpacity' : " . $this->getConfig('overlayOpacity', 'lightboxclone') . "," . PHP_EOL;
        }
        if($this->getConfig('containerBorderSize', 'lightboxclone')){
            $js_string .= "'containerBorderSize' : " . $this->getConfig('containerBorderSize', 'lightboxclone') . "," . PHP_EOL;
        }
        if($this->getConfig('containerResizeSpeed', 'lightboxclone')){
            $js_string .= "'containerResizeSpeed' : " . $this->getConfig('containerResizeSpeed', 'lightboxclone') . "," . PHP_EOL;
        }
        if($this->getConfig('containerResizeSpeed', 'lightboxclone')){
            $js_string .= "'containerResizeSpeed' : " . $this->getConfig('containerResizeSpeed', 'lightboxclone') . "," . PHP_EOL;
        }
        if($this->getConfig('containerResizeSpeed', 'lightboxclone')){
            $js_string .= "'containerResizeSpeed' : " . $this->getConfig('containerResizeSpeed', 'lightboxclone') . "," . PHP_EOL;
        }

        $js_string .= "'imageBlank' : '" . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . "lightboxes/jquery-lightbox-0.5/images/lightbox-blank.gif'," . PHP_EOL;
        $js_string .= "'imageLoading' : '" . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . "lightboxes/jquery-lightbox-0.5/images/lightbox-ico-loading.gif'," . PHP_EOL;
        $js_string .= "'imageBtnClose' : '" . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . "lightboxes/jquery-lightbox-0.5/images/lightbox-btn-close.gif'," . PHP_EOL;
        $js_string .= "'imageBtnPrev' : '" . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . "lightboxes/jquery-lightbox-0.5/images/lightbox-btn-prev.gif'," . PHP_EOL;
        $js_string .= "'imageBtnNext' : '" . Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . "lightboxes/jquery-lightbox-0.5/images/lightbox-btn-next.gif'" . PHP_EOL;
	$js_string = rtrim($js_string, ",".PHP_EOL).PHP_EOL;
        return $js_string;
    }

    public function getPiroboxJsConfig(){
        $js_string = '';
        if($this->getConfig('my_speed', 'pirobox')){
            $js_string .= "'my_speed' : " . $this->getConfig('my_speed', 'pirobox') . "," . PHP_EOL;
        }
        if($this->getConfig('bg_alpha', 'pirobox')){
            $js_string .= "'bg_alpha' : " . $this->getConfig('bg_alpha', 'pirobox') . "," . PHP_EOL;
        }
        if($this->getConfig('slideShow', 'pirobox')){
            $js_string .= "'slideShow' : " . $this->getConfig('slideShow', 'pirobox') . "," . PHP_EOL;
        }
        if($this->getConfig('slideSpeed', 'pirobox')){
            $js_string .= "'slideSpeed' : " . $this->getConfig('slideSpeed', 'pirobox') . "," . PHP_EOL;
        }

        $js_string .= "close_all : '.piro_close,.piro_overlay'" . PHP_EOL;
	$js_string = rtrim($js_string, ",".PHP_EOL).PHP_EOL;

        return $js_string;
    }
}