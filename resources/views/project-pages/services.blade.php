@extends('layouts.app');
@section('sadrzaj')
<h1>{{$heading}}</h1>
@if(count($categories)>0)
  @foreach($categories as $item)
    {{$item}}
  @endforeach
@endif

<p>Ovo je services strana</p>

@endsection