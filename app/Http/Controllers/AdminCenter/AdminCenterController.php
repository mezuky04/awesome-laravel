<?php

namespace App\Http\Controllers\AdminCenter;

use App\Events\ResourceApproved;
use App\Events\ResourceDeclined;
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
        return Resource::select('resources.id', 'resources.name', 'resources.short_description', 'resources.link', 'resources.user_id',
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

        // Update status and fire event
        Resource::where('id', $resourceId)->update(['checked' => true]);
        event(new ResourceApproved(Resource::where('id', $resourceId)->first()));

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
        
        // Update status and fire event
        Resource::where('id', $resourceId)->update(['checked' => true, 'allowed' => false]);
        event(new ResourceDeclined(Resource::where('id', $resourceId)->first()));
        
        return response()->json(['success' => true]);
    }
}