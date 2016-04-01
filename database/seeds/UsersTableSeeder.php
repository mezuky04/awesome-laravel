<?php

use Illuminate\Database\Seeder;

/**
 * Seeds users table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class UsersTableSeeder extends Seeder {

    /**
     * Run migration.
     */
    public function run() {
        \App\User::create([
            'email' => 'alexandru.bugarin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }

}