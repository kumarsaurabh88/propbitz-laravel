<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Auth;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Exception;
use App\Transactions;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
  

class RazorpayPaymentController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {        

        return view('razorpayView'); 

    }

    public function store(Request $request){
     
      
        $input = $request->all();
 
      // $api = new Api('rzp_live_enqYuOIbPQpxcG', '1WGMl7bJyAsbRe5Psmleq6Ss');
        //for test
       $api = new Api('rzp_test_qollb45tXeTNJ9', 'k0e6CWxGI77DsGbc2lZl7b7Z');

        if($request->has('error')){
            // dd($request->all());
            $data = $request->error['metadata'];
            // dd($data);
            $payment_id = json_decode($data)->payment_id;
            $payment = $api->payment->fetch($payment_id);
            
            if(isset($payment)){
               // dd($payment);
                Transactions::create(['name'=> $payment->notes->name,
                'transaction_amount'=> $payment['amount']/100,
                'payment_id'=> $payment_id,
                'payment_source'=> 'razorpay',
                'phone'=>$payment->notes->phone,
                'email'=> $payment->notes->email,
                'raw_response'=>json_encode($payment),
                'status'=> 0]);
                $user_email= $payment->notes->email;
                $send_data = array('name'=>$payment->notes->name,'amount'=>$payment['amount']/100);
                $email_template = 'email.fail_transaction';
                $mail_subject = 'Payment Failed';
                
                $this->sendMail($user_email,$send_data,$email_template,$mail_subject);
            }
                //return redirect()->to('payment-failed');
                return view('website.payment-failed',compact('payment_id'));
        }else{
            $payment = $api->payment->fetch($input['razorpay_payment_id']);
            
            if(count($input)  && !empty($input['razorpay_payment_id'])) {

                try {
                    $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));  
                  
                    $transactions_id = Transactions::insertGetId([
                    'name'=> $payment->notes->name,
                    'transaction_amount'=> $payment['amount']/100,
                    'payment_id'=> $input['razorpay_payment_id'],
                    'payment_source'=> 'razorpay',
                    'email'=>$payment->notes->email,
                    'phone'=> $payment->notes->phone,
                    'raw_response'=>json_encode($payment),
                    'status'=> 1]); 
                    
                     $create_receipts = "App\Receipt"::insertGetId([
                        'receipt_no'=> "YSF/20-21/OD/" . time() ,
                        'name'=> $payment->notes->name,
                       'email'=> $payment->notes->email,
                       'phone'=> $payment->notes->phone,
                       'receipt_date'=> date("Y-m-d"),
                        'payment_id'=> $input['razorpay_payment_id'],
                        'amount'=> $payment['amount']/100,
                        'transaction_id'=> $transactions_id,
                    ]);
                    
                    
                    
                        $user_email=  $payment->notes->email;
                        $send_data = array('name'=>$payment->notes->name,'amount'=>$payment['amount']/100);
                        $email_template = 'email.Success_payment';
                        $mail_subject = 'Payment Successfull';
                         $this->sendMail($user_email,$send_data,$email_template,$mail_subject);
                       $token = $token = (string) Str::uuid();
                        Session::put('pay_token', $token);
                    return redirect('donate-thank-you?token='.$token.'&transactions_id='.$transactions_id);
                } catch (Exception $e) {
                    // dd($e);
                    return  $e->getMessage();
                    return redirect()->back();
                }
    
            }
        }
        //   return response()->json([
        //             'status' => true,
        //             'data' => null,
        //             'message' => 'Payment Successfully!!'
        //         ]);

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

  

  /*  public function sendMailTest($user_email, $send_data, $email_template,$subject,$attpath){
        \Mail::send($email_template, $send_data, function ($message) use ($user_email,$subject,$attpath){
            $message->to([$user_email]);
            $message->bcc(['depreet@88gravity.com'] );
            $message->from('abhishek@datafolkz.in', 'Data Folkz');
            $message->subject($subject);
            $message->attach(
                $attpath,
                array(
                    'as' => 'Invoice.pdf',
                    'mime' => 'application/pdf',
                )
            );
        });
    }*/

    public function sendMail($user_email, $send_data, $email_template,$subject){
        \Mail::send($email_template, $send_data, function ($message) use ($user_email,$subject){
            $message->to([$user_email]);
            $message->bcc(['nitishc50@gmail.com'] );
            $message->from('nitish@88gravity.com', 'youwecan');
            $message->subject($subject);
            
        });
    }

}