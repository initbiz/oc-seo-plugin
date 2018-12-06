<?php

namespace Arcane\Seo\Models;

use Model;

class Settings extends Model{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'arcainz_arcane_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    protected $cache = [];


    public function getPageOptions() {
        return \Cms\Classes\Page::getNameList();
    }

} 