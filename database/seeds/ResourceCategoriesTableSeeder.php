<?php

use Illuminate\Database\Seeder;

/**
 * Seeds resource_categories table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourceCategoriesTableSeeder extends Seeder {

    public function run() {

        $categories = [
            ['name' => 'Articles'],
            ['name' => 'Tutorials'],
            ['name' => 'Essentials']
        ];

        foreach ($categories as $category) {
            \App\ResourceCategory::create($category);
        }
    }

}