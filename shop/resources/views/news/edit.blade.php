@extends('master')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Them sản phẩm mới</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active">Them sản phẩm mới</li>
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
             <form method="POST" action="{{url('moi/edit-news/'.$news->id)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tiêu đề</label>
                              <input type="text" class="form-control" name="title" placeholder="nhập tiêu đề" value="{{ $news->title }}">
                            </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung</label>
                            <input type="text" class="form-control" name="content" placeholder="nhập nội dung" value="{{$news->content}}">
                      
                          </div>
                      </div>
                  </div>                  
                <div class="row">
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="image" value="{{$news->image}}">
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