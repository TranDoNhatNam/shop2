<?php

namespace App\Http\Controllers;
use App\Bills;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    //
    public function getview(){
        $listBills = Bills::all();
        return view('bills.list')->with('listBills', $listBills);
    }

    public function getCreate(){
        $listProducts = Products::all();
        return view('bills.create')->with('listProducts', $listProducts);
    }

    public function getEdit($id){
        $bills = Bills::find($id);
        $listProducts = Products::all();
        return view('bills.edit')->with('bills', $bills)->with('listProducts', $listProducts);
    }

    // thêm 
    public function save(Request $request){
        $bills = new Bills();
        $bills->id_customer = $request->id_customer;
        $bills->date_order = $this->formatDate($request->date_order);
        $bills->total = $request->total;
        $bills->payment = $request->payment;
        $bills->note = $request->note;
        $bills->save();

        return redirect('/hoadon');
    }

    // dinh dang ngay- thang - nam
    public function formatDate($date)
    {
        $date = str_replace('/','-',$date);
        $format = Carbon::parse($date)->format('Y-m-d');
        return $format;
    }
    // mtao cot
    public function renderColumnProduct(){
        $listProducts = Products::all();
        $html = '<tr><td><select class="select-product" name="id_product"><option value="0">Chon San Pham</option>';
                
        foreach ($listProducts as $product){
            $html .= '<option value="'.$product->id.'">'.$product->name.'</option>';
        }
               
        $html .= '</select>
            </td>
            <td>
                <input type="text" value="" name="quantity" />
            </td>
            <td>
                <input type="text" value="" name="unit_price" />
            </td>
            <td>
                <input type="text" value="" name="unit_price" />
            </td>
        </tr>';

        return $html;
    }
// lay gia cua san pham tu db
    public function getProductPrice(Request $request){
        $id_product = $request->id_product;
        
        $product = Products::find($id_product);

        return $product->unit_price;
    }


    public function edit(Request $request , $id){
        $bills = Bills::find($id);
        $bills->id_customer = $request->id_customer;
        $bills->date_order = $this->formatDate($request->date_order);
        $bills->total = $request->total;
        $bills->payment = $request->payment;
        $bills->note = $request->note;
        $bills->save();

        return redirect('/hoadon');

    }

    public function delete($id){

        $bills = Bills::find($id);
        $bills->delete();
        return redirect('/hoadon');
    }


}
