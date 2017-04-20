<?php namespace TimMarner\WebsiteSetup\Models;

use Cache;
use October\Rain\Database\Model;

/**
 * Class Settings
 *
 * @package TimMarner\WebsiteSetup\Models
 */
class Settings extends Model
{

    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var array
     */
    protected $guarded = ['*'];


    /**
     * @var array
     */

    protected $fillable =
        [
            'facebook_id',
            'facebook_app_id',
            'twitter_id',
            'linkedin_id',
            'linkedin_account',
            'googleplus_id',
            'googleplus_alias',
            'google_verification_code',
            'youtube_id',
            'youtube_channel',
            'email',
            'more_emails',
            'more_phones',
            'email2',
            'email3',
            'email4',
            'email5',
            'phone2',
            'phone3',
            'phone4',
            'phone5',
            'skype',
            'phone',
            'reddit_id',
            'dribble_id',
            'tumblr_id',
            'pinterest_id',
            'instagram_id',
            'pinterest_domain_verify',
            'tumblr_alias',
            'website_charset',
            'website_title',
            'website_description',
            'website_keywords',
            'website_favico',
            'website_robots',
            'website_revisit',
            'default_og_title',
            'default_og_description',
            'og_image',
            'default_og_video',
            'default_og_type',
            'default_twitter_title',
            'default_twitter_description',
            'twitter_image',
            'twitter_card',
            'twitter_site',
            'twitter_player',
            'twitter_player_width',
            'twitter_player_height',
            'twitter_player_stream',
            'twitter_player_stream_content_type',
            'company_name',
            'company_street',
            'company_city',
            'company_zip',
            'company_country',
            'company_vat',
            'company_number',
            'location',
            'google_key',
            'map_width',
            'map_height',
            'map_container_class',
            'map_style',
            'map_frameborder',
            'default_tile_background',
            'windows_image',
            'maintenance_logo',
            'maintenance_message',
            'maintenance_bg',
            'maintenance_logo_position',
            'maintenance_social_color',
            'maintenance_social_background',
            'maintenance_padding',
            'maintenance_logowidth'
        ];

    /**
     * @var string
     */
    public $settingsCode = 'timmarner::websitesetup.settings';

    /**
     * @var array
     */
    public $attachOne = [
        'website_icon'             => ['System\Models\File'],
        'website_logo'             => ['System\Models\File'],
        'twitter_image'            => ['System\Models\File'],
        'og_image'                 => ['System\Models\File'],
        'windows_image'            => ['System\Models\File'],
        'maintenance_logo'         => ['System\Models\File'],
        'maintenance_bg'           => ['System\Models\File'],
    ];
    /**
     * @var string The database table used by the model.
     */
    public $settingsFields = 'fields.yaml';


    public function afterSave()
    {
        Cache::forget('websitesetup_settings');
    }

}
