{{-- <h2>Sửa</h2>
    <form method="POST" action="{{url('hoadon//edit-bills/'.$bills->id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    ID khách hàng: <input type="text" name="id_customer" /><br>
    Ngày mua hàng: <input type="date" name="date_order" /><br>
    tổng sản phẩm: <input type="text" name="total" /><br>
    thanh toán: <input type="text" name="payment" /><br>
    ghi chú : <input type="text" name="note" /><br>
    <button type="submit">Lưu</button>
</form> --}}



@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Them Hóa đơn</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Them Hóa đơn</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
  {{-- Noi Dung --}}
  
<section class="content">
      <div class="container-fluid">
            <!-- /.card-header -->
              <!-- form start -->
               <form method="POST" action="{{url('hoadon/edit-bills/'.$bills->id)}}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Id khách hàng</label>
                              <input type="text" class="form-control" name="id_customer" placeholder="Nhập id khách hàng" value="{{$bills->id_customer}}">
                            </div>
                      </div>
                                          
                     </div>
                 <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label for="exampleInputPassword1">Ngày mua hàng</label>
                          <input type="text" class="form-control"name="date_order" placeholder="nhập ngày mua hàng" value="{{$bills->date_order}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">tổng sản phẩm</label>
                        <input type="text" class="form-control" name="total" placeholder="nhập tổng sản phẩm"  value="{{$bills->total}}">
                      </div>
                    </div>
                 </div>
                  
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Thanh toán</label>
                        <input type="text" class="form-control" name="payment" placeholder="nhập giá thanh toán" value="{{$bills->payment}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ghi chú</label> 
                        <input type="text" class="form-control" name="note" placeholder="nhập đơn vị" value="{{$bills->note}}">
                      </div>
                    </div>
                </div>

                 <hr>
    <table border="1" id="bill-detail">
        <thead>
            <tr>
                <td>Sản Phẩm</td>
                <td>Số lượng</td>
                <td>Giá bán</td>
                <td>Thành tiền</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select class="select-product" name="id_product">
                        <option value="0">Chon San Pham</option>
                        @foreach ($listProducts as $product)
                           <option value="{{$product->id}}">{{$product->name}}</option>
                       @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" value="" name="quantity" />
                </td>
                <td>
                    <input type="text" value="" class="unit_price" name="unit_price" />
                </td>
                <td>
                    <input type="text" value="" name="unit_price" />
                </td>
            </tr>
            {{-- Nhet cot san pham vao day --}}
        </tbody>
    </table>
    <br>
    <a href="#" id="add-column">Them Cot</a>
    <br><hr>

            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Luu</button>
            </div>
   
</form>
    {{-- thu vien jqr --}}
<script src="{{asset('js/jquery.js')}}"></script>

<script>

    //Su Kien Click
    $(document).on('click','#add-column', function(e){
        e.preventDefault();
        $.ajax({
            method: 'GET',
            url: '/hoadon/themcot',
            success:function(html){
                $('#bill-detail tbody').append(html);
            }
        });
    });

    //Su Kien Chon Select
    $(document).on('change', '.select-product', function(){
        let id_product = $(this).val();
        $.ajax({
            method: 'GET',
            context: this,
            url: '/hoadon/laygia',
            data: {id_product:id_product},
            success:function(unit_price){
                $(this).closest('tr').find('.unit_price').val(unit_price);
            }
        });
    });

</script>
</section>

  {{-- Noi Dung --}}
@endsection