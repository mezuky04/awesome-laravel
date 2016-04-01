<?php

/**
 * Test login functionality.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class LoginTest extends TestCase {

    use \Illuminate\Foundation\Testing\DatabaseMigrations;
    use \Illuminate\Foundation\Testing\WithoutMiddleware;

    /**
     * Login with valid credentials.
     */
    public function testValidLogin() {

        $faker = Faker\Factory::create();

        // Generate a user
        $user = new \App\User();
        $user->email = $faker->email;
        $password = $faker->password;
        $user->password = bcrypt($password);
        $user->save();

        $this->post('/login', ['email' => $user->email, 'password' => $password])
            ->seeJson(['success' => true]);
    }

    /**
     * Login with empty credentials.
     */
    public function testEmptyCredentials() {
        $this->post('/login')
            ->seeStatusCode(302);
    }

    public function testWithEmptyEmail() {
        $this->post('/login', ['password' => 'random123'])
            ->seeStatusCode(302);
    }

}