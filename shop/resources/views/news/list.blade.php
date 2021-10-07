
@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Sản phẩm mới</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Sản Phẩm mới</li>
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
                
               <a href="{{ url('moi/them') }}">Thêm mới</a>
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
                      <th>Tiêu Đề</th>
                      <th>Nội Dung</th>
                      <th>Ảnh</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($listNews as $news)
                    
                    <tr>
                      <td> {{ $news->title }}</td>
                      <td> {{ $news->content}}</td>
                      <td>{{ $news->image }}</td>
                      <td><a href="{{url('moi/xoa/'.$news->id)}}">Xóa</a></td>
                      <td><a href="{{url('moi/sua/'.$news->id)}}">sửa</a></td>
                      
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