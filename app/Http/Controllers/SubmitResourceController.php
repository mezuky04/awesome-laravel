<?php

namespace App\Http\Controllers;

use App\Resource;
use App\ResourceCategory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Allow users to submit new resources.
     *
     * @param Request $request
     * @return mixed
     */
    public function submitResource(Request $request) {
        $this->validate($request, [
            'resource_name' => ['required', 'string', 'between:3,50'],
            'short_resource_description' => ['required', 'string', 'between:5,50'],
            'resource_link' => ['required'],
            'category_id' => ['required', 'exists:resource_categories,id']
        ]);

        Resource::create([
            'name' => $request->get('resource_name'),
            'link' => $request->get('resource_link'),
            'short_description' => $request->get('short_resource_description'),
            'contributor_email' => Auth::user()->email,
            'resource_category_id' => $request->get('category_id')
        ]);
        
        return response()->json(['success' => true]);
    }

    /**
     * Return all categories in json format.
     *
     * @return mixed
     */
    public function getCategories() {
        $categories = ResourceCategory::select('id', 'name')->get();
        return response()->json($categories);
    }

    /**
     * Custom format for validation errors.
     *
     * @param Validator $validator
     * @return array
     */
    protected function formatValidationErrors(Validator $validator) {

        $validatedFields = ['resource_name', 'short_resource_description', 'resource_link', 'category_id'];

        $messages = $validator->messages();
        $errors = [];

        foreach ($validatedFields as $field) {
            if ($messages->has($field)) {
                $errors[$field] = $messages->first($field);
            }
        }

        return [
            'success' => false,
            'errors' => $errors
        ];
    }
}