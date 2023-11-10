<?php

namespace Admingate\Base\Providers;

use Assets;
use Admingate\ACL\Models\UserMeta;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use RvMedia;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot(Factory $view): void
    {
        $view->composer(['core/base::layouts.partials.top-header', 'core/acl::auth.master'], function (View $view) {
            $themes = Assets::getThemes();

            $defaultTheme = setting('default_admin_theme', config('core.base.general.default-theme'));

            if (Auth::check() && ! session()->has('admin-theme') && ! app()->environment('demo')) {
                $activeTheme = UserMeta::getMeta('admin-theme', $defaultTheme);
            } elseif (session()->has('admin-theme')) {
                $activeTheme = session('admin-theme');
            } else {
                $activeTheme = $defaultTheme;
            }

            if (! array_key_exists($activeTheme, $themes)) {
                $activeTheme = $defaultTheme;
            }

            if (array_key_exists($activeTheme, $themes)) {
                Assets::addStylesDirectly($themes[$activeTheme]);
            }

            session(['admin-theme' => $activeTheme]);

            $view->with(compact('themes', 'activeTheme'));
        });

        $view->composer(['core/media::config'], function () {
            $mediaPermissions = RvMedia::getConfig('permissions');
            if (Auth::check() && ! Auth::user()->isSuperUser()) {
                $mediaPermissions = array_intersect(array_keys(Auth::user()->permissions), $mediaPermissions);
            }

            RvMedia::setPermissions($mediaPermissions);
        });
    }
}