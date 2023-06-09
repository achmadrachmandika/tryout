<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tryout;
use App\Models\JenisSoal;
use App\Models\IndukSoal;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soals', function (Blueprint $table) {
                    $table->id('idSoal');
                    $table->foreignIdFor(Tryout::class)->constrained('tryouts', 'idTryout');
                    $table->foreignIdFor(JenisSoal::class)->constrained('jenissoals', 'idJenis');
                    $table->foreignIdFor(IndukSoal::class)->constrained('induksoals', 'idInduk');
                    $table->string('detailSoal',35);
                });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
