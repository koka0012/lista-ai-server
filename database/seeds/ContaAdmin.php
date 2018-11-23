<?php

use App\Conta;
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
        $user->fantasia = "admin";
        $user->cpf_cnpj = "000.000.000-00";
        $user->email = "admin@admin.com.br";
        $user->save();

        // Create admin account now
        $account = new Conta;
        $account->username = "admin";
        $account->password = Hash::make("admin");
        $account->user_id = $user->id;
        $account->save();
    }
}
