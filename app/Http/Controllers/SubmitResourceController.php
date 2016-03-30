<?php

namespace App\Http\Controllers;

/**
 * Allow users to submit resources.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class SubmitResourceController extends Controller {

    /**
     * Render submit resource page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.submit-resource');
    }
    
}