<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateTelephoneTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up () {
            Schema ::create ('telephone', function (Blueprint $table) {
                $table -> increments ('id');
                $table -> unsignedInteger ('loc_table_id') -> nullable ();
                // Foreign Key for location telephone table
                $table -> foreign ('loc_table_id')
                    -> references ('id')
                    -> on ('location_tel')
                    -> onDelete ('cascade')
                    -> onUpdate ('cascade');
                $table -> string ('telephone');
                $table -> unsignedInteger ('user_id') -> nullable ();
                // Foreign Key for user table
                $table -> foreign ('user_id')
                    -> references ('id')
                    -> on ('users')
                    -> onDelete ('cascade')
                    -> onUpdate ('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down () {
            Schema ::dropIfExists ('telephone');
        }
    }
