@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thuộc tính - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Thuộc tính - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        @if(isset($attributes))
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên thuộc tính</th>
                    <th>Kiểu</th>
                    <th>Giá trị</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($attributes as $attribute)
                        <tr>
                          <td>{{$attribute->id}}</td>
                          <td>{{$attribute->at_name}}</td>
                          <td>{{$attribute->at_type}}</td>
                          <td>
                            @if($attribute->at_value)
                              <ul>
                              @foreach(explode(';',$attribute->at_value) as $attr)
                                <li>{{$attr}}</li>
                              @endforeach
                              </ul>
                            @endif
                          </td>
                          <td>
                            <a href="{{route('admin.attribute.edit',$attribute->id)}}">Sửa</a>
                             |
                            <a href="{{route('admin.attribute.handle',['delete',$attribute->id])}}">Xóa</a>
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