<?php

declare(strict_types=1);
/**
 *
 * This is my open source code, please do not use it for commercial applications.
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code
 *
 * @author CodingHePing<847050412@qq.com>
 * @link   https://github.com/Hyperf-Glory/socket-io
 */
namespace App\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $tag_name
 * @property int $sort
 * @property \Carbon\Carbon $created_at
 */
class ArticleTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'tag_name', 'sort', 'created_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'sort' => 'integer', 'created_at' => 'datetime'];
}
