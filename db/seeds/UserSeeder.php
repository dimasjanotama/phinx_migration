<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'username'          => 'dimsdoms',
                'password'          => 'password123',
                'name'              => 'dimasjanotama',
                'phone'             => '08116644448',
                'email'             => 'cumatest@gmail.com',
                'birthdate'         => '1990-11-13 00:00:00',
                'join_date'         => date('Y-m-d H:i:s'),
                'membership'        => 'premium',
                'total_activity'    => '0',
            ]
            ];
            $posts = $this->table('users');
            $posts->insert($data)
                ->save();
    }
}
