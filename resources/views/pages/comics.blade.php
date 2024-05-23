@extends('layout.app')

@section('title', 'Comics')


@section('content')

<section class="text-center text-light">
    <div class="container">
        <h1 class="py-5"> COMICS !</h1>
    </div>
    <div class="container ">
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-4 py-2">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="fs-2 p-2 text-wrap">{{$comic['title']}}</h1>
                            <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-start flex-column gap-2 ">
                            <p class="fs-4 fst-italic"> <span class="fw-bold">Titolo Serie: </span> {{ $comic['series']}}</p>
                            <p class="fs-4 fst-italic"> <span class="fw-bold">Prezzo: </span>{{ $comic['price']}}</p>
                            <p class="fs-4 fst-italic"> <span class="fw-bold">Data di uscita: </span>{{ $comic['sale_date']}}</p>
                            <p class="fs-4 fst-italic"> <span class="fw-bold ">Tipo : </span>{{ $comic['type']}}</p>



                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <img src="https://th.bing.com/th/id/R.8a6c968a9972767bf6747097cf4f88b3?rik=pCh94bUSX8y86w&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <img src="https://th.bing.com/th/id/R.8a6c968a9972767bf6747097cf4f88b3?rik=pCh94bUSX8y86w&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div> -->

            <!-- </div>
            </div> -->
        </div>
    </div>
</section>

@endsection