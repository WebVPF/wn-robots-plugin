<?php namespace WebVPF\Robots\Models;

use Model;

class Txt extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var array Behaviors implemented by this model.
     */
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    /**
     * @var string Unique code
     */
    public $settingsCode = 'webvpf_robots';

    /**
     * @var mixed Settings form field definitions
     */
    public $settingsFields = 'fields.yaml';

    /**
     * @var array Validation rules
     */
    public $rules = [];
}
