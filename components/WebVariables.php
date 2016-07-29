<?php namespace TimMarner\WebsiteSetup\Components;

use Cms\Classes\ComponentBase;
use TimMarner\WebsiteSetup\Models\Settings;
use Cache;

/**
 * Class WebVariables
 *
 * @package TimMarner\WebsiteSetup\Components
 */
class WebVariables extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'timmarner.websitesetup::lang.keys.myvariables',
            'description' => 'timmarner.websitesetup::lang.keys.myvariables_desc',

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
     * WebVariables onRun method
     */
    public function onRun()
    {
        $settings = Settings::instance();

        if ($settings->facebook_id) {
            $this->page[ 'facebook_id' ] = $settings->facebook_id;
            $this->page[ 'link_facebook' ] = 'https://facebook.com/'.$settings->facebook_id;
        }
        if ($settings->facebook_app_id) {
            $this->page[ 'facebook_app_id' ] = $settings->facebook_app_id;
        }
        if ($settings->twitter_id) {
            $this->page[ 'twitter_id' ] = $settings->twitter_id;
            $this->page[ 'link_twitter' ] = 'https://twitter.com/'.$settings->twitter_id;
        }
        if ($settings->instagram_id) {
            $this->page[ 'instagram_id' ] = $settings->instagram_id;
            $this->page[ 'link_instagram' ] = 'https://www.instagram.com/'.$settings->instagram_id;
        }
        if ($settings->pinterest_id) {
            $this->page[ 'pinterest_id' ] = $settings->pinterest_id;
            $this->page[ 'link_pinterest' ] = 'https://pinterest.com/'.$settings->pinterest_id;
        } 
        if ($settings->pinterest_domain_verify) {
            $this->page[ 'pinterest_domain_verify' ] = $settings->pinterest_domain_verify;
        }
        if ($settings->phone) {
            $this->page[ 'phone' ] = $settings->phone;
            $this->page[ 'link_phone' ] = 'tel:'.$settings->phone;
        }
        if ($settings->phone2) {
            $this->page[ 'phone2' ] = $settings->phone2;
            $this->page[ 'link_phone2' ] = 'tel:'.$settings->phone2;
        }
        if ($settings->phone3) {
            $this->page[ 'phone3' ] = $settings->phone3;
            $this->page[ 'link_phone3' ] = 'tel:'.$settings->phone3;
        }
        if ($settings->phone4) {
            $this->page[ 'phone4' ] = $settings->phone4;
            $this->page[ 'link_phone4' ] = 'tel:'.$settings->phone4;
        }
        if ($settings->phone5) {
            $this->page[ 'phone5' ] = $settings->phone5;
            $this->page[ 'link_phone5' ] = 'tel:'.$settings->phone5;
        }
        if ($settings->linkedin_id) {
            $this->page[ 'linkedin_id' ] = $settings->linkedin_id;
            $this->page[ 'link_linkedin' ] = 'http://linkedin.com/in/'.$settings->linkedin_id;
        }
        if ($settings->email) {
            $this->page[ 'email' ] = $settings->email;
            $this->page[ 'link_email' ] = 'mailto:'.$settings->email;
        }
        if ($settings->email2) {
            $this->page[ 'email2' ] = $settings->email2;
            $this->page[ 'link_email2' ] = 'mailto:'.$settings->email2;
        }
        if ($settings->email3) {
            $this->page[ 'email3' ] = $settings->email3;
            $this->page[ 'link_email3' ] = 'mailto:'.$settings->email3;
        }
        if ($settings->email4) {
            $this->page[ 'email4' ] = $settings->email4;
            $this->page[ 'link_email4' ] = 'mailto:'.$settings->email4;
        }
        if ($settings->email5) {
            $this->page[ 'email5' ] = $settings->email5;
            $this->page[ 'link_email5' ] = 'mailto:'.$settings->email5;
        }
        if ($settings->youtube_id) {
            $this->page[ 'youtube_id' ] = $settings->youtube_id;
            $this->page[ 'link_youtube' ] = 'https://youtube.com/user/'.$settings->youtube_id;
        }
        if ($settings->dribble_id) {
            $this->page[ 'dribble_id' ] = $settings->dribble_id;
            $this->page[ 'link_dribble' ] = 'http:/dribble.com/'.$settings->dribble_id;
        }
        if ($settings->reddit_id) {
            $this->page[ 'reddit_id' ] = $settings->reddit_id;
            $this->page[ 'link_reddit' ] = 'http://reddit.com/user/'.$settings->reddit_id;
        }
        if ($settings->googleplus_id) {
            $this->page[ 'googleplus_id' ] = $settings->googleplus_id;
            $this->page[ 'link_googleplus' ] = 'https://plus.google.com/'.$settings->googleplus_id;
        }
        if ($settings->skype) {
            $this->page[ 'skype' ] = $settings->skype;
            $this->page[ 'link_skype' ] = 'skype:'.$settings->skype;
        }
        if ($settings->tumblr_id) {
            $this->page[ 'tumblr_id' ] = $settings->tumblr_id;
            $this->page[ 'link_tumblr' ] = $settings->tumblr_id;
        }
        if ($settings->website_charset) {
            $this->page[ 'website_charset' ] = $settings->website_charset;
        }
        if ($settings->website_title) {
            $this->page[ 'website_title' ] = $settings->website_title;
        }
        if ($settings->website_description) {
            $this->page[ 'website_description' ] = $settings->website_description;
        }
        if ($settings->website_keywords) {
            $this->page[ 'website_keywords' ] = $settings->website_keywords;
        }
        if ($settings->website_icon) {
            $this->page[ 'website_icon' ] = $settings->website_icon;
        }
        if ($settings->website_logo) {
            $this->page[ 'website_logo' ] = $settings->website_logo;
        }
        if ($settings->website_robots) {
            $this->page[ 'website_robots' ] = $settings->website_robots;
        }
        if ($settings->website_revisit) {
            $this->page[ 'website_revisit' ] = $settings->website_revisit;
        }
        if ($settings->default_og_title) {
            $this->page[ 'default_og_title' ] = $settings->default_og_title;
        }
        if ($settings->default_og_description) {
            $this->page[ 'default_og_description' ] = $settings->default_og_description;
        }
        if ($settings->og_image) {
            $this->page[ 'og_image' ] = $settings->og_image;
        }
        if ($settings->default_og_video) {
            $this->page[ 'default_og_video' ] = $settings->default_og_video;
        }
        if ($settings->default_og_type) {
            $this->page[ 'default_og_type' ] = $settings->default_og_type;
        }
        if ($settings->default_twitter_title) {
            $this->page[ 'default_twitter_title' ] = $settings->default_twitter_title;
        }
        if ($settings->default_twitter_description) {
            $this->page[ 'default_twitter_description' ] = $settings->default_twitter_description;
        }
        if ($settings->twitter_image) {
            $this->page[ 'twitter_image' ] = $settings->twitter_image;
        }
        if ($settings->twitter_card) {
            $this->page[ 'twitter_card' ] = $settings->twitter_card;
        }
        if ($settings->twitter) {
            $this->page[ 'twitter_site' ] = $settings->twitter;
        }
        if ($settings->twitter_player) {
            $this->page[ 'twitter_player' ] = $settings->twitter_player;
        }
        if ($settings->twitter_player_width) {
            $this->page[ 'twitter_player_width' ] = $settings->twitter_player_width;
        }
        if ($settings->twitter_player_height) {
            $this->page[ 'twitter_player_height' ] = $settings->twitter_player_height;
        }
        if ($settings->twitter_player_stream) {
            $this->page[ 'twitter_player_stream' ] = $settings->twitter_player_stream;
        }
        if ($settings->twitter_player_stream_content_type) {
            $this->page[ 'twitter_player_stream_content_type' ] = $this->twitter_player_stream_content_type;
        }
        if ($settings->company_name) {
            $this->page[ 'company_name' ] = $settings->company_name;
        }
        if ($settings->company_street) {
            $this->page[ 'company_street' ] = $settings->company_street;
        }
        if ($settings->company_zip) {
            $this->page[ 'company_zip' ] = $settings->company_zip;
        }
        if ($settings->company_city) {
            $this->page[ 'company_city' ] = $settings->company_city;
        }
        if ($settings->company_country) {
            $this->page[ 'company_country' ] = $settings->company_country;
        }
        if ($settings->company_vat) {
            $this->page[ 'company_vat' ] = $settings->company_vat;
        }
        if ($settings->company_number) {
            $this->page[ 'company_number' ] = $settings->company_number;
        }
        if ($settings->default_tile_title) {
            $this->page[ 'default_tile_title' ] = $settings->default_tile_title;
        }
        if ($settings->default_tile_background) {
            $this->page[ 'default_tile_background' ] = $settings->default_tile_background;
        }
        if ($settings->windows_image) {
            $this->page[ 'windows_image' ] = $settings->windows_image;
        }
        if ($settings->google_verification_code) {
            $this->page[ 'google_verification_code' ] = $settings->google_verification_code;
        }

        // Maintence Page Settings
        if ($settings->maintenance_bg) {
            $this->page[ 'maintenance_bg' ] = $settings->maintenance_bg;
        }
        if ($settings->maintenance_message) {
            $this->page[ 'maintenance_message' ] = $settings->maintenance_message;
        }
        if ($settings->maintenance_logo) {
            $this->page[ 'maintenance_logo' ] = $settings->maintenance_logo;
        }
        

        $url = $this->page->url;
        $params = $this->controller->vars[ 'this' ][ 'param' ];

        foreach ($params as $key => $value) {
            if (str_replace(':', '', $value) == $key) {
                $url = str_replace('?', '', str_replace($value, '', $url));
            } else {
                $url = str_replace('?', '', str_replace(':'.$key, $value, $url));
            }
        }

        $this->page[ 'page_raw_url' ] = $url;
    }

    /**
     * @param object $settings
     *
     * @return array
     */
    public function cacheImagePaths($settings)
    {
        $websiteIcon = $settings->website_icon;
        $websiteLogo = $settings->website_logo;
        $ogImage = $settings->og_image;
        $twitterImage = $settings->twitter_image;
        $windowsImage = $settings->windows_image;
        $toCache = [
            'website_icon'             => $websiteIcon,
            'website_logo'             => $websiteLogo,
            'og_image'                 => $ogImage,
            'twitter_image'            => $twitterImage,
            'windows_image'            => $windowsImage
        ];

        return $toCache;
    }
}