<?php

use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $spendersRole = Role::create([
            'name' => 'Spender',
            'slug' => 'spender',
            'description' => 'This is a role that gets assigned to a member from spenders', // optional
            'level' => 1, // optional, set to 1 by default
        ]);

        $companyRole = Role::create([
            'name' => 'Company',
            'slug' => 'company',
            'description' => 'This is a role that gets assigned to a company', // optional
            'level' => 1, // optional, set to 1 by default
        ]);

        $costumerRole = Role::create([
            'name' => 'Costumer',
            'slug' => 'costumer',
            'description' => 'This is a role that gets assigned to a costumer', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
    }
}
