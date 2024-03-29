<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MovieSeeder::class);
        $this->call(TicketClassSeeder::class);
        $this->call(TicketCategorySeeder::class);
        $this->call(ShowTimeSeeder::class);
        $this->call(SeatSeeder::class);
    }
}
