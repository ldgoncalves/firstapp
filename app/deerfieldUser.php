<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/14/16
 * Time: 7:41 PM
 */

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class deerfieldUser extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $table = 'deerfieldUsers';
}