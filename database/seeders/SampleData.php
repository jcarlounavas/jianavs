<?php

namespace Database\Seeders;

use App\Models\ConfessModel;
use App\Models\UserConfession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ConfessModel::create([
            'user_id' => '1',
            'confess' => 'I have a secret crush on my best friend.',
        ]);
        
       


    }
}
