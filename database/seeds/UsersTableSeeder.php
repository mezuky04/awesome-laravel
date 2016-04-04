<?php

use App\Role;
use App\User;
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
        $user = User::create([
            'email' => 'alexandru.bugarin@gmail.com',
            'github_id' => '7033003'
        ]);

        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Administrator';
        $admin->description = 'Application administrator';
        $admin->save();
        $user->attachRole($admin);
    }

}