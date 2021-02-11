@extends('layouts.layout')

@section('main_content')
    
<main>
    @foreach ($pasta as $dato)
    @if ($loop->first)
    <h2>LE LUNGHE</h2>
    @endif
    @if ($loop->iteration === 6)
    <h2>LE CORTE</h2>
    @endif
     @if ($loop->last)
      <h2> LE CORTISSIME</h2>
    @endif

<div class="card">
    <div class="items">
        <div class="card__overlay"> 
                    <img  src="{{asset ('img/icon.svg')}}" alt="">
                    
                    <h5>{{ $dato['titolo'] }}</h5>
        </div>
        <img src=" {{ $dato['src'] }}" alt="">


    </div>

</div>


    @endforeach
    
    
</main>
@endsection

