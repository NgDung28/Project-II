<?php
/**
 * Created by PhpStorm.
 * User: DELL PC
 * Date: 5/19/2017
 * Time: 08:35
 */

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class medicalRecord extends Eloquent
{
    protected $collection = 'medicalRecord';

}