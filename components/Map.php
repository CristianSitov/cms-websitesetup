<?php namespace TimMarner\WebsiteSetup\Components;

use Cms\Classes\ComponentBase;
use TimMarner\WebsiteSetup\Models\Settings;


/**
 * Class Map
 *
 * @package TimMarner\Websitesetup\Components
 */
class Map extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'MyMap',
            'description' => 'timmarner.websitesetup::lang.keys.mymap_desc',
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * MyLocation onRun method
     */
    public function onRun()
    {


        if (Settings::get('location')) {
            $this->page['current_location'] = Settings::get('location');
        } else {
            $this->page['current_location'] = 'not_set';
        }

        if (Settings::get('google_key')) {
            $this->page['google_key'] = Settings::get('google_key');
        } else {
            $this->page['google_key'] = 'not_set';
        }
        if (Settings::get('map_width')) {
            $this->page['map_width'] = Settings::get('map_width');
        } else {
            $this->page['map_width'] = '100%';
        }
        if (Settings::get('map_height')) {
            $this->page['map_height'] = Settings::get('map_height');
        } else {
            $this->page['map_height'] = '300px';
        }
        if (Settings::get('map_frameborder')) {
            $this->page['map_frameborder'] = Settings::get('map_frameborder');
        } else {
            $this->page['map_frameborder'] = '0';
        }
        if (Settings::get('map_style')) {
            $this->page['map_style'] = Settings::get('map_style');
        } else {
            $this->page['map_style'] = 'border: 0px';
        }
        if (Settings::get('map_container_class')) {
            $this->page['map_container_class'] = Settings::get('map_container_class');
        } else {
            $this->page['map_container_class'] = 'map-defaults';
        }
    }

}