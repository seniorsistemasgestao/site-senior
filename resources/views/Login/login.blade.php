@extends('Tamplate.main')

@section('title', 'Login')

@section('content')

    <div class="container">
        <div class="row" id="card-login">

            <div class="col-lg-6" id="gtco-footer">
                <h1>
                    Login </h1>
                <form action="#" method="get">
                    @csrf
                    <input type="text" name="email" class="form-control" placeholder="Email">
    
                    <input id="password" type="password" name="password" class="form-control" placeholder="Senha">
                    <input type="button" id="showSenha" value="Mostrar senha" class="btn"  style="border: none;" />   
                    <button id="submit-form-login" href="#" type="submit" class="submit-button btn-constom  btn-custom link">Entrar <i
                            class="fa fa-angle-right" aria-hidden="true"></i></button>

                </form>

                <div id="rec-usuario">
                    <a class="link">Esqueceu usuário ou senha?</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('javascript')
<script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('js/ocultar.js') }}"></script>
@endpush
