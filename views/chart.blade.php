@extends('lavacharts::layouts.example')

@section('title', $type)

@section('content')
    <div class="row header">
        <div id="logo">
            <img src="{{ $logo }}" />
        </div>
    </div>

    <div class="row fill">
        <div id="chart-pane" class="col-sm-7 fill">
            <h1>{{ $type }}</h1>
            <div id="my-chart"></div>

            {!! \Lava::render($type, $title, 'my-chart') !!}
        </div>
        <div id="code-pane" class="col-sm-5 fill">
            <pre>
                <code class="php">
                    {{ $code }}
                </code>
            </pre>
        </div>
    </div>
@endsection
