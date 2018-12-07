<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use YourAppRocks\EloquentUuid\Traits\HasUuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

/**
 * App\Contas
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $username
 * @property string|null $password
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta findByUuid($uuid, $firstOrFail = true)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Conta onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conta whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Conta withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Conta withoutTrashed()
 * @mixin \Eloquent
 */
class Conta extends Authenticatable implements JWTSubject
{
    use SoftDeletes;
    use HasUuid;

    public $fillable = [
        'username',
        'password',
        'user_id',
    ];

    public $hidden = [
        'password'
    ];

    public function validaUser($request){

        $user = $request->input('user');
        $pass = $request->input('pass');

        $count = DB::table('contas')
                            ->where('usuario', $user)
                            ->where('senha', $pass)
                            ->count();

        if($count == 0){
            $usuarioTemp = $user;
            return Redirect::back();
        }else{
            return redirect('home/');
        }
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
