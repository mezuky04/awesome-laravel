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
            ['name' => 'Essentials'],
            ['name' => 'Code Snippets'],
            ['name' => 'Packages'],
            ['name' => 'Popular Packages'],
            ['name' => 'Development Setup'],
            ['name' => 'Application Hosting'],
            ['name' => 'Application Deployment'],
            ['name' => 'Articles, Tutorials, Blogs etc.'],
            ['name' => 'Videos'],
            ['name' => 'Conferences'],
            ['name' => 'Books'],
            ['name' => 'Starter Projects'],
            ['name' => 'Codebase for Reference'],
            ['name' => 'Newsletters'],
            ['name' => 'Podcasts'],
            ['name' => 'Community'],
            ['name' => 'Jobs'],
            ['name' => 'Hosted Development Tools'],
            ['name' => 'Miscellaneous'],
        ];

        foreach ($categories as $category) {
            \App\ResourceCategory::create($category);
        }
    }

}