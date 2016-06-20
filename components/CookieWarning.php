<?php namespace TimMarner\WebsiteSetup\Components;

use Cms\Classes\ComponentBase;

/**
 * Class CookieWarning
 *
 * @package TimMarner\Websitesetup\Components
 */
class CookieWarning extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Warning',
            'description' => 'Displays EU Cookie Warning',
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
     * Cookie Warning onRun Method
     */
    public function onRun()
    {
        $this->addJs('/plugins/timmarner/websitesetup/assets/js/cookie.js');
        $this->addCss('/plugins/timmarner/websitesetup/assets/css/cookie.css');

    }

}