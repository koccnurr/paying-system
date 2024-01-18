<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function renewMemberships()
    {
        // Şu andaki tarih ve saat
        $now = now();

        // 30 gün sonrası
        $expirationDate = $now->copy()->addDays(30);

        // Son gün ve son saatteki üyelikleri getir
        $usersToRenew = User::where('finished_at', '<=', $expirationDate)
        ->get();
   

        // Her bir kullanıcı için ödeme işlemini gerçekleştir
        foreach ($usersToRenew as $user) {
            $this->processPayment($user);
        }
    }

    private function processPayment(User $user)
    {
        // PayCellMockService kullanarak ödeme işlemini simüle et
        $payCellService = new PayCellMockService();
        $paymentResult = $payCellService->processPayment($user->email, $paymentAmount);

        // Ödeme başarılıysa üyelik süresini güncelle
        if ($paymentResult['success']) {
            $this->updateMembership($user);
        } else {
            // Ödeme başarısızsa gerekirse kullanıcıya bilgi ver veya logla
            // Log::error('Ödeme başarısız: ' . $paymentResult['error']);
        }
    }


}
