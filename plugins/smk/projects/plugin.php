<?php namespace Smk\Projects;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Project',
            'description' => 'Add developed project.',
            'author'      => 'Saqlain',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Smk\Projects\Components\Project' => 'projectList'
        ];
    }
}