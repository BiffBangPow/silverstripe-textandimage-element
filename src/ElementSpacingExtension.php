<?php

namespace BiffBangPow\Extension;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldGroup;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class ElementSpacingExtension extends DataExtension
{
    private static $db = [
        'PadTop' => 'Boolean(1)',
        'PadRight' => 'Boolean(0)',
        'PadBottom' => 'Boolean(1)',
        'PadLeft' => 'Boolean(0)',
        'MarginTop' => 'Boolean(1)',
        'MarginRight' => 'Boolean(0)',
        'MarginBottom' => 'Boolean(1)',
        'MarginLeft' => 'Boolean(0)'
    ];

    private static $defaults = [
        'PadTop' => true,
        'PadRight' => false,
        'PadBottom' => true,
        'PadLeft' => false,
        'MarginTop' => true,
        'MarginRight' => false,
        'MarginBottom' => true,
        'MarginLeft' => false
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName([
            'PadTop',
            'PadRight',
            'PadBottom',
            'PadLeft',
            'MarginTop',
            'MarginRight',
            'MarginBottom',
            'MarginLeft'
        ]);
        $fields->addFieldsToTab('Root.ElementSpacing', [
            FieldGroup::create('Padding',
                CheckboxField::create('PadTop'),
                CheckboxField::create('PadRight'),
                CheckboxField::create('PadBottom'),
                CheckboxField::create('PadLeft')
            ),
            FieldGroup::create('Margin',
                CheckboxField::create('MarginTop'),
                CheckboxField::create('MarginRight'),
                CheckboxField::create('MarginBottom'),
                CheckboxField::create('MarginLeft')
            )
        ]);
    }
}