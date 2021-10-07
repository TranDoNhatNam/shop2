<h2>Thêm</h2>

<form method="POST" action="{{url('slide/save-slide')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Liên kết: <input type="text" name="link" /><br>
    Ảnh: <input type="text" name="image" /><br>
    <button type="submit">Lưu</button>
</form>