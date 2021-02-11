
 @include('layouts/header')


        @foreach ($data as $dato)

        <img src=" {{ $dato['src-h'] }}" alt="">
        <h4>{{$dato['titolo']}}</h4>

  

        @endforeach
        