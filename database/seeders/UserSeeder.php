<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'umar',
            'email' => 'umar@cmd.pos',
            'password' => bcrypt('3fb110897')
        ]);
    }
}
