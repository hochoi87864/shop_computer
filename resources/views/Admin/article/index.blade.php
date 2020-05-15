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
          @if(Session::has('create_article_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('create_article_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if(Session::has('edit_article_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('edit_article_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if(Session::has('delete_article_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Thành công !</strong> {{Session::get('delete_article_success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
            <table class="table table-hover table-striped" id="dataTable">
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
                            <a href="{{route('admin.article.handle',['delete',$article->id])}}" data-id="{{$article->id}}" class="btn_delete_sweet">Xóa</a>
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
@section('javascript')
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable({
      "order": [[ 0, "desc" ]]
    });
  });
</script>
<script>
  $(".btn_delete_sweet").click(function(e)
  {
    e.preventDefault();
    url = $(this).attr('href');
    id = $(this).attr('data-id');
    swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có chắc chắn muốn xóa bài viết ID="+id+" không ? ",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa bài viết mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection