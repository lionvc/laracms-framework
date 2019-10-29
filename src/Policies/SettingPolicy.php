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

namespace lionvc\Laracms\Policies;

use lionvc\Laracms\Models\User;
use lionvc\Laracms\Models\Setting;

/**
 * 设置授权策略
 *
 * Class SettingPolicy
 * @package lionvc\Laracms\Policies
 */
class SettingPolicy extends Policy
{

    public function basic(User $user, Setting $setting)
    {
        return $user->can("manage_site_basic");
    }

    public function company(User $user, Setting $setting)
    {
        return $user->can("manage_site_company");
    }

    public function contact(User $user, Setting $setting)
    {
        return $user->can("manage_site_contact");
    }
}
