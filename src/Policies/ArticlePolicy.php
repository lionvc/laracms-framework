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
use lionvc\Laracms\Models\Article;

/**
 * 文章授权策略
 *
 * Class ArticlePolicy
 * @package lionvc\Laracms\Policies
 */
class ArticlePolicy extends Policy
{
    public function index(User $user, Article $article)
    {
        return $user->can('manage_article');
    }

    public function create(User $user, Article $article)
    {
        return $user->can('manage_article');
    }

    public function update(User $user, Article $article)
    {
        return $user->can('manage_article');
    }

    public function destroy(User $user, Article $article)
    {
        return $user->can('manage_article');
    }
}
