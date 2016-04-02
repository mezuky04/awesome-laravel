<?php

namespace App\Http\Controllers\AdminCenter;

use App\Http\Controllers\Controller;
use App\Resource;
use Illuminate\Http\Request;

/**
 * Admin center logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class AdminCenterController extends Controller {

    /**
     * Render admin center index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.admin-center');
    }

    /**
     * @return mixed
     */
    public function getPendingRequests() {
        return Resource::select('resources.id', 'resources.name', 'resources.short_description', 'resources.link', 'resources.contributor_email',
            'resource_categories.name as category')
            ->leftJoin('resource_categories', 'resource_categories.id', '=', 'resources.resource_category_id')
            ->where('checked', false)->get();
    }

    /**
     * Accept resource request.
     * 
     * @param int $resourceId
     * @param Request $request
     */
    public function acceptResourceRequest($resourceId, Request $request) {
        Resource::where('id', $resourceId)->update(['checked' => true]);
        return response()->json(['success' => true]);
    }

    /**
     * Decline resource request.
     *
     * @param int $resourceId
     * @param Request $request
     * @return mixed
     */
    public function declineResourceRequest($resourceId, Request $request) {
        Resource::where('id', $resourceId)->delete();
        return response()->json(['success' => true]);
    }
}