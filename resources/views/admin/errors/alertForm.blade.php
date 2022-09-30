@if (count($errors) > 0)
      <div >
        <strong>Rất Tiếc!</strong> Đã có một số lỗi khi bạn nhập dữ liệu<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif