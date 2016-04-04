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
            ['name' => 'Developer Tools - Popular Packages'],
            ['name' => 'Debugging & Profiling - Popular Packages'],
            ['name' => 'Authentication & Authorisation - Popular Packages'],
            ['name' => 'Utilities - Popular Packages'],
            ['name' => 'Working with Javascript - Popular Packages'],
            ['name' => 'Databases, ORMs, Migrations & Seeding - Popular Packages'],
            ['name' => 'Search - Popular Packages'],
            ['name' => 'APIs - Popular Packages'],
            ['name' => 'Tasks, Commands and Scheduling - Popular Packages'],
            ['name' => 'Payments - Popular Packages'],
            ['name' => 'Optimization - Popular Packages'],
            ['name' => 'Localization - Popular Packages'],
            ['name' => 'Third-party Service Integration - Popular Packages'],
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
            ['name' => 'Forums'],
            ['name' => 'Local User Groups'],
            ['name' => 'Jobs'],
            ['name' => 'Hosted Development Tools'],
            ['name' => 'Miscellaneous'],
        ];

        foreach ($categories as $category) {
            \App\ResourceCategory::create($category);
        }
    }

}