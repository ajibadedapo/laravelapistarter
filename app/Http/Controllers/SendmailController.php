<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function sendMail(Request $request)
    {

        Mail::send('emails.sendSignature', ['sendername' => $sendername, 'imagelink' => $signatureimage], function ($m) use ($decodedimage, $reipientemail, $sendername)  {
            $m->from('hammed@specvista.com', "Signature App");
            $m->attachData($decodedimage, "signature.png");
            $m->to($reipientemail, "")->subject("$sendername sent you something");
        });
    }
}
