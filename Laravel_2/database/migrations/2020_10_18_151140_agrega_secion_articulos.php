<?php
/***
 * Para agregar un nuevo campo creamos otro migrate referenciando a la tabla
 *
 * php artisan make:migration agrega_secion_articulos --table=articulos
 *
 * para eliminar una tabla (pierdes toda la informacion almacenada)
 *
 * php artisan migrate:reset
 *
 * para refrescar una tabla (cuidado puede eliminar y volver a crear la tabla si alguna vez se ha realizado. )
 *
 * php artisan migrate:refresh
 *
 * para consultar si se ha ejecutado una migraciion en algún momento dado
 *
 * php artisan migrate:status
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregaSecionArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //

            //$table->string('seccion');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //

            $table->dropColumn('seccion');
        });
    }
}
