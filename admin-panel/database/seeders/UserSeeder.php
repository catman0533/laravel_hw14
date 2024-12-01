<?php

use Illuminate\Database\Seeder;
use App\Models\User; // Подключаем модель User
use Illuminate\Support\Facades\Hash; // Для хеширования пароля

class UserSeeder extends Seeder
{
    public function run()
    {
        
        User::create([
            'name' => 'Catman',
            'email' => 'catman0533@gmail.com',
            'password' => Hash::make('your_secure_password'), // Захешированный пароль
            'role_id' => 1, // Укажите корректный ID роли
        ]);
    }
}
