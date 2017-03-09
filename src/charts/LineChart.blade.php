@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <div class="chart"></div>
  @linechart($title, 'chart')
@endsection
