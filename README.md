## INTRODUCTION

jQuery lightboxes is the collection/implementation of jQuery Lightbox for Magento Media Gallery. Moreover consider it as an one stop search for jQuery Lightbox for magento.
Currently it includes the FancyBox, PiroBox and Lightbox Clone one. Still more to come in newer versions.

## FEATURES

- Upgrade proof Module.
- Checked for Magento Versions 1.3.x - 1.6.1.0
- Includes FancyBox, PiroBox & Lightbox Clone.
- Flexible Customization for FancyBox, PiroBox & LightBox Clone.
- Option to remove default Zoom Bar.
- Option to give the custom size for the main image.
- Option to give the custom size for the thumnail image(ref: gallery images)
- Opton to give custom size for the lightbox Popup Images.
- Option to include jQuery file from google CDN
- Option to include jQuery file with noConflict().
- Option to switch over different types of lightbox.
- Option to include the lighbox files globally so that it can be used for custom modules, CMS pages, static blocks etc.


## INSTALLATION

Attention!! Before installation, be sure to disable the cache from backend: System > Cache Management or refresh the Cache after installation.
1> Just drag & drop the 'app' folder in your root of Magento installation.
Note: This will not override the 'app' folder of your Magento installation but new folder/files of the extensions will be placed instead.

## CONFIGURATION

Attention!! Be sure to logout & re-login before configuration else you will get '404 Error (Page not found)' in System > Configuration Page.
1> After installation go to Admin:
System >> Configuration >> MagePsycho Extensions >> jQuery LightBoxes >> Manage your setting here.

--------------------------------------------------------
Example:
--------------------------------------------------------

General Settings
--------------------------------------------------------
Enabled			= Yes
Lightbox Type		= Fancybox
Main Image Size		= Default: 265x265	
Thumbnail Size		= Default: 57x57
Popup Image Size	= Default: full size
Disable Zoom Bar	= Yes

JS File Settings
--------------------------------------------------------
Include jQuery file 			= Yes
Include jQuery file in			= Head
Include lightbox files in 		= Head
Include Lightbox files globally		= No
Lightbox initialization code for global usage = paste the initialization code here (only enabled if above option = Yes)
Include lightbox initialization code in = Media


## INSTALLATION / CONFIGURATION NOTES

0> Disable the Cache before Installation or Refresh the Cache after Installation.
1> If you get 'Access Denied' error in System > Configuration, then try to logout & re-login.
2> If you have custom theme then try to copy the following files
app/design/frontend/default/default/layout/lightboxes.xml
app/design/frontend/default/default/template/lightboxes/*

to

app/design/frontend/[your-interface]/[your-theme]/layout/lightboxes.xml
app/design/frontend/[your-interface]/[your-theme]/template/lightboxes/*
5> Visit official site for more info: http://www.magepsycho.com/jquery-lightbox-es.html

## CHANGELOG

Version 1.0.3 - 1.1.0
- Code refinement.
- Fixing of popup image size so that it could take the full size when no size is mentioned.
- Separated the jquery inclusion, lightbox inclusion & lightbox initialization so that they can be called from multiple places.
- Added option for including jquery file in head or media.
- Added option for including lightbox file in head or media.
- Added option for including lightbox initialization code in head or media.
- Separated the lightbx group for main image and more views.
- Added option for including lightbox initialization code for global use so that you can just call the lightbox from any pages: custom module, cms pages, static blocks etc.
- Checked compatibility for Magento versions: 1.6.0.0 & 1.6.1.0

Version 1.0.2 - 1.0.3
- Fixing of title issue in Fancybox
- Fixing of offset issue in image size
- Fixing of IE issue due to extra ',' in initialization code
- Fixing of missing buttons in Lightbox clone
- Fixed the 404 error in 1.5.x
- Magento-Connect compatible with 1.5.x

Version 0.9.0 - 1.0.2
- Replaced the deprecated function split() with explode()
- Fixed the extension info page taking over the default configuration.
- Fixed the dependency on MagentoPycho_All module


## BUGS / NEW FEATURE REQUEST

http://www.magepsycho.com/contacts

## VISIT US FOR MORE FREE/COMMERCIAL EXTENSIONS

http://www.magepsycho.com/shop.html

## FOR SUPPORT

http://www.magepsycho.com/contacts


Happy E-Commerce!!
MagePsycho Team