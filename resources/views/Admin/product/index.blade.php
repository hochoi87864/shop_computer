@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sản phẩm - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Sản phẩm - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                  @if(isset($products))
                    @foreach($products as $pro)
                      <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->pro_name}}</td>
                        <td>{{$pro->Category->c_name}}</td>
                        <td><img style="width:80px;height:80px" src="{{asset('upload/pro_image/'.$pro->pro_image)}}" alt="No Avatar"/></td>
                        <td>{{$pro->pro_status}}</td>
                        <td>{{$pro->pro_hot}}</td>
                        <td>
                          <a href="{{route('admin.product.edit',$pro->id)}}">Sửa</a>
                          <a href="{{route('admin.product.handle',['delete',$pro->id])}}">Xóa</a>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection