<?php

use Illuminate\Database\Seeder;

class UsersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 'user', 10)->create();
    }
}
