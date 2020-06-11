@csrf
<div class="form-group">
    <label>Tên thuộc tính: </label>
    <input type="text" class="form-control" name="at_name" value="{{old('at_name',isset($attribute->at_name)?$attribute->at_name:'')}}" placeholder="Nhập tên thuộc tính...">
</div>
<div class="form-group ">
   <label>Kiểu: </label>
  <select class="form-control" name="at_type" id="selectForAttribute" value="{{old('at_type')}}">
     <option value="text" {{isset($attribute)?(($attribute->at_type=="text")?"selected":""):""}}>Text</option>
     <option value="number"  {{isset($attribute)?(($attribute->at_type=="number")?"selected":""):""}}>Number</option>
     <option value="numberfloat"  {{isset($attribute)?(($attribute->at_type=="numberfloat")?"selected":""):""}}>Number Float</option>
     <option value="select"  {{isset($attribute)?(($attribute->at_type=="select")?"selected":""):""}}>Select</option>
     {{-- <option value="checkbox"  {{isset($attribute)?(($attribute->at_type=="checkbox")?"selected":""):""}}>Checkbox</option>
     <option value="radiobox"  {{isset($attribute)?(($attribute->at_type=="radiobox")?"selected":""):""}}>Radio box</option> --}}
   </select>
</div>
<div class="form-group" id="textAreaForAttribute" style="display: none">
  <label>Giá trị: </label>
  <textarea class="form-control" rows="5" name="at_value" id="contentTextAreaForAttribute">
    {{isset($attribute)?$attribute->at_value:""}}
  </textarea>
</div>
<input type="submit" value="Lưu thông tin" class="btn btn-success btn_save_attribute"  style="float: right"/>
<div style="clear: both"></div>
@section('javascript')
  <script>
    $(function(){
      $("#selectForAttribute").change(function(){
        var selected = $(this).children("option:selected").val();
        if(selected !="text" || selected !="number" || selected !="numberfloat"){
          $("#textAreaForAttribute").css({'display':''});
        }
        if(selected =="number" || selected =="text" || selected =="numberfloat"){
          $("#textAreaForAttribute").css({'display':'none'});
          $("#contentTextAreaForAttribute").val('');
        }
      });
      var curentSelectedForAttribute = $("#selectForAttribute").children("option:selected").val();
      if(curentSelectedForAttribute !="text" || curentSelectedForAttribute !="number" || curentSelectedForAttribute !="numberfloat"){
        $("#textAreaForAttribute").css({'display':''});
      }
      if(curentSelectedForAttribute =="number" || curentSelectedForAttribute =="text" || curentSelectedForAttribute =="numberfloat"){
        $("#textAreaForAttribute").css({'display':'none'});
      }
    });
  </script>
@endsection
