<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Setting
 *
 * @property integer $id
 * @property string $name
 * @property string $value
 * @property string $site
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder| whereId($value)
 * @method static \Illuminate\Database\Query\Builder| whereName($value)
 * @method static \Illuminate\Database\Query\Builder| whereValue($value)
 * @method static \Illuminate\Database\Query\Builder| whereSite($value)
 * @method static \Illuminate\Database\Query\Builder| whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder| whereUpdatedAt($value)
 */
class Setting extends Model
{
    //
}
