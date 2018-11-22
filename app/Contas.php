<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Contas extends Model
{
    use SoftDeletes;
    use HasUuid;

    public $fillable = [
        'username',
        'password',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
