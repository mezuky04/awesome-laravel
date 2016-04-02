<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Support\Facades\DB;

/**
 * Handle work with resources.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourcesController extends Controller {

    public function getResources($categoryName) {
        return DB::table('resources')->leftJoin('resource_categories', 'resources.resource_category_id', '=', 'resource_categories.id')
            ->where('resource_categories.name', $categoryName)
            ->get();
    }

    public function getLastResources() {
        return Resource::orderBy('created_at', 'desc')->take(10)->get();
    }
    
}