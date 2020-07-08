<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Paystack;
use Auth;
use App\User;
use App\Order;
use App\Cart;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('users.shopping-cart');
        }
        $this->validate($request, [
            'orderID' => 'string',
            'reference' => 'string',
        ]);
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->address;
        $order->state = $request->state;
        $order->city = $request->city;
        $order->payment_id = '3f7g8h7h3ee';
        
        // $order->relish_id =  $request->orderID;
        
        $order->reference =  $request->reference;
        if(Auth::user() != NULL){
            Auth::user()->orders()->save($order);
            return Paystack::getAuthorizationUrl()->redirectNow();
        }else{
        $order->order_id = 'hh6478hh7yd';
        $order->save();
        return Paystack::getAuthorizationUrl()->redirectNow();
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();
        return redirect()->route('products.index')->with('success', 'Your order payment was successfull');
    }


    public function handleWebHook(Request $request){
        $data = json_encode($request->all());
        $event = json_decode($data, true);
       if($event['event'] === "charge.success"){
           $reference  = $event['data']['reference'];
       $updateOrder =  Order::where(['reference' => $reference])->update([
            'createdAt' => date("Y-m-d H:i:s",strtotime($event['data']['created_at'])),
            'paidAt' => date("Y-m-d H:i:s",strtotime($event['data']['paidAt'])),
            'payment_status' => 'PAID',
            'payment_id' => $event['data']['id']
        ]);
        Log::info($event);
        $request->session()->forget('cart');
       if($updateOrder){
        return response()->json(200);
        }
       }else{
        Log::info($event);
       }
       
    }

//     $pdf = PDF::loadView('customers.receiptpdf', $data);
// $path = public_path('invoice/').$user->id.'-'.time().'.pdf';
// $pdf->save($path);
//     'pdf' => base64_encode($pdf->output())
//     'pdf' => $path
// $delay_time = Carbon::now()->addSeconds(5);
// $notify = Notification::send($user, (new OrderInvoice($details))->onQueue('email')->delay($delay_time));

//     ->attach($this->details['pdf']);
//     ->attachData(base64_decode($this->details['pdf']), ['mime' => 'application/pdf']);
    // $user = User::find($confirm_order->user_id);
    // $data['user'] = $user;
    // // return dd($data);
    // $pdf = PDF::loadView('customers.receiptpdf', $data);
    // $path = public_path('invoice/').$user->id.'-'.time().'.pdf';
    // $pdf->save($path);

    // $details = [
    //     'greeting' => 'Hello, '. $user->name. '',
    //     'body' => 'Your order payment was successful',
    //     'order_code' => 'Your order code is: '. $confirm_order->order_code,
    //     'order_details' =>  unserialize($confirm_order->cart),
    //     // 'pdf' => base64_encode($pdf->output())
    //     'pdf' => $path

    // // protected function invoicePDF(){
    // $pdf = PDF::loadView('customers.receiptpdf', $data);
    // $path = storage_path('app/public/pdf/')."example.pdf";
    // $pdf->save($path);
    //     $pdf->download('invoice.pdf');
    // //     $pdf = PDF::loadView('mails.mail', $data);
    // // }
}