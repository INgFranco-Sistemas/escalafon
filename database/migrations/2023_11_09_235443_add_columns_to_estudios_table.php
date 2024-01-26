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
        Schema::table('estudios', function (Blueprint $table) {
            $table->string('centroestudios');
            $table->integer('tipoestudios');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('archivoestudios');
            $table->foreignId('empleado_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estudios', function (Blueprint $table) {
            $table->dropForeign('empleados_empleado_id_foreign');
            $table->dropColumn(['centroestudios','tipoestudios','fecha_inicio','fecha_fin','archivoestudios','empleado_id']);
        });
    }
};
