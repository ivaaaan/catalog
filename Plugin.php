<?php namespace Iillexial\Catalog;

use System\Classes\PluginBase;

/**
 * catalog Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'catalog',
            'description' => 'No description provided yet...',
            'author'      => 'iillexial',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return ['Iillexial\Catalog\Components\Products' => 'catalog'];
    }
    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'Каталог',
                'url'         => \Backend::url('iillexial/catalog/products'),
                'icon'        => 'icon-list-alt',
                'order'       => 500,
                'sideMenu' => [
                    'products' => [
                        'label'       => 'Товары',
                        'icon'        => 'icon-list-alit',
                        'url'         => \Backend::url('iillexial/catalog/products'),
                    ],
                ]

            ]
        ];
    }

}
