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

namespace lionvc\Laracms\Observers;

use lionvc\Laracms\Models\Slide;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 幻灯观察者
 *
 * Class SlideObserver
 * @package lionvc\Laracms\Observers
 */
class SlideObserver
{
    public function creating(Slide $slide)
    {
        $slide->object_id = create_object_id();
        $slide->status = '1';
        $slide->order = 9999;
    }


    public function updating(Slide $slide)
    {
        
    }
}
