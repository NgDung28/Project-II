<?php
/**
 * Created by PhpStorm.
 * User: DELL PC
 * Date: 5/15/2017
 * Time: 10:26
 */

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class hospital extends Eloquent
{
    protected $collection = 'hospital';

}