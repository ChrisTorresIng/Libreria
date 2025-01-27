<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new User();
        $usuario->nombre = 'Christian Torres';
        $usuario->correo = 'chris@gmail.com';
        $usuario->cedula = '27833301';
        $usuario->rol = 'Administrador';
        $usuario->avatar = 'Perfilchris.jpg';
        $usuario->password = bcrypt('12345');
        $usuario->save();

        $usuario = new User();
        $usuario->nombre = 'Joaiver Torres';
        $usuario->correo = 'joaiver@example.com';
        $usuario->cedula = '27550800';
        $usuario->rol = 'Empleado';
        $usuario->password = bcrypt('password');
        $usuario->save();

        $usuario = new User();
        $usuario->nombre = 'Nixon Torres';
        $usuario->correo = 'nixon@example.com';
        $usuario->cedula = '27550877';
        $usuario->rol = 'Usuario';
        $usuario->password = bcrypt('password');
        $usuario->save();

        // User::factory(100)->create();

    }
}
