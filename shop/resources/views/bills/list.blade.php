
@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Hóa Đơn</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Hóa Đơn</li>
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
                
               
            <a href="{{ url('hoadon/them') }}">Thêm mới</a>
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
                      <th>Id khách hàng </th>
                      <th>Ngày mua hàng</th>
                      <th>Tổng số lượng</th>
                      <th>Thanh toán</th>
                      <th>Ghi chú</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($listBills as $bills)
                    
                    <tr>
                      <td> {{ $bills->id_customer }}</td>
                      <td> {{ Carbon\Carbon::parse($bills->date_order)->format('d-m-Y') }}</td>
                      <td>{{ $bills->total }}</td>
                      <td>{{ $bills->payment }}</td>
                      <td>{{ $bills->note }}</td>
                      <td><a href="{{url('hoadon/xoa/'.$bills->id)}}">Xóa</a></td>
                      <td><a href="{{url('hoadon/sua/'.$bills->id)}}">sửa</a></td>
                      
                    </tr>
                @endforeach    


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











