<?php

namespace App\Http\Controllers;

/**
 * Contributors guide page.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ContributorsGuideController extends Controller {

    /**
     * @return mixed
     */
    public function index() {
        return view('pages.contributors-guide');
    }
    
}