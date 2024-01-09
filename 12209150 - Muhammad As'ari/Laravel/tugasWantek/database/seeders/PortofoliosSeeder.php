<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 3, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            ['id' => 4, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            ['id' => 5, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            ['id' => 6, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            ['id' => 7, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            ['id' => 8, 'title' => 'User-Friendly Behaviour For', 'name' => 'Asep', 'category_id' => 2, 'file' => 'https://i.pinimg.com/564x/ac/9f/cd/ac9fcd93b1c71cab3710df35d70bfd00.jpg'],
            // Add more data as needed
        ];

        // Insert the data into the table
        foreach ($data as $item) {
            DB::table('portfolios')->insert($item);
        }
    }
}
