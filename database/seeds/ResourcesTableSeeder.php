<?php

use App\Resource;
use Illuminate\Database\Seeder;

/**
 * Seeds resources table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourcesTableSeeder extends Seeder {

    public function run() {

        $basic = [
            'Essentials' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Essentials')->first()->id
            ], 'Code Snippets' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Code Snippets')->first()->id
            ], 'Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Packages')->first()->id
            ], 'Developer Tools - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => App\ResourceCategory::where('name', 'Developer Tools - Popular Packages')->first()->id
            ], 'Debugging & Profiling - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Debugging & Profiling - Popular Packages')->first()->id
            ], 'Authentication & Authorisation - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Authentication & Authorisation - Popular Packages')->first()->id
            ], 'Utilities - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Utilities - Popular Packages')->first()->id
            ], 'Working with Javascript - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Working with Javascript - Popular Packages')->first()->id
            ], 'Databases, ORMs, Migrations & Seeding - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Databases, ORMs, Migrations & Seeding - Popular Packages')->first()->id
            ], 'Search - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Search - Popular Packages')->first()->id
            ], 'APIs - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'APIs - Popular Packages')->first()->id
            ], 'Tasks, Commands and Scheduling - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Tasks, Commands and Scheduling - Popular Packages')->first()->id
            ], 'Payments - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Payments - Popular Packages')->first()->id
            ], 'Optimization - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Optimization - Popular Packages')->first()->id
            ], 'Localization - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Localization - Popular Packages')->first()->id
            ], 'Third-party Service Integration - Popular Packages' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Third-party Service Integration - Popular Packages')->first()->id
            ], 'Development Setup' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Development Setup')->first()->id
            ], 'Application Hosting' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Application Hosting')->first()->id
            ], 'Application Deployment' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Application Deployment')->first()->id
            ], 'Articles, Tutorials, Blogs etc.' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Articles, Tutorials, Blogs etc.')->first()->id
            ], 'Videos' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Videos')->first()->id
            ], 'Conferences' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Conferences')->first()->id
            ], 'Books' => [
                'checked' => true,
                'resource_category_id' => \App\ResourceCategory::where('name', 'Books')->first()->id
            ]
        ];

        $resources = [
            'Essentials' => [
                [
                    'name' => 'Laravel',
                    'short_description' => 'Laravel official website',
                    'link' => 'http://laravel.com/',
                ], [
                    'name' => 'Laravel Documentation',
                    'short_description' => 'Official Laravel documentation',
                    'link' => 'http://laravel.com/docs/5.2',
                ], [
                    'name' => 'Laravel API Reference',
                    'short_description' => 'Official Laravel API Reference',
                    'link' => 'http://laravel.com/api/master',
                ], [
                    'name' => 'Lumen',
                    'short_description' => 'Lumen official website',
                    'link' => 'http://lumen.laravel.com',
                ], [
                    'name' => 'Lumen documentation',
                    'short_description' => 'Lumen official documentation',
                    'link' => 'http://lumen.laravel.com/docs',
                ], [
                    'name' => 'Laracasts',
                    'short_description' => 'Best Laravel screencasts on the web',
                    'link' => 'http://laracasts.com/',
                ], [
                    'name' => 'Laravel News',
                    'short_description' => 'Laravel Newsletter',
                    'link' => 'https://laravel-news.com/',
                ]
            ], 'Code Snippets' => [
                [
                    'name' => 'Laravel Cheat Sheet',
                    'link' => 'http://cheats.jesse-obrien.ca/',
                    'short_description' => 'Cheat Sheet for Laravel'
                ], [
                    'name' => 'Laravel Tricks',
                    'link' => 'http://laravel-tricks.com/',
                    'short_description' => 'Repository for Laravel tips and tricks'
                ], [
                    'name' => 'Laravel Recipes',
                    'link' => 'http://laravel-recipes.com/',
                    'short_description' => 'Hundreds of little "how-tos" explaining every aspect of Laravel',
                ]
            ], 'Packages' => [
                [
                    'name' => 'Packagist',
                    'link' => 'https://packagist.org/',
                    'short_description' => 'The PHP Package Repository',
                ], [
                    'name' => 'Laravel Collective',
                    'link' => 'http://laravelcollective.com/',
                    'short_description' => 'Laravel components that have been removed from the core framework',
                ], [
                    'name' => 'Packalyst',
                    'link' => 'http://packalyst.com/',
                    'short_description' => 'Directory of Packages for your Laravel projects',
                ], [
                    'name' => 'Cartalyst',
                    'link' => 'http://cartalyst.com/',
                    'short_description' => 'Framework agnostic composer packages for developers',
                ], [
                    'name' => 'Spatie',
                    'link' => 'https://spatie.be/opensource/laravel',
                    'short_description' => 'Laravel packages build by Spatie',
                ]
            ], 'Developer Tools - Popular Packages' => [
                [
                    'name' => 'IDE Helper',
                    'link' => 'https://github.com/barryvdh/laravel-ide-helper',
                    'short_description' => 'Generates a helper file for IDE auto-completion',
                ], [
                    'name' => 'Laravel 5 Extended Generators',
                    'link' => 'https://github.com/laracasts/Laravel-5-Generators-Extended',
                    'short_description' => 'Extends built-in file generators',
                ], [
                    'name' => 'Laravel API/Scaffold/CRUD Generator',
                    'link' => 'http://labs.infyom.com/laravelgenerator/',
                    'short_description' => 'Generator for APIs, CRUD scaffolds etc.',
                ]
            ], 'Debugging & Profiling - Popular Packages' => [
                [
                    'name' => 'Clockwork',
                    'link' => 'https://github.com/itsgoingd/clockwork',
                    'short_description' => 'Integrates Clockwork Chrome extension for debugging and profiling apps'
                ], [
                    'name' => 'Debug Bar',
                    'link' => 'https://github.com/barryvdh/laravel-debugbar',
                    'short_description' => 'Integrates PHP Debug Bar with Laravel',
                ], [
                    'name' => 'Laravel 5 Log Viewer',
                    'link' => 'https://github.com/rap2hpoutre/laravel-log-viewer',
                    'short_description' => 'Log viewer'
                ], [
                    'name' => 'LogViewer',
                    'link' => 'https://github.com/ARCANEDEV/LogViewer',
                    'short_description' => 'Provides a log viewer for Laravel 5',
                ], [
                    'name' => 'LERN',
                    'link' => 'https://github.com/tylercd100/lern#lern-laravel-exception-recorder-and-notifier',
                    'short_description' => 'LERN is a Laravel 5 package that will record exceptions into a database and will send you a notification.'
                ], [
                    'name' => 'Mail Preview',
                    'link' => 'https://github.com/themsaid/laravel-mail-preview',
                    'short_description' => 'Preview sent mail in a web browser or mail client',
                ]
            ], 'Authentication & Authorisation - Popular Packages' => [
                [
                    'name' => 'Entrust',
                    'link' => 'https://github.com/Zizaco/entrust',
                    'short_description' => 'Role-based Permissions',
                ], [
                    'name' => 'JWT Auth',
                    'link' => 'https://github.com/tymondesigns/jwt-auth',
                    'short_description' => 'JSON Web Token authentication for APIs'
                ], [
                    'name' => 'Laravel Permission',
                    'link' => 'https://github.com/spatie/laravel-permission',
                    'short_description' => 'Associate users with roles and permissions',
                ], [
                    'name' => 'Defender',
                    'link' => 'https://github.com/artesaos/defender',
                    'short_description' => 'Roles & Permissions',
                ], [
                    'name' => 'OAuth2 Server Laravel',
                    'link' => 'https://github.com/lucadegasperi/oauth2-server-laravel',
                    'short_description' => 'OAuth 2.0 authorization server and resource server',
                ], [
                    'name' => 'Laravel Roles',
                    'link' => 'https://github.com/romanbican/roles',
                    'short_description' => 'Roles And Permissions',
                ], [
                    'name' => 'Sentinel',
                    'link' => 'https://github.com/cartalyst/sentinel',
                    'short_description' => 'Framework agnostic authentication & authorization system',
                ], [
                    'name' => 'Socialite',
                    'link' => 'https://github.com/laravel/socialite',
                    'short_description' => 'OAuth authentication with Facebook, Google, Twitter etc.'
                ], [
                    'name' => 'Socialite Providers',
                    'link' => 'http://socialiteproviders.github.io/',
                    'short_description' => '70+ social authentication providers for Socialite',
                ], [
                    'name' => 'Google2FA',
                    'link' => 'https://github.com/antonioribeiro/google2fa',
                    'short_description' => 'Google Two-Factor Authentication Module',
                ]
            ], 'Utilities - Popular Packages' => [
                [
                    'name' => 'Bootstrapper',
                    'link' => 'https://github.com/patricktalmadge/bootstrapper/',
                    'short_description' => 'Set of classes to create Bootstrap 3 markup',
                ], [
                    'name' => 'Datatable',
                    'link' => 'https://github.com/Chumper/Datatable',
                    'short_description' => 'Server-side and client-side integration for jQuery Datatables plugin',
                ], [
                    'name' => 'Eloquent Sluggable',
                    'link' => 'https://github.com/cviebrock/eloquent-sluggable',
                    'short_description' => 'Create slugs for Eloquent models',
                ], [
                    'name' => 'HTML',
                    'link' => 'https://github.com/LaravelCollective/html',
                    'short_description' => 'Official HTML and Form Builders for Laravel'
                ], [
                    'name' => 'Intervention Image',
                    'link' => 'https://github.com/Intervention/image',
                    'short_description' => 'Image handling library for creating, editing and composing images',
                ], [
                    'name' => 'Laravel Breadcrumbs',
                    'link' => 'https://github.com/davejamesmiller/laravel-breadcrumbs',
                    'short_description' => 'Create and manage breadcrumbs',
                ], [
                    'name' => 'Laravel Datatable',
                    'link' => 'https://github.com/yajra/laravel-datatables',
                    'short_description' => 'jQuery DataTables API',
                ], [
                    'name' => 'Laravel Dot Env Generator',
                    'link' => 'https://github.com/mathiasgrimm/laravel-dot-env-gen',
                    'short_description' => 'Generate .env.gen file based on the project source code',
                ], [
                    'name' => 'Laravel Excel',
                    'link' => 'https://github.com/Maatwebsite/Laravel-Excel',
                    'short_description' => 'Import and export Excel and CSV files',
                ], [
                    'name' => 'Laravel GeoIP',
                    'link' => 'https://github.com/Torann/laravel-geoip',
                    'short_description' => 'Determine the geographical location of website visitors based on their IP addresses'
                ], [
                    'name' => 'Laravel Hashids',
                    'link' => 'https://github.com/vinkla/hashids',
                    'short_description' => 'Generate unique, non-sequential ids',
                ], [
                    'name' => 'Laravel Markdown',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-Markdown',
                    'short_description' => 'CommonMark markdown parser',
                ], [
                    'name' => 'Laravel MediaLibrary',
                    'link' => 'https://github.com/spatie/laravel-medialibrary',
                    'short_description' => 'Associate files with Eloquent models',
                ], [
                    'name' => 'Laravel Messenger',
                    'link' => 'https://github.com/cmgmyr/laravel-messenger',
                    'short_description' => 'User messaging system',
                ], [
                    'name' => 'Laravel Responsecache',
                    'link' => 'https://github.com/spatie/laravel-responsecache',
                    'short_description' => 'Speed up a Laravel app by caching the entire response',
                ], [
                    'name' => 'Laravel Snappy',
                    'link' => 'https://github.com/barryvdh/laravel-snappy',
                    'short_description' => 'HTML to PDF generator using wkhtmltopdf',
                ], [
                    'name' => 'Laravel Stapler',
                    'link' => 'https://github.com/CodeSleeve/laravel-stapler',
                    'short_description' => 'ORM-based file upload manager',
                ], [
                    'name' => 'Laravel Tail',
                    'link' => 'https://github.com/spatie/laravel-tail',
                    'short_description' => 'The missing tail command',
                ], [
                    'name' => 'Laravel Stats Tracker',
                    'link' => 'https://github.com/antonioribeiro/tracker',
                    'short_description' => 'Gather information from requests to identify and store',
                ], [
                    'name' => 'Listify',
                    'link' => 'https://github.com/lookitsatravis/listify',
                    'short_description' => 'Add sorting/ordering capabilities to any Eloquent model',
                ], [
                    'name' => 'noCAPTCHA',
                    'link' => 'https://github.com/ARCANEDEV/noCAPTCHA',
                    'short_description' => 'Helper for Google\'s new noCAPTCHA (reCAPTCHA)',
                ], [
                    'name' => 'Revisionable',
                    'link' => 'https://github.com/VentureCraft/revisionable',
                    'short_description' => 'Create a revision history for Eloquent models'
                ], [
                    'name' => 'SEOTools',
                    'link' => 'https://github.com/artesaos/seotools',
                    'short_description' => 'Helpers for some common SEO techniques'
                ], [
                    'name' => 'Setting',
                    'link' => 'https://github.com/Phil-F/Setting',
                    'short_description' => 'Persistent configuration settings that are stored in JSON files',
                ], [
                    'name' => 'Teamwork',
                    'link' => 'https://github.com/mpociot/teamwork',
                    'short_description' => 'User to team associations with an invite system',
                ], [
                    'name' => 'Validating',
                    'link' => 'https://github.com/dwightwatson/validating',
                    'short_description' => 'Trait for validating Eloquent models',
                ], [
                    'name' => 'VAT Calculator',
                    'link' => 'https://github.com/mpociot/vat-calculator',
                    'short_description' => 'Handle all the hard stuff related to EU MOSS vat regulations',
                ], [
                    'name' => 'Laravel Uuid',
                    'link' => 'https://github.com/webpatser/laravel-uuid',
                    'short_description' => 'Laravel package to generate a UUID according to the RFC 4122 standard',
                ], [
                    'name' => 'Laravel Installer',
                    'link' => 'https://github.com/RachidLaasri/LaravelInstaller',
                    'short_description' => 'Laravel package to allow users to install your application just by following the setup wizard, like WordPress'
                ]
            ], 'Working with Javascript - Popular Packages' => [
                [
                    'name' => 'Laroute',
                    'link' => 'https://github.com/aaronlord/laroute',
                    'short_description' => 'Generate Laravel route URLs from JavaScript'
                ], [
                    'name' => 'PHP Vars to JavaScript Transformer',
                    'link' => 'https://github.com/laracasts/PHP-Vars-To-Js-Transformer',
                    'short_description' => 'Pass server-side string/array/collection/whatever to JavaScript'
                ], [
                    'name' => 'Javascript Validation',
                    'link' => 'https://github.com/proengsoft/laravel-jsvalidation',
                    'short_description' => 'Use validation rules, messages, FormRequest and validators to validate forms in client side without need to write any Javascript code',
                ]
            ], 'Databases, ORMs, Migrations & Seeding - Popular Packages' => [
                [
                    'name' => 'Backup Manager',
                    'link' => 'https://github.com/backup-manager/laravel',
                    'short_description' => 'Backup and restore databases from S3, Dropbox, SFTP etc'
                ], [
                    'name' => 'Baum',
                    'link' => 'https://github.com/etrepat/baum',
                    'short_description' => 'Nested Sets pattern implementation',
                ], [
                    'name' => 'ClosureTable',
                    'link' => 'https://github.com/franzose/ClosureTable',
                    'short_description' => 'Closure table pattern implementation',
                ], [
                    'name' => 'Eloquence',
                    'link' => 'https://github.com/kirkbushell/eloquence',
                    'short_description' => 'Extra features for Eloquent models',
                ], [
                    'name' => 'iSeed',
                    'link' => 'https://github.com/orangehill/iseed',
                    'short_description' => 'Generate a new seed file from an existing database table'
                ], [
                    'name' => 'Laravel Backup',
                    'link' => 'https://github.com/spatie/laravel-backup',
                    'short_description' => 'Backup your app',
                ], [
                    'name' => 'Laravel Doctrine',
                    'link' => 'https://github.com/laravel-doctrine/orm',
                    'short_description' => 'Doctrine 2 ORM implementation',
                ], [
                    'name' => 'Laravel MongoDB',
                    'link' => 'https://github.com/jenssegers/laravel-mongodb',
                    'short_description' => 'Eloquent model and query builder with support for MongoDB',
                ], [
                    'name' => 'Migrations Generator',
                    'link' => 'https://github.com/Xethron/migrations-generator',
                    'short_description' => 'Generate migrations from an existing database',
                ], [
                    'name' => 'Sofa/Eloquence',
                    'link' => 'https://github.com/jarektkaczyk/eloquence',
                    'short_description' => 'Extensions for the Eloquent ORM'
                ], [
                    'name' => 'Tenanti',
                    'link' => 'https://github.com/orchestral/tenanti',
                    'short_description' => 'Multi-tenant database schema manager'
                ]
            ], 'Search - Popular Packages' => [
                [
                    'name' => 'Algolia Search',
                    'link' => 'https://github.com/algolia/algoliasearch-laravel',
                    'short_description' => 'Integrates the Algolia Search API to the Laravel Eloquent ORM',
                ], [
                    'name' => 'Elasticquent',
                    'link' => 'https://github.com/elasticquent/Elasticquent',
                    'short_description' => 'Elasticsearch for Eloquent models'
                ], [
                    'name' => 'Laravel Search',
                    'link' => 'https://github.com/mmanos/laravel-search',
                    'short_description' => 'Unified API for Elasticsearch, Algolia, and ZendSearch'
                ], [
                    'name' => 'SearchIndex',
                    'link' => 'https://github.com/spatie/searchindex',
                    'short_description' => 'Store and retrieve objects from Algolia or Elasticsearch'
                ], [
                    'name' => 'Searchable',
                    'link' => 'https://github.com/nicolaslopezj/searchable',
                    'short_description' => 'Trait that adds a simple search function to Eloquent models'
                ]
            ], 'APIs - Popular Packages' => [
                [
                    'name' => 'ApiGuard',
                    'link' => 'https://github.com/chrisbjr/api-guard',
                    'short_description' => 'Allow API authentication with API keys',
                ], [
                    'name' => 'Dingo API',
                    'link' => 'https://github.com/dingo/api',
                    'short_description' => 'Multi-purpose toolkit for developing RESTful APIs',
                ], [
                    'name' => 'Laravel CORS',
                    'link' => 'https://github.com/barryvdh/laravel-cors',
                    'short_description' => 'Add CORS (Cross-Origin Resource Sharing) headers support'
                ], [
                    'name' => 'Laravel Fractal',
                    'link' => 'https://github.com/spatie/laravel-fractal',
                    'short_description' => 'Output complex, flexible, AJAX/RESTful data structures with Fractal in Laravel and Lumen'
                ]
            ], 'Tasks, Commands and Scheduling - Popular Packages' => [
                [
                    'name' => 'Dispatcher',
                    'link' => 'https://github.com/indatus/dispatcher',
                    'short_description' => 'Scheduler for Artisan commands'
                ], [
                    'name' => 'Elixir',
                    'link' => 'https://github.com/laravel/elixir',
                    'short_description' => 'Node(NPM) package to run Gulp tasks that watch files, run tests, minify CSS, concatenate scripts etc.'
                ], [
                    'name' => 'Envoy',
                    'link' => 'https://github.com/laravel/envoy',
                    'short_description' => 'SSH Task Runner'
                ]
            ], 'Payments - Popular Packages' => [
                [
                    'name' => 'Cashier',
                    'link' => 'https://github.com/laravel/cashier',
                    'short_description' => 'Subscription billing with Stripe'
                ], [
                    'name' => 'Omnipay for Laravel',
                    'link' => 'https://github.com/ignited/laravel-omnipay',
                    'short_description' => 'Integrate the Omnipay PHP library'
                ]
            ], 'Optimization - Popular Packages' => [
                [
                    'name' => 'Intervention Image Cache',
                    'link' => 'https://github.com/Intervention/imagecache',
                    'short_description' => 'Caching extension for the Intervention Image Class',
                ], [
                    'name' => 'Laravel HTMLMin',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-HTMLMin',
                    'short_description' => 'Blade/HTML/CSS/javascript minifier'
                ]
            ], 'Localization - Popular Packages' => [
                [
                    'name' => 'Language Files',
                    'link' => 'https://github.com/caouecs/Laravel-lang',
                    'short_description' => 'Validation, Pagination and Reminders language lines in 37 languages',
                ], [
                    'name' => 'Laravel Localization',
                    'link' => 'https://github.com/mcamara/laravel-localization',
                    'short_description' => 'Add i18n support via routes',
                ], [
                    'name' => 'Laravel Translatable',
                    'link' => 'https://github.com/dimsav/laravel-translatable',
                    'short_description' => 'Retrieve and store translatable Eloquent model instances',
                ], [
                    'name' => 'Laravel Translator',
                    'link' => 'https://github.com/vinkla/translator',
                    'short_description' => 'Translate Eloquent models into multiple languages'
                ], [
                    'name' => 'Laravel Date',
                    'link' => 'https://github.com/jenssegers/date',
                    'short_description' => 'A library to help you work with dates in multiple languages, based on Carbon'
                ]
            ], 'Third-party Service Integration - Popular Packages' => [
                [
                    'name' => 'Laravel Algolia',
                    'link' => 'https://github.com/vinkla/algolia',
                    'short_description' => 'Algolia API bridge'
                ], [
                    'name' => 'Laravel Analytics',
                    'link' => 'https://github.com/spatie/laravel-analytics',
                    'short_description' => 'An opinionated Laravel 5 package to retrieve pageviews and other data from Google Analytics'
                ], [
                    'name' => 'Laravel DigitalOcean',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-DigitalOcean',
                    'short_description' => 'DigitalOceanV2 bridge'
                ], [
                    'name' => 'Laravel Dropbox',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-Dropbox',
                    'short_description' => 'Dropbox bridge'
                ], [
                    'name' => 'Laravel Facebook',
                    'link' => 'https://github.com/schimpanz/Laravel-Facebook',
                    'short_description' => 'Facebook API bridge'
                ], [
                    'name' => 'Laravel GitHub',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-GitHub',
                    'short_description' => 'PHP GitHub API bridge',
                ], [
                    'name' => 'Laravel GitLab',
                    'link' => 'https://github.com/vinkla/gitlab',
                    'short_description' => 'GitLab API bridge',
                ], [
                    'name' => 'Laravel Googletagmanager',
                    'link' => 'https://github.com/spatie/laravel-googletagmanager',
                    'short_description' => 'Easily setup and send data to Google Tag Manager',
                ], [
                    'name' => 'Laravel Instagram',
                    'link' => 'https://github.com/vinkla/instagram',
                    'short_description' => 'Laravel Instagram API bridge'
                ], [
                    'name' => 'Laravel Newsletter',
                    'link' => 'https://github.com/spatie/laravel-newsletter',
                    'short_description' => 'Send newsletters with Mailchimp'
                ], [
                    'name' => 'Laravel Parse',
                    'link' => 'https://github.com/GrahamCampbell/Laravel-Parse',
                    'short_description' => 'PHP Parse SDK bridge'
                ], [
                    'name' => 'Laravel Pusher',
                    'link' => 'https://github.com/vinkla/pusher',
                    'short_description' => 'Pusher API bridge',
                ], [
                    'name' => 'Laravel Pushwoosh',
                    'link' => 'https://github.com/schimpanz/Laravel-Pushwoosh',
                    'short_description' => 'Pushwoosh API bridge'
                ], [
                    'name' => 'Laravel Vimeo',
                    'link' => 'https://github.com/vinkla/vimeo',
                    'short_description' => 'Vimeo API brigde',
                ]
            ], 'Development Setup' => [
                [
                    'name' => 'Homestead',
                    'link' => 'http://laravel.com/docs/homestead',
                    'short_description' => 'Official Vagrant box for Laravel'
                ], [
                    'name' => 'Install Laravel with Composer on Windows',
                    'link' => 'https://www.youtube.com/watch?v=m3D894qZKws',
                    'short_description' => 'How to setup Laravel on Windows'
                ], [
                    'name' => 'Install Laravel with Composer on Mac OSX or Linux',
                    'link' => 'https://laracasts.com/lessons/laravel-installation-for-newbs',
                    'short_description' => 'How to setup Laravel on Mac OSX or Linux'
                ]
            ], 'Application Hosting' => [
                [
                    'name' => 'Forge',
                    'link' => 'https://forge.laravel.com/',
                    'short_description' => 'Provision optimized PHP servers on Linode, DigitalOcean etc.'
                ], [
                    'name' => 'Server Management with Forge',
                    'link' => 'https://laracasts.com/series/server-management-with-forge',
                    'short_description' => 'Laracasts tutorial',
                ], [
                    'name' => 'FortRabbit',
                    'link' => 'http://www.fortrabbit.com/laravel-hosting',
                    'short_description' => 'Laravel hosting in the cloud'
                ], [
                    'name' => 'From Zero to Deploy with FortRabbit',
                    'link' => 'https://laracasts.com/lessons/from-zero-to-deploy-with-fortrabbit',
                    'short_description' => 'Laracasts tutorial'
                ]
            ], 'Application Deployment' => [
                [
                    'name' => 'Envoyer',
                    'link' => 'https://envoyer.io/',
                    'short_description' => 'Zero down-time Deployer for PHP & Laravel projects '
                ], [
                    'name' => 'Rocketeer',
                    'link' => 'https://github.com/rocketeers/rocketeer',
                    'short_description' => 'Task runner and deployment package'
                ]
            ], 'Articles, Tutorials, Blogs etc.' => [
                [
                    'name' => 'Tuts+',
                    'link' => 'http://code.tutsplus.com/categories/laravel',
                    'short_description' => 'Laravel tutorials by Envato'
                ], [
                    'name' => 'Sitepoint',
                    'link' => 'http://www.sitepoint.com/php/page/0/?filter%5B4047%5D=on',
                    'short_description' => 'Tutorials by Sitepoint'
                ], [
                    'name' => 'Christopher Pitt',
                    'link' => 'https://medium.com/laravel-4',
                    'short_description' => 'Laravel 4 tutorials'
                ], [
                    'name' => 'Culttt',
                    'link' => 'http://culttt.com/tag/cribbb/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Scotch',
                    'link' => 'https://scotch.io/tag/laravel',
                    'short_description' => 'Great Laravel tutorials'
                ], [
                    'name' => 'Fideloper',
                    'link' => 'http://fideloper.com/tag/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Maxoffsky',
                    'link' => 'http://maxoffsky.com/tag/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'KodeInfo',
                    'link' => 'http://kodeinfo.com/main_category/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'CodeForest',
                    'link' => 'http://www.codeforest.net/tag/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Taylor Otwell',
                    'link' => 'http://taylorotwell.com/',
                    'short_description' => 'Laravel creator website'
                ], [
                    'name' => 'DigitalOcean',
                    'link' => 'https://www.digitalocean.com/community/search?q=laravel&type=tutorials',
                    'short_description' => 'Laravel tutorials on DigitalOcean',
                ], [
                    'name' => 'Matt Stauffer',
                    'link' => 'https://mattstauffer.co/tags/laravel',
                    'short_description' => 'Laravel tutorials by Matt Stauffer'
                ], [
                    'name' => 'Creative Punch',
                    'link' => 'http://creative-punch.net/articles/php-articles/laravel-tutorials/',
                    'short_description' => 'Laravel tutorials',
                ], [
                    'name' => 'Mohammad Gufran',
                    'link' => 'http://www.gufran.me/tag/Laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'CodeHeaps',
                    'link' => 'http://www.codeheaps.com/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Laravel India',
                    'link' => 'http://blog.laravel.in/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Sheikh Heera',
                    'link' => 'http://heera.it/tag/laravel-2',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Vegi Bit',
                    'link' => 'http://vegibit.com/tag/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'WSnippets',
                    'link' => 'http://wsnippets.com/category/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Kirk Bushell',
                    'link' => 'http://kirkbushell.me/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Jason Lewis',
                    'link' => 'http://jasonlewis.me/category/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Neon Tsunami',
                    'link' => 'http://www.neontsunami.com/tags/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Into Laravel',
                    'link' => 'http://www.intolaravel.com/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Scott Wilcox',
                    'link' => 'https://dor.ky/tag/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Stillat',
                    'link' => 'http://www.stillat.com/blog/category/programming/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Easy Laravel Book Blog',
                    'link' => 'http://www.easylaravelbook.com/blog/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'CodeTutorial',
                    'link' => 'https://www.codetutorial.io/tag/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Ryan Chenkie',
                    'link' => 'http://ryanchenkie.com/tag/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Laravel Tips',
                    'link' => 'https://laraveltips.wordpress.com/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Codingo Tuts',
                    'link' => 'https://tuts.codingo.me/category/web-development/laravel',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Antonio Carlos Ribeiro',
                    'link' => 'https://antoniocarlosribeiro.com/technology',
                    'short_description' => 'Laravel tutorials',
                ], [
                    'name' => 'Laravel Coding',
                    'link' => 'http://laravelcoding.com/blog',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Laravel Daily',
                    'link' => 'http://laraveldaily.com/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Freek Van der Herten',
                    'link' => 'https://murze.be/tag/laravel/',
                    'short_description' => 'Laravel tutorials',
                ], [
                    'name' => 'Tutsnare',
                    'link' => 'http://tutsnare.com/category/tutorials/laravel/',
                    'short_description' => 'Laravel tutorials'
                ], [
                    'name' => 'Good Heads',
                    'link' => 'http://goodheads.io/category/laravel/',
                    'short_description' => 'Laravel tutorials'
                ]
            ], 'Videos' => [
                [
                    'name' => 'Laracasts',
                    'link' => 'https://laracasts.com/',
                    'short_description' => 'Best Laravel screen casts on the web'
                ], [
                    'name' => 'Coursecode',
                    'link' => 'https://www.codecourse.com/library/lessons/search?search=laravel',
                    'short_description' => 'Laravel video tutorials'
                ], [
                    'name' => 'Tuts+',
                    'link' => 'http://code.tutsplus.com/categories/laravel/courses',
                    'short_description' => 'Laravel video tutorials'
                ], [
                    'name' => 'Udemy',
                    'link' => 'https://www.udemy.com/courses/search/?q=laravel&lang=en',
                    'short_description' => 'Laravel video tutorials'
                ], [
                    'name' => 'Threehouse',
                    'link' => 'https://teamtreehouse.com/library/q:laravel',
                    'short_description' => 'Laravel video tutorials'
                ], [
                    'name' => 'DevDojo',
                    'link' => 'https://www.youtube.com/playlist?list=PL_UnIDIwT95NUvLU14l_QFFV2ZxO1phpQ',
                    'short_description' => 'Laravel 5.1 basics'
                ], [
                    'name' => 'Amitav Roy',
                    'link' => 'https://www.youtube.com/channel/UC4gijXR8cM4gmEt9Olse-TQ/videos',
                    'short_description' => 'Laravel video tutorials'
                ], [
                    'name' => 'Laracademy',
                    'link' => 'https://laracademy.co/',
                    'short_description' => 'Laravel video tutorials'
                ]
            ], 'Conferences' => [
                [
                    'name' => 'Laracon US',
                    'link' => 'http://laracon.us/',
                    'short_description' => 'Laravel United States conference'
                ], [
                    'name' => 'Laracon EU',
                    'link' => 'http://laracon.eu/',
                    'short_description' => 'Laravel Europe conference',
                ], [
                    'name' => 'ArtisanConf',
                    'link' => 'https://www.artisanconf.com/',
                    'short_description' => 'For Laravel and PHP enthusiasts'
                ]
            ], 'Books' => [
                [
                    'name' => 'Laravel Starter',
                    'link' => 'https://www.packtpub.com/web-development/laravel-starter-instant',
                    'short_description' => 'by Shawn McCool'
                ], [
                    'name' => 'Laravel: Code Happy',
                    'link' => 'https://leanpub.com/codehappy',
                    'short_description' => 'by Dayle Rees'
                ], [
                    'name' => 'Laravel: Code Bright',
                    'link' => 'https://leanpub.com/codebright',
                    'short_description' => 'by Dayle Rees'
                ], [
                    'name' => 'Laravel: From Apprentice to Artisan',
                    'link' => 'https://leanpub.com/laravel',
                    'short_description' => 'by Tailor Otwell'
                ], [
                    'name' => 'Laravel Cookbook',
                    'link' => 'https://leanpub.com/laravel4cookbook',
                    'short_description' => 'by Christopher Pitt and Taylor Otwell'
                ], [
                    'name' => 'Laravel Testing Decoded',
                    'link' => 'https://leanpub.com/laravel-testing-decoded',
                    'short_description' => 'by Jeffrey Way'
                ], [
                    'name' => 'Implementing Laravel',
                    'link' => 'https://leanpub.com/implementinglaravel',
                    'short_description' => 'by Chris Fidao'
                ], [
                    'name' => 'Getting Stuff Done with Laravel 4',
                    'link' => 'https://leanpub.com/gettingstuffdonelaravel',
                    'short_description' => 'by Chuck Heintzelman'
                ], [
                    'name' => 'Laravel Application Development Blueprints',
                    'link' => 'http://www.packtpub.com/web-development/laravel-application-development-blueprints',
                    'short_description' => 'by Arda Kılıçdağı and Halil İbrahim Yılmaz'
                ], [
                    'name' => 'Build APIs You Won\'t Hate',
                    'link' => 'https://leanpub.com/build-apis-you-wont-hate',
                    'short_description' => 'by Phil Sturgeon'
                ], [
                    'name' => 'Integrating Frond end Components with Web Applications',
                    'link' => 'https://leanpub.com/frontend',
                    'short_description' => 'by Maksim Surguy'
                ], [
                    'name' => 'Laravel Design Patterns and Best Practices',
                    'link' => 'http://www.packtpub.com/web-development/laravel-design-patterns-and-best-practices',
                    'short_description' => 'by Arda Kılıçdağı and Halil İbrahim Yılmaz'
                ], [
                    'name' => 'Step by Step Real World Application with Laravel 4',
                    'link' => 'https://leanpub.com/real-world-laravel4',
                    'short_description' => 'by Ibrahim Yusuf'
                ], [
                    'name' => 'Learning Laravel 4 Application Development',
                    'link' => 'http://www.packtpub.com/web-development/learning-laravel-4-application-development',
                    'short_description' => 'by Hardik Dangar'
                ], [
                    'name' => 'Getting Started with Laravel 4',
                    'link' => 'http://www.packtpub.com/web-development/getting-started-laravel-4',
                    'short_description' => 'by Raphaël Saunier'
                ], [
                    'name' => 'Laravel Application Development Cookbook',
                    'link' => 'http://www.packtpub.com/web-development/laravel-application-development-cookbook',
                    'short_description' => 'by Terry Matula'
                ], [
                    'name' => 'Building Web Applications using Parse REST API',
                    'link' => 'https://leanpub.com/building-web-applications-using-parse-rest-api',
                    'short_description' => 'by Mhd Zaher Ghaibeh'
                ], [
                    'name' => 'Laravel - My First Framework',
                    'link' => 'https://leanpub.com/laravel-first-framework',
                    'short_description' => 'by Maksim Surguy'
                ], [
                    'name' => 'Easy Laravel 5',
                    'link' => 'https://leanpub.com/easylaravel/',
                    'short_description' => 'by W. Jason Gilmore'
                ], [
                    'name' => 'Laravel 5 Essentials',
                    'link' => 'https://www.packtpub.com/web-development/laravel-5-essentials',
                    'short_description' => 'by Martin Bean'
                ], [
                    'name' => 'Easy E-Commerce Using Laravel and Stripe',
                    'link' => 'https://leanpub.com/easyecommerce',
                    'short_description' => 'by W. Jason Gilmore and Eric L. Barnes'
                ], [
                    'name' => 'Laravel 5.1 Beauty',
                    'link' => 'https://leanpub.com/l5-beauty',
                    'short_description' => 'by Chuck Heintzelman'
                ], [
                    'name' => 'Design Patterns with PHP and Laravel',
                    'link' => 'https://leanpub.com/larasign',
                    'short_description' => 'by Kelt Dockins'
                ], [
                    'name' => 'Laravel 5 Learn Easy',
                    'link' => 'https://leanpub.com/laravel5learneasy',
                    'short_description' => 'by Sanjib Sinha'
                ], [
                    'name' => 'Mastering Laravel',
                    'link' => 'https://www.packtpub.com/web-development/mastering-laravel',
                    'short_description' => 'by Christopher John Pecoraro'
                ], [
                    'name' => 'How to Build Real-Time Laravel Apps with Pusher',
                    'link' => 'http://pusher-community.github.io/real-time-laravel/',
                    'short_description' => 'by Pusher'
                ], [
                    'name' => 'Learning Laravel\'s Eloquent',
                    'link' => 'https://www.packtpub.com/web-development/learning-laravel%E2%80%99s-eloquent',
                    'short_description' => 'by Francesco Malatesta'
                ], [
                    'name' => 'Laravel and AngularJS',
                    'link' => 'https://leanpub.com/laravel-and-angularjs',
                    'short_description' => 'by Daniel Schmitz and Daniel Pedrinha Georgii'
                ], [
                    'name' => 'Laravel 5 UnFolded',
                    'link' => 'http://www.amazon.com/Laravel-UnFolded-Application-Programming-Simplified-ebook/dp/B011I0DVWO/',
                    'short_description' => 'by Sanjib Sinha'
                ], [
                    'name' => 'Laravel Collections Unraveled',
                    'link' => 'https://leanpub.com/laravelcollectionsunraveled',
                    'short_description' => 'by Jeff Madsen'
                ], [
                    'name' => 'Writing APIs With Lumen',
                    'link' => 'https://leanpub.com/lumen-apis',
                    'short_description' => 'by Paul Redmond'
                ], [
                    'name' => 'The Laravel Survival Guide',
                    'link' => 'https://leanpub.com/laravelsurvivalguide',
                    'short_description' => 'by Tony Lea'
                ], [
                    'name' => 'Laraboot: Laravel 5 For Beginners',
                    'link' => 'https://leanpub.com/laravel-5-for-beginners-laraboot',
                    'short_description' => 'by Bill Keck'
                ]
            ]
        ];

        foreach ($resources as $key => $value) {
            foreach ($resources[$key] as $resource) {
                Resource::create(array_merge($resource, $basic[$key]));
            }
        }

    }

}