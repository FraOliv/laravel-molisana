@extends('layouts.layout')

@section('main_content')
    
<main>
    @foreach ($data as $dato)
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

        <img src=" {{ $dato['src'] }}" alt="">


</div>


    @endforeach
    
    
</main>
@endsection

