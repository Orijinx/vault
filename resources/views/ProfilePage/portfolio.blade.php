@extends('layouts.main.header-footer')


@section('body')
    <section id="info" class="container">
        <div class="section-top-border">
            <h3 class="mb-30">Редактирование вашего портфолио</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        Здесь вы можете отрадактиовать ваше портфолио.
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section id="form" class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Основная информация</h3>
                    <form action="{{ url('/UpdatePortfolio') }}" method="POST">
                        @csrf
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Имя" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Имя'" required class="single-input"
                                value="{{ Auth::User()->name }}">
                        </div>
                        {{-- //Проверка на пустоту для фамилии
                        --}}
                        @if (isset(Auth::User()->second_name))
                            <div class="mt-10">
                                <input type="text" name="second_name" placeholder="Фамилия" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Фамилия'" required class="single-input"
                                    value="{{ Auth::User()->second_name }}">
                            </div>
                        @else
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Фамилия" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Фамилия'" required class="single-input">
                            </div>
                        @endif
                        {{-- Проверка на пустоту отчества --}}
                        @if (isset(Auth::User()->last_name))
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Отчество" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Отчество'" required class="single-input"
                                    value="{{ Auth::User()->last_name }}">
                            </div>
                        @else
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Отчество" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Отчество'" required class="single-input">
                            </div>
                        @endif


                        <div class="mt-10">
                            <input type="email" name="EMAIL" placeholder="Email" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Email'" required class="single-input"
                                value="{{ Auth::User()->email }}">
                        </div>

                        {{-- ////ГРАЖДАНСТВО --}}

                        @if (isset(Auth::User()->citizenship))
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select id="country" name="citizenship">
                                        <option value="{{ Auth::User()->citizenship }}">{{ Auth::User()->citizenship }}
                                        </option>
                                        <option value="Россия">Россия</option>
                                        <option value="Украина" disabled>Украина</option>
                                        <option value="Белорусь" disabled>Белорусь</option>
                                    </select>
                                </div>
                            </div>

                        @else

                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select id="country" name="citizenship">
                                        <option value="NULL">Гражданство</option>
                                        <option value="Россия">Россия</option>
                                        <option value="Украина" disabled>Украина</option>
                                        <option value="Белорусь" disabled>Белорусь</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        {{-- /////////ГОРОД ПРОЖИВАНИЯ --}}
                        {{-- @if (isset(Auth::User()->address))

                            @else

                        @endif --}}
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <input type="text" name="address" placeholder="Место жительства(Прим. Москва)"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Место жительства'" required
                                class="single-input">
                        </div>

                        {{--////О себе --}}
                        @if (isset(Auth::User()->about))
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="О себе" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'О себе'" required name="about">{{Auth::User()->about}}</textarea>
                            </div>
                        @else
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="О себе" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'О себе'" required name="about"></textarea>
                            </div>
                        @endif



                        <div class="button-group-area">
                            <button type="submit" class="genric-btn success">Сохранить</button>
                            {{-- <a href="#" class="genric-btn success">Success</a>
                            --}}
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>Получать новостную рассылку</p>
                            <div class="primary-switch">
                                <input type="checkbox" id="primary-switch" checked>
                                <label for="primary-switch"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
