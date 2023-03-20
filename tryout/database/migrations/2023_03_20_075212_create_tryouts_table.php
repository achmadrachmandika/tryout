<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\MataPelajaran;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tryouts', function (Blueprint $table) {
            $table->id('idTryout');
            $table->string('namaTryout',35);
            $table->string('detailTryout',35);
            $table->foreignIdFor(User::class)->constrained('users', 'idUser');
            $table->foreignIdFor(MataPelajaran::class)->constrained('matapelajarans', 'idMapel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
