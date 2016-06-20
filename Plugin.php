<?php namespace TimMarner\WebsiteSetup;

use System\Classes\PluginBase;

/**
 * WebsiteSetup Plugin Information File
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
            'name'        => 'WebsiteSetup',
            'description' => 'timmarner.websitesetup::lang.keys.plugin_desc',
            'author'      => 'timmarner',
            'icon'        => 'icon-user',
        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'timmarner.websitesetup::lang.keys.plugin_name',
                'description' => 'timmarner.websitesetup::lang.keys.settings_desc',
                'icon'        => 'icon-user',
                'category'    => 'system::lang.system.categories.cms',
                'class'       => 'TimMarner\Websitesetup\Models\Settings',
                'permissions' => ['timmarner.websitesetup.access_Settings'],
                'order'       => 600,
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerFormWidgets()
    {
        return [
            'Owl\FormWidgets\Address\Widget' => [
                'label' => 'Address',
                'code' => 'owl-address'
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'timmarner.websitesetup.access_settings' => [
                'tab'   => 'timmarner.websitesetup::lang.keys.tab',
                'label' => 'timmarner.websitesetup::lang.keys.settings',
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'TimMarner\WebsiteSetup\Components\WebVariables'  => 'webvariables',
            'TimMarner\WebsiteSetup\Components\CookieWarning' => 'cookiewarning',
            'TimMarner\WebsiteSetup\Components\Map'           => 'mymap',
        ];
    }

    /**
     * @return array
     */
    public function registerPageSnippets()
    {
        return [
            'TimMarner\WebsiteSetup\Components\Map'           => 'mymap',
        ];
    }


}
