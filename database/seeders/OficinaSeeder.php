<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oficinas')->insert([
            'oficina' => 'Consejo Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Secretaria del Consejo Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gobernación Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Organo de Control Institucional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Procuraduria Pública Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina de Atención al Ciudadano y Gestión Documental',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina de Coordinación Lima',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia General Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Administración',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Gestión de Recursos Humanos',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Abastecimiento',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Contabilidad',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Tesoreria',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Patrimonio',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina de Comunicaciones, Imagen y Protocolo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Planeamiento Estratégico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Presupuesto Público',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Modernización y Transformación Digital',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Programación Multianual de Inversiones - OPMI',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Formulación y Evaluación de Estudios de Pre Inversion',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina Regional de Cooperación Internacional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Acondicionamiento Territorial',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Asesoria Jurídica',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina Regional de Gestión en Conflictos y de Dialogo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Oficina Regional de Gestión de Riesgos, Defensa Nacional y Seguridad Ciudadana',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Desarrollo Económico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Promoción de la Inversión Privada',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Dirección Regional de la Producción',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Dirección Regional de Energía y Minas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Dirección de Comercio Exterior y Turismo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Desarrollo Social',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Inclusión Social e Identidad Cultural',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Desarrollo Poblacional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Dirección Regional de Trabajo y Promoción del Empleo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Dirección Regional de Vivienda, Construcción y Saneamiento',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Aldea Infantil "San Juan Bosco"',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Recursos Naturales y Gestión Ambiental',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Recursos Naturales',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Gestión Ambiental',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Gerencia Regional de Insfraestructura',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Estudios',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Obras y Supervisión',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Sub Gerencia de Liquidación',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('oficinas')->insert([
            'oficina' => 'Archivo Regional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
