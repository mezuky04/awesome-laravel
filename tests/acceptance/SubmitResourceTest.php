<?php

class SubmitResourceTest extends TestCase {

    use \Illuminate\Foundation\Testing\DatabaseTransactions;
    use \Illuminate\Foundation\Testing\WithoutMiddleware;

    public function testSubmitResourceWithEmptyName() {

        $data = [
            'short_resource_description' => 'This is a test short resource description',
            'resource_link' => 'awesome-laravel.com',
            'your_email' => 'alex@bitller.com'
        ];

        $response = $this->call('POST', '/submit-resource')->getContent();
        dd($response);
    }

}