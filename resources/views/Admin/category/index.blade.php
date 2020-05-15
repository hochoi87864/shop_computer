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
            @if(Session::has('create_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('create_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('edit_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('edit_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(Session::has('delete_category_success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thành công !</strong> {{Session::get('delete_category_success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <table class="table table-hover table-striped" id="dataTable">
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
                            <a class="btn_delete_sweet" href="{{route('admin.category.handle',['delete',$category->id])}}" data-id="{{$category->id}}">Xóa</a>
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
@section('javascript')
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable({
      // "order": [[ 0, "desc" ]]
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
            text: "Bạn có chắc chắn muốn xóa loại sản phẩm ID="+id+" không ? Điều này sẽ ảnh hưởng đến liên kết dữ liệu ! Bạn có thể chuyển trạng thái sang private để ngừng hiển thị sản phẩm ở giao diện khách hàng !! Xin cảm ơn !!!",
            icon: "info",
            buttons: ["Không","Có"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Thành công","Hệ thống chuẩn bị xóa loại sản phẩm mang ID ="+id+" !",'success').then(function() {
                window.location.href = url;
                });
            }
        });
  });
</script>
@endsection