<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Models\Animals
 *
 * @property int    $id
 * @property string $name
 * @property string $nickname
 * @property string $photo
 * @mixin Eloquent
 */
class Animals extends Model
{
    public $fillable = [
        'name',
        'nickname',
        'photo'
    ];

    protected $hidden = [
        'famaly_id',
        'created_at',
        'updated_at',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}
