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

namespace lionvc\Laracms\Listeners;

use Ip;
use DB;
use Log;
use Request;
use Illuminate\Support\Carbon;
use Vod\Request\V20170321 as Vod;
use lionvc\Laracms\Jobs\GetVodCoverURL;


class ArticleEventSubscriber
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param $event
     */
    public function onArticleSaved($event){

    }

    /**
     * 更新 Vod 视频缩略图
     *
     * @param $event
     */
    public function onVideoSaved($event){
        $article = $event->article;
        $attribute = json_decode($article->attribute, true);

        if( $attribute['video_id'] ){ // 更新 vod 视频缩略图
            // 分发任务, 30 秒后
            GetVodCoverURL::dispatch($article->id, $attribute, 0)->delay(now()->addSeconds(30));
        }

    }


    /**
     * 为订阅者注册监听器。
     *
     * @param
     */
    public function subscribe($events)
    {
        $events->listen(
            'lionvc\Laracms\ArticleSavedEvent',
            'lionvc\Laracms\Listeners\ArticleEventSubscriber@onArticleSaved'
        );

        $events->listen(
            'lionvc\Laracms\VideoSavedEvent',
            'lionvc\Laracms\Listeners\UserEventSubscriber@onVideoSaved'
        );

    }
}
