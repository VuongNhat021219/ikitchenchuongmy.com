@if ($errors->any())
        <ul class="alert alert-danger">
        <strong>Rất Tiếc!</strong> Đã có một số lỗi khi bạn nhập dữ liệu<br><br>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

