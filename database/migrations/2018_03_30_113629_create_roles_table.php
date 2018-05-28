<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        $data = [
                  [
                    'name'            => 'Doctor', 
                    'created_at'      => \Carbon\Carbon::now(),
                  ],
                  [
                    'name'           => 'Pharmacist',
                    'created_at'     => \Carbon\Carbon::now(),           
                  ],
                  [
                    'name'           => 'Nurse',
                    'created_at'     => \Carbon\Carbon::now(),                 
                  ],
                  [
                    'name'            => 'Receptionist', 
                    'created_at'      => \Carbon\Carbon::now(),
                  ],
                  [
                    'name'           => 'Laboratist',
                    'created_at'     => \Carbon\Carbon::now(),           
                  ],
                  [
                    'name'           => 'Accountant',
                    'created_at'     => \Carbon\Carbon::now(),                 
                  ]
                ];
         
        DB::table('roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
