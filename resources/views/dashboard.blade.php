<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
@yield('navbar', View::make('template.navbar'))

<div class="container">
    <div class="card border-light mb-3 mt-5 pb-1">
        <div class="card-body" style="padding: 0;">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <img class="img-fluid" width="300" src="{{ asset('images/emote-note.png') }}" style="transform: rotateX(360deg)">
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="card-title mt-3 mb-4">Pronto!</h4>
                    <p class="card-text mb-3 p-2">
                        Agora você terá acesso aos meus conteúdos exclusivos sempre que eu for lançar algo! Coisas que poderão chegar em seu e-mail:
                    </p>
                    <ul>
                        <li>Avisos sobre videos novos no canal</li>
                        <li>Avisos sobre lives especiais ou patrocinadas</li>
                        <li>Avisos sobre novos projetos envolvendo a He4rt ou o Porão</li>
                    </ul>
                    <button type="button" id="btnApagar" class="btn btn-outline-danger">Apagar Conta</button><br>
                    <small class="text-muted">Apague caso ache que esse mailing não faz mais sentido =)</small>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal" id="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sair da Newsletter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img class="img-thumbnail" width="300" src="{{ asset('images/emote-dc.png') }}" style="transform: rotateX(360deg)">
                    </div>
                    <div class="col-8">
                        Vocẽ tem certeza que deseja apagar seu registro? Após isso você não receberá mais nossas informações. Claro que você poderá voltar quando quiser, mas cê tem certeza?<br>
                        PS: deixa o sub lá no meu canal aproveita e faz essa pra mim kkkkkkk
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="see-ya">Apague minha conta</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nah, ta suave</button>
            </div>
        </div>
    </div>
</div>


@yield('footer', View::make('template.footer'))
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#btnApagar").click(() => {
            $("#deleteModal").modal('toggle')
        });

        $("#see-ya").click(function() {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '{{ route('delete-user') }}',
                method: 'DELETE',
                success: function (response) {
                    alert('flw vlw');
                    window.location.href = '/'
                }
            })
        })
    })
</script>
</body>
</html>
