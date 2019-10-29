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

namespace lionvc\Laracms\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 幻灯模型
 *
 * Class Slide
 * @package lionvc\Laracms\Models
 */
class Slide extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id','object_id', 'group', 'title', 'description', 'target', 'link', 'image', 'order', 'status'];
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    /**
     * 追加过滤条件
     *
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', '1');
    }

}
