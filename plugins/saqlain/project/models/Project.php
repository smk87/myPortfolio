<?php namespace Saqlain\Project\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saqlain_project_';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $attachOne = [
        'thumbnail' => 'System\Models\File'
    ];

    public $attachMany = [
        'ss' => 'System\Models\File'
    ];
}