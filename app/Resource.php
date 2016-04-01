<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Resource model.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class Resource extends Model {
    protected $guarded = ['checked'];
}
