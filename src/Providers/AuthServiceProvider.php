<?php

namespace lionvc\Laracms\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \lionvc\Laracms\Models\WechatResponse::class                  => \lionvc\Laracms\Policies\WechatResponsePolicy::class,
		 \lionvc\Laracms\Models\WechatMenu::class                      => \lionvc\Laracms\Policies\WechatMenuPolicy::class,
		 \lionvc\Laracms\Models\Wechat::class                          => \lionvc\Laracms\Policies\WechatPolicy::class,
		 \lionvc\Laracms\Models\Article::class                         => \lionvc\Laracms\Policies\ArticlePolicy::class,
		 \lionvc\Laracms\Models\Block::class                           => \lionvc\Laracms\Policies\BlockPolicy::class,
		 \lionvc\Laracms\Models\Link::class                            => \lionvc\Laracms\Policies\LinkPolicy::class,
		 \lionvc\Laracms\Models\Project::class                         => \lionvc\Laracms\Policies\ProjectPolicy::class,
		 \lionvc\Laracms\Models\Slide::class                           => \lionvc\Laracms\Policies\SlidePolicy::class,
		 \lionvc\Laracms\Models\Category::class                        => \lionvc\Laracms\Policies\CategoryPolicy::class,
		 \lionvc\Laracms\Models\Navigation::class                      => \lionvc\Laracms\Policies\NavigationPolicy::class,
		 \lionvc\Laracms\Models\File::class                            => \lionvc\Laracms\Policies\FilePolicy::class,
		 \lionvc\Laracms\Models\Setting::class                         => \lionvc\Laracms\Policies\SettingPolicy::class,
         \lionvc\Laracms\Models\User::class                            => \lionvc\Laracms\Policies\UserPolicy::class,
         \lionvc\Laracms\Models\Page::class                            => \lionvc\Laracms\Policies\PagePolicy::class,
         \lionvc\Laracms\Models\Reply::class                           => \lionvc\Laracms\Policies\ReplyPolicy::class,
         \lionvc\Laracms\Models\Form::class                            => \lionvc\Laracms\Policies\FormPolicy::class,

         \Spatie\Permission\Models\Role::class                             => \lionvc\Laracms\Policies\RolePolicy::class,
         \Spatie\Permission\Models\Permission::class                       => \lionvc\Laracms\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
