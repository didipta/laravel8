<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Iphone12pr0max',
            'description' => 'This is very good product very beautiful and popular',
            'price' => '৳-161,000',
            'image' => 'null',
        ]);
    }
}
