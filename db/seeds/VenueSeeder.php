<?php


use Phinx\Seed\AbstractSeed;

class VenueSeeder extends AbstractSeed
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
                'name'          => 'Scorpion Training Camp',
                'address'       => 'Jalan Pulo mas Timur',
                'about'         => 'Training Camp in Pulomas',
                'facilities'    => 'bathroom',
                'socialmedia'   => 'instagram',
                'rating'        => 0,
            ]
            ];
            $posts = $this->table('venue');
            $posts->insert($data)
                ->save();
    }
}
