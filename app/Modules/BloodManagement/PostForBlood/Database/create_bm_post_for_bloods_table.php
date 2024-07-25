<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\BloodManagement\PostForBlood\Database\create_bm_post_for_bloods_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bm_post_for_bloods', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('blood_group_id')->nullable();
            $table->string('hospital_name', 100)->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('division_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('station_id')->nullable();
            $table->json('phone')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('is_emergency')->default(0);
            $table->text('description')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bm_post_for_bloods');
    }
};
