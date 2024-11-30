<?php

namespace App\Http\Controllers;

use App\Models\SmsLog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    // Tekli Sms Gönderimi
    public function singleSms(Request $request)
    {
       try {
        // Ücretsiz Kredi Limiti Sağlayan Twilio ile Entegrasyon Sağlanmıştır.
        // $sid = 'your_account_sid';
        // $token = 'your_auth_token';
        // $client = new Client($sid, $token);

        // SMS gönderme
        // $message = $client->messages->create(
        // $request->input('phone'),  Alıcı telefon numarası
        // [
        // 'from' => '123456789',  Twilio telefon numaranız
        // 'body' => $request->input('message');  Mesajınız
        // ]);

        $sms = new SmsLog();
        $sms->phone = $request->input('phone');
        $sms->message = $request->input('message');
        $sms->user_id = 1 ; // Auth::user()->id;
        $sms->save();

        return response()->json(['success' => true,'message' => 'SMS gönderildi']);
       } catch (Exception $th) {
        return response()->json(['success' => false,'message' =>'Hata Mesaj Gönderilemedi !' + ' ' + $th->getMessage()]);
       }
    }

    // Toplu Sms Gönderimi
    public function multiSms(Request $request)
    {

    }
}
