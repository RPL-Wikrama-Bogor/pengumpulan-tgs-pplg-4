<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 2, 'title' => 'Desain'],
            ['id' => 3, 'title' => 'Apps'],
            // Add more data as needed
        ];

        // Insert the data into the table
        foreach ($data as $item) {
            DB::table('categories')->insert($item);
        }
    }
}
