<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    lionvc <lionvc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/lionvc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace lionvc\Laracms\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use lionvc\Laracms\Models\Setting;
use lionvc\Laracms\Handlers\AdministratorMenuHandler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    // 注册模型观察者
		\lionvc\Laracms\Models\User::observe(                  \lionvc\Laracms\Observers\UserObserver::class);
		\lionvc\Laracms\Models\WechatMenu::observe(            \lionvc\Laracms\Observers\WechatMenuObserver::class);
		\lionvc\Laracms\Models\Wechat::observe(                \lionvc\Laracms\Observers\WechatObserver::class);
		\lionvc\Laracms\Models\Block::observe(                 \lionvc\Laracms\Observers\BlockObserver::class);
		\lionvc\Laracms\Models\Link::observe(                  \lionvc\Laracms\Observers\LinkObserver::class);
		\lionvc\Laracms\Models\Project::observe(               \lionvc\Laracms\Observers\ProjectObserver::class);
		\lionvc\Laracms\Models\Category::observe(              \lionvc\Laracms\Observers\CategoryObserver::class);
		\lionvc\Laracms\Models\Navigation::observe(            \lionvc\Laracms\Observers\NavigationObserver::class);
		\lionvc\Laracms\Models\Page::observe(                  \lionvc\Laracms\Observers\PageObserver::class);
		\lionvc\Laracms\Models\Article::observe(               \lionvc\Laracms\Observers\ArticleObserver::class);
		\lionvc\Laracms\Models\Slide::observe(                 \lionvc\Laracms\Observers\SlideObserver::class);
		\lionvc\Laracms\Models\File::observe(                  \lionvc\Laracms\Observers\FileObserver::class);
		\lionvc\Laracms\Models\WechatResponse::observe(        \lionvc\Laracms\Observers\WechatResponseObserver::class);
		\lionvc\Laracms\Models\Reply::observe(                 \lionvc\Laracms\Observers\ReplyObserver::class);
		\lionvc\Laracms\Models\Log::observe(                   \lionvc\Laracms\Observers\LogObserver::class);
		\lionvc\Laracms\Models\MultipleFile::observe(          \lionvc\Laracms\Observers\MultipleFileObserver::class);
		\lionvc\Laracms\Models\Form::observe(                  \lionvc\Laracms\Observers\FormObserver::class);

        // 设置时区
        \Carbon\Carbon::setLocale('zh');


        // 检测是否在命令行模式
        if ($this->app->runningInConsole()) {
           // 命令行模式
        }
        else{
            // 非命令行模式
            Setting::afflux();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
