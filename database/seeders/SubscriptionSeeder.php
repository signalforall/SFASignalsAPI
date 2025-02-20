<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            'name' => 'Free',
            'price' => 0,
            'duration' => null,
            'features' => json_encode(['Basic Access', 'Telegram Updates']),
        ]);
        Subscription::create([
            'name' => 'Premium (1 Month)',
            'price' => 25,
            'duration' => 30,
            'features' => json_encode(['Full Access', 'Telegram Updates', 'VIP Signals']),
        ]);

        Subscription::create([
            'name' => 'Premium (3 Months)',
            'price' => 50,
            'duration' => 90,
            'features' => json_encode(['Full Access', 'Telegram Updates', 'VIP Signals']),
        ]);

        Subscription::create([
            'name' => 'Premium (1 Year)',
            'price' => 100,
            'duration' => 365,
            'features' => json_encode(['Full Access', 'Telegram Updates', 'VIP Signals']),
        ]);
    }
}