<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendEmail(string $email, string $text): void
    {
        Mail::raw($text, function(Message $mail) use($email) {
            $mail->to($email, env('MAIL_FROM_NAME'))
            ->subject('New Order')->from(env('MAIL_FROM_ADDRESS'));
        });
    }

    public function create(Request $request)
    {
        $data = $request->except(['_token']);
        $order = Order::query()->create($data);

        // dd($data);
        $this->sendEmail('mesrop.araqelyan.18@gmail.com', json_encode($data));
        return view('vacancy.success');
    }
}
