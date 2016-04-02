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

    /**
     * Get all resources for given category.
     *
     * @param $categoryName
     * @return mixed
     */
    public function getResources($categoryName) {
        return DB::table('resources')->leftJoin('resource_categories', 'resources.resource_category_id', '=', 'resource_categories.id')
            ->where('resource_categories.name', $categoryName)
            ->where('checked', true)
            ->orderBy('resources.created_at', 'desc')
            ->get();
    }

    /**
     * Get last resources added.
     *
     * @return mixed
     */
    public function getLastResources() {
        return Resource::where('checked', true)->orderBy('created_at', 'desc')->take(10)->get();
    }
    
}