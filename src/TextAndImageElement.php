<?php

namespace BiffBangPow\Element;

use BiffBangPow\Extension\CallToActionExtension;
use BiffBangPow\Extension\TextPositionExtension;
use DNADesign\Elemental\Models\BaseElement;
use Sheadawson\Linkable\Forms\LinkField;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;

class TextAndImageElement extends BaseElement
{
    /**
     * @var string
     */
    private static $table_name = 'ElementTextAndImage';
    private static $singular_name = 'text and image element';
    private static $plural_name = 'text and image elements';
    private static $description = 'Displays text with an image on either the left or right';
    private static $inline_editable = false;

    private static $width_classes = [
        'col-lg-3' => '1/4 width',
        'col-lg-4' => '1/3 width',
        'col-lg-6' => '1/2 width',
        'col-lg-8' => '2/3 width',
        'col-lg-9' => '3/4 width',
        'col-lg-12' => 'Full width'
    ];

    /**
     * @var array
     */
    private static $db = [
        'Text' => 'HTMLText',
        'ImageFirst' => 'Boolean',
        'ImageWidthClass' => 'Varchar'
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'Image' => Image::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'Image'
    ];

    private static $defaults = [
        'ImageWidthClass' => 'half'
    ];

    /**
     * @var array
     */
    private static $extensions = [
        CallToActionExtension::class
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                UploadField::create('Image')
                    ->setAllowedFileCategories('image/supported')
                    ->setFolderName('ContentImages'),
                DropdownField::create('ImageWidthClass', 'Limit image width on larger screens',
                    $this->config()->get('width_classes'))
            ]
        );

        return $fields;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Text and Image';
    }

    public function getSimpleClassName()
    {
        return 'bbp-text-and-image-element';
    }
}
