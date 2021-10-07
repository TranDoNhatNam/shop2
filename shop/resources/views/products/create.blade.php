
@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Them Sản Phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Them San Pham</li>
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
              <form method="POST" action="{{url('sanpham/save-products')}}"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tên sản Phẩm</label>
                              <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                            </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kiểu sản phẩm</label>
                            <select name="id_type" class="form-control">
                                @foreach ($typeProduct as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>       
                                @endforeach
                                                   

                            </select>
                      
                          </div>
                      </div>
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label for="exampleInputPassword1">Miêu tả</label>
                          <input type="text" class="form-control" name="description" placeholder="nhập miêu tả">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Đơn giá</label>
                        <input type="text" class="form-control" name="unit_price" placeholder="nhập đơn giá">
                      </div>
                    </div>
                 </div>
                  
                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Giá ưu Đãi</label>
                        <input type="text" class="form-control" name="promotion_price" placeholder="nhập giá ưu đãi">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Đơn vị</label>
                        <input type="text" class="form-control" name="unit" placeholder="nhập đơn vị">
                      </div>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                   
                    
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