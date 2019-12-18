<?php


use Phinx\Seed\AbstractSeed;

class BookingSeeder extends AbstractSeed
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
                'user_id'           => 1,
                'class_id'          => 1,
                'venue_id'          => 1,
                'total_price'       => 300000,
                'total_attendant'   => 4,
                'payment_method'    => 'Bank Transfer',
                'book_date'         => date('2019-12-19 10:00:00'),
                'book_expired'      => date('2019-12-19 12:00:00'),
                'booking_status'    => 'Unpaid',
            ]
            ];
            $posts = $this->table('booking');
            $posts->insert($data)
                ->save();
    }
}
