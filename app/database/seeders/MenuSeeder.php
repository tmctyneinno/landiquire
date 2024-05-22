<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            ['name' => 'Home'],
            ['name' => 'About'],
            ['name' => 'Services'],
            ['name' => 'Events'],
            ['name' => 'Donation'],
            ['name' => 'Publications'],
            ['name' => 'Contact'] 
        ];
    
        foreach($data as $dd){
            Menu::create($dd);
        }
    }
}
