<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel練習LOLOLO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container mt-3">
  <h2>laravel資料(新增、修改、刪除)</h2>         
  <a href="{{route('student0309.create')}}" class="btn btn-success mb-3 mt-3">單筆新增</a>
  <a href="{{route('printexcel')}}" class="btn btn-success mb-3 mt-3">印出EXCEL</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>修改/刪除</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>
                {{-- <a href="http:/student0309/1/edit">修改</a> --}}
                
                {{-- <a href="http://">刪除</a> --}}
                <form action="{{route('student0309.destroy',['student0309'=>$item->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-warning" href="{{route('student0309.edit',['student0309'=>$item->id])}}">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash-can"></i>
                  </button>
                </form>
            </td>
      </tr> 
        @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
