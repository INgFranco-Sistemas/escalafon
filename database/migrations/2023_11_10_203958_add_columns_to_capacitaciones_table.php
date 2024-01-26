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
        Schema::table('capacitaciones', function (Blueprint $table) {
            $table->string('lugarcapatacion');
            $table->string('temacapacitacion');
            $table->date('capacitacionfecha_inicio');
            $table->date('capacitacionfecha_fin');
            $table->string('archivocapacitacion');
            $table->foreignId('empleado_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capacitaciones', function (Blueprint $table) {
            $table->dropForeign('empleados_empleado_id_foreign');
            $table->dropColumn(['lugarcapatacion','temacapacitacion','capacitacionfecha_inicio','capacitacionfecha_fin','archivocapacitacion','empleado_id']);
        });
    }
};
