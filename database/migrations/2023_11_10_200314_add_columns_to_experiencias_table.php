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
        Schema::table('experiencias', function (Blueprint $table) {
            $table->string('lugartrabajo');
            $table->string('cargotrabajo');
            $table->date('cargofecha_inicio');
            $table->date('cargofecha_fin');
            $table->string('archivoexperiencia');
            $table->foreignId('empleado_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiencias', function (Blueprint $table) {
            $table->dropForeign('empleados_empleado_id_foreign');
            $table->dropColumn(['centroestudios','tipoestudios','fecha_inicio','fecha_fin','archivoestudios','empleado_id']);
        });
    }
};
