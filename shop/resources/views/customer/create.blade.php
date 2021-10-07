
@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Them Khách Hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Them Khách Hàng</li>
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
             <form method="POST" action="{{url('khachhang/save-customer')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tên Khách Hàng</label>
                              <input type="text" class="form-control" name="name" placeholder="Tên Khách Hàng">
                            </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">giới tính</label>
                            <input type="text" class="form-control" name="gender" placeholder="nhập giới tính">
                      
                          </div>
                      </div>
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label for="exampleInputPassword1">Mail</label>
                          <input type="text" class="form-control" name="email" placeholder="nhập ymail">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="nhập địa chỉ">
                      </div>
                    </div>
                 </div>
                  
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">số DT</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="nhập số điện thoại">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ghi chú</label>
                        <input type="text" class="form-control" name="note" placeholder="nhập đơn vị">
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