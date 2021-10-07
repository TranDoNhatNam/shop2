<h2>Sửa</h2>
<form method="POST" action="{{url('slide/edit-slide/'.$slide->id)}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Liên kết: <input type="text" name="link" value="{{ $slide->link }}"/><br>
    hình ảnh: <input type="text" name="image" value="{{$slide->image}}" /><br>
   <button type="submit">cập nhật</button>
</form>