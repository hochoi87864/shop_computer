@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bài viết - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Bài viết - Danh sách</li>
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
                    <th>Tên bài viết</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Xử lý</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                      <tr>
                          <td>{{$article->id}}</td>
                          <td>{{$article->a_name}}</td>
                          <td><img style="width:80px;height:80px" src="{{asset('upload/a_image/'.$article->a_image)}}" alt="No Avatar"/></td>
                          <td>{{$article->a_description}}</td>
                          <td>{{$article->a_status}}</td>
                          <td>{{$article->created_at}}</td>
                          <td>
                            <a href="{{route('admin.article.edit',$article->id)}}">Sửa</a>
                            <a href="{{route('admin.article.handle',['delete',$article->id])}}">Xóa</a>
                          </td>
                      </tr>
                    @endforeach
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