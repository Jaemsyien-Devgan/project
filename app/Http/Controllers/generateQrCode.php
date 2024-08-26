<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class generateQrCode extends Controller
{
    public function generateQrCode()
    {
        // Ganti nomor dengan nomor WhatsApp Anda
        $phoneNumber = '+6287739079503';

        // Ganti pesan dengan pesan default yang ingin dikirimkan
        $message = urlencode('Hello, I am interested in your services.');

        // Format URL WhatsApp
        $whatsappLink = "https://wa.me/{$phoneNumber}?text={$message}";

        // Generate QR Code dengan link WhatsApp
        $qrCode = QrCode::generate($whatsappLink);

        // Tampilkan di view
        return view('qrcode', compact('qrCode'));
    }
}
