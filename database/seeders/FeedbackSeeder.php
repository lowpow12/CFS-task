<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = date('Y-m-d H:i:s', time());
        $feedbacks = [
            [
                'sender' => 'Develop Final Project',
                'feedbacks' => 'Kanban project using PHP and Laravel',
                'comments' => '2023-04-30',
            ],
           
        ];

        \DB::table('feedbacks')->insert($feedbacks);
    }
}

