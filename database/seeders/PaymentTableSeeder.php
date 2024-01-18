<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $createpayment = Payment::create([
            'user_id' => 3,
            'amount' => 50.00,
            'payment_date' => '2024-01-15',
        ]);
        $createpayment = Payment::create([
            'user_id' => 2,
            'amount' => 50.00,
            'payment_date' => '2024-01-10',
        ]);
        $createpayment = Payment::create([
            'user_id' => 1,
            'amount' => 50.00,
            'payment_date' => '2024-01-01',
        ]);
    }
}
