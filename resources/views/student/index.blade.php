<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>views > student > index</title>
</head>
<body>
    <h1>這裡是 views > student > index.blade.php</h1>
    <a href="{{route('excel')}}">excel</a>
  
    <br>
    <!-- View stored in resources/views/greeting.blade.php -->       
        {{-- <h1>Hello, {{ $name }}</h1> --}}
        {{-- <h1>{{ $price }}</h1> --}}
        
        @foreach ($dataXDXD as $item)
            <p>{{$item['name']}} --- {{$item['mobile']}}</p>
        @endforeach
</body>
</html>