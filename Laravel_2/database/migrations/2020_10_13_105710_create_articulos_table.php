<?php
/** Para crear un nuevo archivo de 'migrations'
 * php artisan make:migration create_articulos_table --create="articulos"
 *
 * Para volver para atras (Si tiene datos lo borrará)
 * php artisan migrate:rollback
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_articulo');
            $table->decimal('Precio');
            $table->string('Pais_origen');
            $table->text('Observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
