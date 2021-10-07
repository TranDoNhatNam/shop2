{{-- <h2>Sửa</h2>
<form method="POST" action="{{url('khachhang/edit-customer/'.$customer->id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Tên khách hàng: <input type="text" name="name" value="{{ $customer->name }}"/><br>
    giới tính: <input type="text" name="gender" value="{{$customer->gender}}"/><br>
    mail: <input type="text" name="email" value="{{$customer->email}}" /><br>
    địa chỉ: <input type="text" name="address" value="{{$customer->address}}"/><br>
    số điện thoại: <input type="text" name="phone_number" value="{{$customer->phone_number}}"/><br>
    ghi chú : <input type="text" name="note" value="{{$customer->note}}"/><br>
    <button type="submit">cập nhật</button>
</form> --}}



@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Thêm Khách Hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Thêm Khách Hàng</li>
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
           <form method="POST" action="{{url('khachhang/edit-customer/'.$customer->id)}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tên Khách Hàng</label>
                              <input type="text" class="form-control" name="name" placeholder="Tên Khách Hàng" value="{{ $customer->name }}">
                            </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">giới tính</label>
                            <input type="text" class="form-control" name="gender" placeholder="nhập giới tính" value="{{$customer->gender}}">
                      
                          </div>
                      </div>
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label for="exampleInputPassword1">Mail</label>
                          <input type="text" class="form-control" name="email" placeholder="nhập ymail" value="{{$customer->email}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="nhập địa chỉ" value="{{$customer->address}}">
                      </div>
                    </div>
                 </div>
                  
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">số DT</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="nhập số điện thoại" value="{{$customer->phone_number}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ghi chú</label>
                        <input type="text" class="form-control" name="note" placeholder="nhập đơn vị" value="{{$customer->note}}">
                      </div>
                    </div>
                </div>
                  
                {{-- <div class="row">
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                    --}}
                    
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Luu</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div>
</section>

  {{-- Noi Dung --}}
@endsection