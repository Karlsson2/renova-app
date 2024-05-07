<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        foreach ($users as $user) {
            // Create an order for the user
            $order = Order::factory()->create([
                'created_by' => $user->id,
            ]);

            OrderItem::factory(3)->create([
                'order_id' => $order->id,
            ]);
        }
    }
}
