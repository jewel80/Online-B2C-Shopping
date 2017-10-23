<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Session;
use Cart;
use DB;

class checkoutController extends Controller
{
    public function index(){
    	return view('frontEnd.checkout.checkoutContent');
    }

    public function customerSingup(Request $request){
    	$this->validate($request, [
	        'firstName' => 'required',
	        'lastName' => 'required',
	        'emailAddress' => 'required',
	        'password' => 'required',
	        'address' => 'required',
	        'phoneNumber' => 'required',
	        'districtName' => 'required',
	    ]);

    	$customers=new Customer;
    	$customers->firstName =$request->firstName;
    	$customers->lastName =$request->lastName;
    	$customers->emailAddress =$request->emailAddress;
    	$customers->password =$request->password;
    	$customers->address =$request->address;
    	$customers->phoneNumber =$request->phoneNumber;
    	$customers->districtName =$request->districtName;
    	$customers->save();
    	$customerId=$customers->id;
        Session::put('customerId',$customerId);
        return redirect('/checkout/shipping')->with('message','please validation From');
    }


    public function customerLogin(Request $request){
         
        $emailAddress = $request->emailAddress;
        $password = $request->password;
       
        $users = DB::table('customers')
            ->where('emailAddress',$emailAddress )
            ->Where('password',$password)
            ->first();
       
        if($users){
            Session::put('id',$users->id);
            
            return redirect('/checkout/shipping');
         }else{
           Session::put('massege','Your Username or Password Invalid!!');
           return redirect('/checkout');
        }
    }




































    public function shippingForm(){
    	$customerId = Session::get('customerId');
        $customerById = Customer::where('id', $customerId)->first();
    	return view('frontEnd.checkout.shippingForm',['customerById'=>$customerById]);
    }

     public function saveShippingForm(Request $request){
        $shipping = new Shipping;
        $shipping->fullName =$request->fullName;
        $shipping->emailAddress =$request->emailAddress;
        $shipping->address =$request->address;
        $shipping->phoneNumber =$request->phoneNumber;
        $shipping->districtName =$request->districtName;
        $shipping->save();
        $shippingId =$shipping->id;
        Session::put('shippingId',$shippingId);
        return redirect('/checkout/paymet');

    }

    public function paymentForm(){
    	return view('frontEnd.checkout.paymentForm');
    }

    public function orderSaveInfo(Request $request){
        $paymentTypes=$request->paymentType;

        if ($paymentTypes== 'cashOnDelivery') {

            $order= new Order;
            $order->customerId = Session::get('customerId');
            $order->shippingId =Session::get('shippingId');
            $order->orderTotal =Session::get('orderTotal');
            $order->save();
            $orderId=$order->id;
            Session::put('orderId',$orderId);

            $payment = new Payment();
            $payment->orderId = Session::get('orderId');
            $payment->paymentType = $paymentTypes;
            $payment->save();


            $orderDetail = new OrderDetail();
            $cartProducts= Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail->orderId = Session::get('orderId');
                $orderDetail->productId = $cartProduct->id;
                $orderDetail->productName = $cartProduct->name;
                $orderDetail->productPrice = $cartProduct->price;
                $orderDetail->productQuantity = $cartProduct->qty;
                $orderDetail->save();
            }
            return redirect('/checkout/my-home');


        }elseif ($paymentTypes== 'paypal') {
            return 'Under construction paypal payment type. please use cash on delivary';
        }elseif ($paymentTypes== 'bkash') {
            return 'Under construction bkash payment type. please use cash on delivary';
        }
    }

    public function customerHome(){
        return view('frontEnd.checkout.customerHome');
    }
}
