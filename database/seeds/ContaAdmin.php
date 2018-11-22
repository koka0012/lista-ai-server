<?php

use App\Contas;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContaAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First creat admin User
        $user = new User();
        $user->name = "admin";
        $user->save();

        // Create admin account now
        $account = new Contas;
        $account->username = "admin";
        $account->password = Hash::make("admin");
        $account->user_id = $user->id;
        $account->save();
    }
}
