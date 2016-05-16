<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/14/16
 * Time: 7:39 PM
 */

namespace App; // needs namespace

use Illuminate\Database\Eloquent\Model; //to call for Eloquent model

class Shopping extends Model
{
    public $timestamps = false;
    public $table = 'shopping';
}