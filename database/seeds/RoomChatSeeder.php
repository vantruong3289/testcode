<?php

use App\RoomChat;
use Illuminate\Database\Seeder;

class RoomChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RoomChat::class, 50)->create();
    }
}
