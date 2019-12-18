<?php


use Phinx\Seed\AbstractSeed;

class ClassSeeder extends AbstractSeed
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
                'name'              => 'Cardio Muay Thai',
                'venue'             => 'Scorpion Training Camp',
                'class_date'        => date('2019-12-20 00:00:00'),
                'class_start'       => '09:00:00',
                'class_end'         => '10:00:00',
                'price'             => 75000,
                'desc'              => 'High intensity 1 hour workout with MuayThai techniques',
                'note'              => 'High intensity 1 hour workout with MuayThai techniques',
                'attendant'         => 0,
                'attendant_limit'   => 20,
            ]
            ];
            $posts = $this->table('class');
            $posts->insert($data)
                ->save();
    }
}
