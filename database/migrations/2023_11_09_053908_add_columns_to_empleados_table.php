<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('dni');
            $table->char('ruc');
            $table->string('sexo');
            $table->date('nacimiento');
            $table->integer('fijo');
            $table->integer('celular');
            $table->string('nacionalidad');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('estadocivil');
            $table->string('direccion');
            $table->string('correo');
	        $table->string('regimen');
            $table->foreignId('oficina_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropForeign('empleados_oficina_id_foreign');
            $table->dropColumn(['nombres','apellidos','dni','ruc','sexo','nacimiento','fijo','celular','nacionalidad','departamento','provincia','distrito','estadocivil','direccion','correo','regimen','oficina_id']);
        });
    }
};
