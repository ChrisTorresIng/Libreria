<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleado = new Empleado();
        $empleado->nombre = 'John Doe';
        $empleado->correo = 'Smith@gmail.com';
        $empleado->cedula = '20600500';
        $empleado->trabajo = 'Empleado';
        $empleado->clave = bcrypt('password');
        $empleado->save();

        // Empleado::factory(100)->create();
    }
}
