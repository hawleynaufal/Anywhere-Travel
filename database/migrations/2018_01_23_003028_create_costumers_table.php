    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateCostumersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('costumers', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('name');
                $table->string('address');
                $table->string('phone');
                $table->enum('gender', ['Pria','Wanita']);
                $table->timestamps();
                $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('costumers');
        }
    }
