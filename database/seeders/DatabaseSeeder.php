<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        user::create([
            'name'=>'Administrador',
            'email'=>'paulajgarcia68@gmail.com',
            'password'=>Hash::make('20237396')
        ]);
        user::create([
            'name'=>'Secretaria',
            'email'=>'secretaria@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        user::create([
            'name'=>'Doctor1',
            'email'=>'doctor1@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        user::create([
            'name'=>'Paciente1',
            'email'=>'paciente1@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $this->call([PacienteSeeder::class]);
        

    }
}
