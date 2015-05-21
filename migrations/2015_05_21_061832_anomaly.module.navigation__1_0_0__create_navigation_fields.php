<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleNavigation_1_0_0_CreateNavigationFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleNavigation_1_0_0_CreateNavigationFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'   => 'anomaly.field_type.text',
        'slug'   => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name'
            ]
        ],
        'parent' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\NavigationModule\Link\LinkModel'
            ]
        ],
        'type'   => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'      => 'extensions',
                'providing' => 'anomaly.module.navigation::link_type.*'
            ]
        ],
        'entry'  => 'anomaly.field_type.polymorphic'
    ];

}