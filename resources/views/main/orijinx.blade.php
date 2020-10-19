<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orijinx</title>
    {{-- BOOTSTRAP LINK CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- CSS LINK --}}
    <link rel="stylesheet" href="css/orijinx/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand logo" href="#">ORIJINX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Разработка
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/vault"><img src="{{ asset('svg/vault-black-bold.svg') }} "
                                    width="70" alt=""></a>
                            {{-- <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> --}}
                        </div>
                    </li>
            </div>
        </nav>
    </header>

    <section id="main__wrapp" class="main__wrapp">
        <div class="wrapp">
            <div class="block__wrapp">
                <h2><strong>НОВОСТИ</strong></h2>
            </div>

        </div>
        <div class="news__wrapp container ">
            @foreach ($news as $item)
                <div class="row d-flex justify-content-center  ">
                    <div class="col-auto">
                        <h3>{{ $item->title }}</h3>
                        <div>
                            {{--  <a href="/new/{{ $item->id }}" >  --}}
                                {{--  <p class="bg-hover">{{ mb_strimwidth($item->body, 0, 50, '...') }}</p>  --}}
                                <p>{{"$item->body"}}</p> 
                            {{--  </a>  --}}
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach

        </div>

    </section>





    {{-- BOOTSTRAP LINK JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
