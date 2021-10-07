<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function getView(){
        $listCustomer = Customer::all();
        return view('customer.list')->with('listCustomer', $listCustomer);
    }

     public function getCreate(){
       
         return view('customer.create');
     }

    public function save(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->note = $request->note;
        $customer->save();

        return redirect('/khachhang');
    }

    public function getEdit($id){
        $customer = Customer::find($id);
        return view('customer.edit')->with('customer', $customer);
    }

    public function Edit(Request $request, $id){
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->note = $request->note;
        $customer->save();

        return redirect('/khachhang');
    }

    public function delete(Request $request , $id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/khachhang');
        

    }
}

// public function destroy($id) {
//     product_model::destroy($id);
//     return redirect()->route("products.index");
// }