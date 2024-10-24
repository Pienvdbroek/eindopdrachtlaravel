<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bears')->insert([
            'name'=>'Panda',
            'image'=>'panda.jpg',
            'origin'=>'China',
            'fact'=>'They can eat up to 38 kilograms of bamboo daily!'
        ]);

        DB::table('bears')->insert([
            'name'=>'American Black Bear',
            'image'=>'americanblackbear.png',
            'origin'=>'North America',
            'fact'=>'American black bears are excellent climbers and can ascend trees with ease.'
        ]);

        DB::table('bears')->insert([
            'name'=>'Grizzly Bear',
            'image'=>'grizzlybear.jpg',
            'origin'=>'North America',
            'fact'=>'Grizzly bears can run at speeds up to 48 kilometers per hour.'
        ]);

        DB::table('bears')->insert([
            'name'=>'Brown Bear',
            'image'=>'brownbear.png',
            'origin'=>'North America, Europe, and Asia',
            'fact'=>'The brown bear includes several subspecies, such as the grizzly and Kodiak bear.'
        ]);

    }
}
