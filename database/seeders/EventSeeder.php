<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Festival Kulineran',
                'category' => 'Festival',
                'ticket_price' => 50000,
                'description' => 'Mari berkunjung pada festival kulineran dengan berbagai kuliner tradisional!',
                'image'=> null,
                'created_at' => now(),
                'updated_at'=> now(),
            ],

             [
                'title' => 'How To Motivated Our Self',
                'category' => 'Seminar',
                'ticket_price' => 35000,
                'description' => 'Seminar ini menghadirkan tokoh yang cukup terkenal dengan materi memotivasi diri sendiri',
                'image'=> null,
                'created_at' => now(),
                'updated_at'=> now(),
            ],

             [
                'title' => 'Tingkatkan Minat Literasi di Era Globalisasi',
                'category' => 'Seminar',
                'ticket_price' => 70000,
                'description' => 'Literasi penting di era serba teknologi ini',
                'image'=> null,
                'created_at' => now(),
                'updated_at'=> now(),
            ],

             [
                'title' => 'Arctic Monkeys',
                'category' => 'Musik',
                'ticket_price' => 6700000,
                'description' => 'Our consert with full of hapiness',
                'image'=> null,
                'created_at' => now(),
                'updated_at'=> now(),
            ],

             [
                'title' => 'Pekan Raya Jakarta',
                'category' => 'Festival',
                'ticket_price' => 60000,
                'description' => 'Pekan Raya Jakarta menawarkan berbagai keunikan',
                'image'=> null,
                'created_at' => now(),
                'updated_at'=> now(),
            ],

        ]);
    }
}
