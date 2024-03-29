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

use Illuminate\Database\Eloquent\Model as EloquentModel;
use lionvc\Laracms\Models\Traits\WithOrderHelper;
use lionvc\Laracms\Models\Traits\WithMultipleFilesTraits;

class Model extends EloquentModel
{
    use WithOrderHelper;
    use WithMultipleFilesTraits;


}
