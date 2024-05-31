@extends('base')
@section('content')
<div class="bg-light p-5 mb-5 text-center">
    <div class="container">
        <h1>Agence lorem ipsum</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fuga labore explicabo nostrum ipsum adipisci qui quibusdam. Hic perferendis, fugit, error similique vitae atque consequatur nostrum dolorum iste itaque quaerat.</p>
    </div>
</div>

<div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
        @foreach ($properties as $property)
            <div class="col">
                @include('property.card')
            </div>
        @endforeach
    </div>
</div>
@endsection