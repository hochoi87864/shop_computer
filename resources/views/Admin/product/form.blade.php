@csrf
<div class="row">
  <div class="col-md-8 pl-3 pr-3">
    <div class="form-group">
      <label>Tên sản phẩm: </label>
      <input type="text" class="form-control" name="pro_name" value="" placeholder="Nhập tên sản phẩm...">
    </div>
    <div class="form-group">
      <label>Mô tả sản phẩm: </label>
      <textarea name="pro_description" placeholder="Nhập mô tả sản phẩm..." rows="3" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label>Nội dung sản phẩm: </label>
      <textarea name="pro_content" rows="5" class="form-control" placeholder="Nhập nội dung sản phẩm..."></textarea>
    </div>
  </div>
  <div class="col-md-4 pl-3 pr-3">
    <div class="form-group">
      <label>Loại sản phẩm</label>
      <select name="pro_category_id" class="form-control">
        @foreach($categories as $key => $category)
          <option value="{{$category->id}}">{{$category->c_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Giá sản phẩm: </label>
      <input type="text" class="form-control" name="pro_price" value="" placeholder="Nhập giá sản phẩm...">
    </div>
    <div class="form-group">
      <label>Số lượng sản phẩm: </label>
      <input type="number" class="form-control" name="pro_number" value="" placeholder="Nhập số lượng sản phẩm...">
    </div>
    <div class="form-group">
      <label>Giảm giá: </label>
      <input type="number" class="form-control" name="pro_sale" value="" placeholder="Giảm giá sản phẩm...">
    </div>
    <div class="form-group">
      <label>Ảnh minh họa:</label>
      <img id="img_output" style="width: 100%;" class="mb-3" src="{{asset('unimg.jpg')}}"/>
      <input type="file" name="pro_image" id="img_input" class="form-control"/>
    </div>
  </div>
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success mr-3" style="float: right"/>
<div style="clear: both"></div>
@section('javascript')
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#img_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#img_input").change(function() {
      readURL(this);
    });
  </script>
@endsection