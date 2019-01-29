<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function get($pageSize = 3) {
        return User::paginate($pageSize);
    }

    public function doDelete() {
        $this->delete();
    }

    public function doCreate($user) {
        $user['password'] = bcrypt($user['password']);
        $this->create($user);
    }

    public function doUpdate($user) {
        if($user['password']) {
            $user['password'] = bcrypt($user['password']);
        } else {
            unset($user['password']);
        }
        $this->update($user);
    }
}
