<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Support\Facades\Auth;
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
        return DB::table('resources')
            ->select('resources.id', 'resources.name', 'resources.short_description', 'resources.link', 'resource_categories.id as category_id', 'resource_categories.name as category_name')
            ->leftJoin('resource_categories', 'resources.resource_category_id', '=', 'resource_categories.id')
            ->where('resource_categories.name', $categoryName)
            ->where('checked', true)
            ->orderBy('resources.created_at', 'desc')
            ->get();
    }

    /**
     * Get top resources added.
     *
     * @return mixed
     */
    public function getTopResources() {
        return Resource::where('checked', true)->orderBy('clicks', 'desc')->take(10)->get();
    }

    /**
     * Increment resource clicks.
     *
     * @param int $resourceId
     */
    public function incrementClicks($resourceId) {
        Resource::where('id', $resourceId)->increment('clicks');
    }

}