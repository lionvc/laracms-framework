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

/**
 * 中国行政区
 *
 * Class Block
 * @package lionvc\Laracms\Models
 */
class District extends Model
{
    protected $fillable = ['id','citycode', 'adcode', 'name', 'level', 'center', 'parent'];
}
