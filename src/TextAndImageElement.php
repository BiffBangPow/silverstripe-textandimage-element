<?php

namespace BiffBangPow\Element;

use BiffBangPow\Extension\CallToActionExtension;
use BiffBangPow\Extension\TextPositionExtension;
use DNADesign\Elemental\Models\BaseElement;
use Sheadawson\Linkable\Forms\LinkField;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
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

    /**
     * @var array
     */
    private static $db = [
        'Text' => 'HTMLText',
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
        'Image',
    ];

    /**
     * @var array
     */
    private static $extensions = [
        TextPositionExtension::class,
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
                    ->setFolderName('ContentImages')
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
        return 'text-and-image-element';
    }
}
