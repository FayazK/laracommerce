<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\models\Post
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property integer $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\models\Post whereUpdatedAt($value)
 */
class Post extends Model
{
    //
}
