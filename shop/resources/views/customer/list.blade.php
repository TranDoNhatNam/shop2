


@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Khách Hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Khach Hang</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
  {{-- Noi Dung --}}
  
<section class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
               
            <a href="{{ url('khachhang/them') }}">Thêm mới</a>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Tên Sản Phẩm </th>
                      <th>Kiểu sản Phẩm</th>
                      <th>miêu tả</th>
                      <th>Đơn Giá</th>
                      <th>Giá ưu Đãi</th>
                      <th>Ghi chú</th>
                      <th>Đơn vị</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($listCustomer as $customer)
                    
                    <tr>
                      <td> {{ $customer->name }}</td>
                      <td> {{ $customer->gender}}</td>
                      <td>{{ $customer->email }}</td>
                      <td>{{$customer->address}}</td>
                      <td>{{ $customer->phone_number }}</td>
                      <td>{{ $customer->note }}</td>
                      <td><a href="{{url('khachhang/xoa/'.$customer->id)}}">Xóa</a></td>
                      <td><a href="{{url('khachhang/sua/'.$customer->id)}}">sửa</a></td>
                      
                    </tr>
                @endforeach

               



</ul>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>

  {{-- Noi Dung --}}
@endsection











