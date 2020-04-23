<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Models\Famaly
 *
 * @property int    $id
 * @property string $name
 * @mixin Eloquent
 */
class Family extends Model
{
    public $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
