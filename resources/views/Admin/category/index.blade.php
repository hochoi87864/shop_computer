@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sản phẩm - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Loại sản phẩm - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        @if(isset($categories))
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Thuộc tính</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                          <td>{{$category->id}}</td>
                          <td>{{$category->c_name}}</td>
                          <td><span class="badge badge-{{($category->c_status==1)?"success":"danger"}}">{{($category->c_status==1)?"public":"private"}}</span></td>
                          <td>
                            <ul>
                            @foreach ($category->Attributes as $at)
                              <li>{{$at->at_name}}</li>
                            @endforeach
                            </ul>
                          </td>
                          <td>
                            <a href="{{route('admin.category.edit',$category->id)}}">Sửa</a>
                             |
                             <a href="{{route('admin.category.handle',['delete',$category->id])}}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        @endif
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection