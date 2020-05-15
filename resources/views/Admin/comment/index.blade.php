@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comment - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Comment - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        @if(isset($ratings))
        <div class="card-body">
            <table class="table table-hover table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Người đánh giá</th>
                    <th>Sản phẩm</th>
                    <th>Nội dung</th>
                    <th>Rating</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($ratings as $rating)
                        <tr>
                          <td>{{$rating->id}}</td>
                          <td>{{$rating->User->name}}</td>
                          <td>{{$rating->Product->pro_name}}</td>
                          <td>{{$rating->ra_content}}</td>
                          <td>{{$rating->ra_number}}</td>
                          <td>{{$rating->created_at}}</td>
                            <td><a href="{{route('admin.comment.action',['delete',$rating->id])}}" class="btn_delete_sweet" data-id="{{$rating->id}}">Xóa</a></td>
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
            text: "Bạn có chắc chắn muốn xóa đánh giá ID="+id+" không ?",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa đánh giá mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection