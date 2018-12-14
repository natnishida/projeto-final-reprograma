@extends('layouts.app')

@section('content')
<div class="container-fluid containerprojetojuntas">

                    @guest
                    <p>visitante</p>
                    @else
                    {{ Auth::user()->name }}
                    @endguest

</div>
@endsection
