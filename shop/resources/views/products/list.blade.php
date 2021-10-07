@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Sản Phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">San Pham</li>
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
                
                <a href="{{ url('sanpham/them') }}">Thêm mới</a>
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
                      <th>Hình ảnh</th>
                      <th>Đơn vị</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($listProducts as $products)
                    
                    <tr>
                      <td> {{ $products->name }}</td>
                      <td> {{ $products->types->name}}</td>
                      <td>{{ $products->description }}</td>
                      <td>{{ $products->unit_price }}</td>
                      <td>{{ $products->promotion_price }}</td>
                      <td>{{ $products->image }}</td>
                      <td>{{ $products->unit }}</td>
                      <td><a href="{{url('sanpham/xoa/'.$products->id)}}">Xoa</a></td>
                      <td><a href="{{url('sanpham/sua/'.$products->id)}}">sửa</a></td>
                      
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