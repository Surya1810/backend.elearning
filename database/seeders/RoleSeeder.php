<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Basic = Role::create([
            'name' => 'basic',
            'guard_name' => 'api'
        ]);

        // $Premium = Role::create([
        //     'name' => 'premium',
        //     'guard_name' => 'web'
        // ]);
    }

}
