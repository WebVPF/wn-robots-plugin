<?php namespace WebVPF\Robots;

use Backend\Models\UserRole;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'webvpf.robots::lang.plugin.name',
            'description' => 'webvpf.robots::lang.plugin.description',
            'author'      => 'WebVPF',
            'icon'        => 'icon-robot',
            'homepage'    => 'https://github.com/WebVPF/wn-robots-plugin',
        ];
    }

    public function registerPermissions(): array
    {
        return [
            'webvpf.robots' => [
                'tab' => 'webvpf.robots::lang.plugin.name',
                'label' => 'webvpf.robots::lang.permissions.access',
                'roles' => [UserRole::CODE_DEVELOPER],
            ],
        ];
    }

    public function registerSettings(): array
    {
        $laravel_version = explode('.', \Illuminate\Foundation\Application::VERSION)[0];

        return [
            'txt' => [
                'label'       => 'Robots.txt',
                'description' => 'webvpf.robots::lang.settings.menu_desc',
                'category'    => SettingsManager::CATEGORY_CMS,
                'icon'        => $laravel_version < 9 ? 'icon-android' : 'icon-robot',
                'class'       => \WebVPF\Robots\Models\Txt::class,
                'order'       => 299,
                'keywords'    => 'robots seo',
                'permissions' => ['webvpf.robots'],
            ],
        ];
    }
}
