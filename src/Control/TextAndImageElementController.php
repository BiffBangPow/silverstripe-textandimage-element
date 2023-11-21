<?php

namespace BiffBangPow\Element\Control;

use BiffBangPow\Element\TestimonialsElement;
use DNADesign\Elemental\Controllers\ElementController;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class TextAndImageElementController extends ElementController
{
    protected function init()
    {
        parent::init();
        $themeCSS = ThemeResourceLoader::inst()->findThemedCSS('client/dist/css/elements/textandimage');
        if ($themeCSS) {
            Requirements::css($themeCSS, '', ['defer' => true]);
        }
    }
}
