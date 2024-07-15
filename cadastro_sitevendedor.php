<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panfleto Digital - Cadastre-se">
    <meta name="author" content="Alcance Vendas">
    <title>Panfleto Digital</title>
    <link rel="stylesheet" href="css/virtual-select.min.css">
    <!-- Custom fonts for this template -->
    <link href="https://vendedor.site/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://vendedor.site/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="https://vendedor.site/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--bootstrapp junior - adicinei aqui pra ficar com o estilo que fiz nos testes
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .custom-checkbox {
            display: inline-block;
            margin-right: 10px; /* Espaço entre os checkboxes */
        }
        .custom-checkbox input[type="checkbox"] {
            display: none;
        }
        .custom-checkbox label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            user-select: none;
        }
        .custom-checkbox label::before {
            content: "\25CB"; /* vazio */
            position: absolute;
            left: 0;
            top: 0;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #6b6b6b;
        }
        .custom-checkbox input[type="checkbox"]:checked + label::before {
            content: "\f00c"; /* ícone de check */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 1.5rem;
            color: rgb(245,87,90);
        }
    </style>
</head>

<body id="page-top">
<header class="shadow-lg" style="background-color:#0F172D">
        <!-- Topbar -->
        <nav class="navbar navbar-expand topbar mb-5 static-top">
            <div class="container navbar-light bg-white shadow-lg p-2 mt-3" style="border-radius: .2rem;">
                <a class="navbar-brand" href="https://alcancevendas.com.br/panfletodigital/">
                    <img class="img-fluid" src="https://alcancevendas.com.br/panfletodigital/wp-content/uploads/2024/06/Sem-titulo-2-1536x382.webp" width="150px" alt="Logo-PD">
                </a>
                <button id="button-envio" class="shadow img-fluid" type="button" style="background-color:rgb(245,87,90);border-radius:2rem; border: none;font-size:small; padding: .5rem">
            <span style="color:white;">
                <strong>CONTRATE AGORA!</strong>
            </span>
        </button>
            </div>
        </nav>
        <section class="mt-5 container">
            <div class="container">
                <div class="row">
                    <div class="col-lg text-center">
                        <h1 class="mt-5 text-white">Venda mais e melhor com o Panfleto Digital Honda!</h1>
                        <p class="interactive-text text-white h6">Conquiste e impressione seus clientes, centralizando todas as informações dos planos e valores das parcelas,  além de vídeos  essenciais para fechar vendas de consórcio e financiamento como nunca antes.</p>
                        <button id="button-envio-3" type="button" class="container border border-warning img-fluid" style="border-radius: 0.8rem; background-color:#F8BB16">
                        <p class="text-center m-0 mt-2 h4" style="color: rgb(220,20,60); font-family: 'Poppins', sans-serif;"><strong>APENAS</strong><h2 style="color: rgb(220,20,60); font-family: 'Poppins', sans-serif; font-weight: 1000;">R$14,90/mês!</h2></p>
                        </button>
                    </div>
                    <div class="col-lg text-center">
                        <img class="img-fluid mb-3" src="https://alcancevendas.com.br/panfletodigital/wp-content/uploads/2023/11/mockup2.png" width="250px" alt="Panfleto Digital Honda">
                    </div>
                </div>
            </div>
        </section>
        <section class="container-xl w-100 mb-5" style="margin-top: 2rem; display: inline-block;position: relative;left: 50%;transform: translateX(-50%);">
                <iframe class="panfleto-video w-100 shadow-lg" style="border-radius: .5rem;" frameborder="" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="VIDEO DE APRESENTAÇÃO - SITE DO VENDEDOR" width="620" height="340" src="https://www.youtube.com/embed/Vf9ouw7Hk6E?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Falcancevendas.com.br&amp;widgetid=1" id="widget2">
                </iframe>
                </section>
        <div class="container text-center">
        <button id="button-envio-2" class="mb-5 shadow img-fluid" type="button" style="background-color:rgb(245,87,90);border-radius:2rem; border: none; width:25rem; height:3rem;">
            <span class="img-fluid" style="color:white;">
                <strong>CONHEÇA O PODER DO PANFLETO DIGTIAL</strong>
            </span>
        </button>
        <style>
            #button-envio-2:hover { background-color:rgb(50,70,90); transform: translateY(-10px); transition: .40s;}
            #button-envio:hover { background-color:rgb(50,70,90); transform: translateY(-10px); transition: .40s;}
        </style>
        <script>
            document.getElementById('button-envio').addEventListener('click', function() {
                document.getElementById('envio_cadastro').scrollIntoView({behavior: 'smooth'});});
                document.getElementById('button-envio-2').addEventListener('click', function() {
                    document.getElementById('envio_cadastro').scrollIntoView({behavior: 'smooth'});});
                    document.getElementById('button-envio-3').addEventListener('click', function() {
                        document.getElementById('envio_cadastro').scrollIntoView({behavior: 'smooth'});});
                </script>
        </div>
    </header>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <div class="text-center">
                        <h2 id="envio_cadastro" class="mt-5">Envie seu cadastro<p class="h6 text-danger">Site do Vendedor</p></h2>
                        </div>
                        <div class="col">
                    <div class="text-center" style="margin-top: 2rem;">
                        <img class="cnh_produtos_seller_image mx-auto w-25 shadow" style="border-radius: 50%;" src="https://vendedor.site/img/user.png" id="output">
                    </div>
                </div>
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <form action="/autostore" method="POST" class="Vendedor" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <label for="foto">Envie sua Foto:</label>
                                    <input type="file" name="foto" class="form-control form-control-user"
                                        id="exampleInputPassword" value="" placeholder="Sua foto" onchange="loadfile(event)">
                                </div>
                                <!--<div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="apresentacao">Data de nascimento</label>
                                    <input type="date" name="nascimento" class="form-control form-control-user" id="exampleFirstName"
                                        value="">
                                </div>-->
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Seu Nome completo:</label>
                                    <input type="text" name="nome_completo" class="form-control form-control-user" id="exampleFirstName"
                                        value="" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="cpf">Seu CPF:</label>
                                    <input type="text" name="CPF" class="form-control form-control-user" id="cpf" value="" required placeholder="000.000.000-00">
                                    <p id="cpf-error" class="text-danger d-none">CPF inválido.</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Nome no site:</label>
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Ex:..João da Honda" value="" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="slug">URL do Site:</label>
                                    <div class="mb-sm-0 input-group">
                                    <span class="input-group-text rounded-0 mb-sm-5 mb-3" id="basic-addon1">vendedor.site/</span>
                                    <input type="text" name="slug" class="form-control form-control-user" id="slug" placeholder="Ex:..nicolyhonda" value="" required>
                                    <p class="nome_invalido text-danger d-none">URL em uso</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="loja">Sua Concessionaria:</label>
                                    <input type="text" name="loja" value="" class="form-control form-control-user" id="slug"
                                    placeholder="Ex:..Potiguar Honda" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Seu Estado:</label>
                                    <select name="estado" id="estado" class="form-control form-control-user select2" style="width: 100%;" required>
                                        <option value="">Selecione seu estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-2">
                                    <label for="name">Sua Cidade:</label>
                                    <input type="text" name="cidade" value="" class="form-control form-control-user" id="slug"
                                        placeholder="Ex:..Porto Alegre" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-3 col-sm-1 mb-3">
                                    <label for="celular">DDD</label>
                                    <input required type="text" name="ddd" class="form-control form-control-user phone_ddd" placeholder="00" maxlength="2" style="font-family: Roboto, sans-serif, Apple Color Emoji, Noto Color Emoji, EmojiNotoColor, Noto Emoji, EmojiNoto,Segoe UI,Segoe UI Emoji,Segoe UI Symbol, Twitter Color Emoji, EmojiTwemColor,Twemoji Mozilla, EmojiTwem,EmojiOne Mozilla, Android Emoji, EmojiSymbols, Symbola, EmojiSymb !important;" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);">
                                </div>
                                <div class="col-9 col-sm-5 mb-3">
                                    <label for="celular">Celular</label>
                                    <input required type="text" name="celular" class="form-control form-control-user phone" id="celular" placeholder="00000-0000" maxlength="10">
                                    <p class="celular_invalido text-danger d-none">Numero em uso</p>
                                </div>
                                    <div class="col-sm-6">
                                        <label for="instagram">Seu instagram:</label>
                                        <input type="text" name="instagram" value="" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Ex:..@joaocarlosvendas">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xl-12 col-sm-6 mb-3 mb-sm-0">
                                    <label for="planos_escolhidos">PLANOS QUE EU VENDO</label><br>
                                    <div class="custom-checkbox h6 border rounded p-1 shadow-sm">
                                        <input type="checkbox" id="all" name="planos[]" value="all" checked>
                                        <label for="all" class="m-1 mb-1">Todos os planos</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_7" name="planos[]" value="7" checked>
                                        <label for="plano_7">Advance</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_8" name="planos[]" value="8" checked>
                                        <label for="plano_8">#Vou de Honda</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_9" name="planos[]" value="9" checked>
                                        <label for="plano_9">#Vou de Honda+</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_13" name="planos[]" value="13" checked>
                                        <label for="plano_13">Pop 110i ES</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_14" name="planos[]" value="14" checked>
                                        <label for="plano_14">Pop 110i + 10</label>
                                    </div>
                                    <div class="custom-checkbox h6">
                                        <input type="checkbox" id="plano_15" name="planos[]" value="15" checked>
                                        <label for="plano_15">CRF</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mb-5">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="apresentacao">Exibir valor da carta de crédito</label>
                                    <select name="mostrar_valor_credito" id="mostrar_valor_credito" class="form-control">
                                        <option value="1"  selected >Sim</option>
                                        <option value="0" >Não</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="apresentacao">QUEM VAI PAGAR SEU SITE?</label>
                                    <select name="fonte_pagamento" id="fonte_pagamento" class="form-control">
                                        <option value="1" >Vendedor</option>
                                        <option value="2" >Minha Concessionaria</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger btn-user btn-block" value='Criar Meu Site'>
                        </form>
                        <div id="duvidas" class="text-center mt-3">
                                Dúvidas? <a href="https://wa.me/5511950266656" target="_blank" rel="noopener noreferrer">Clique aqui para suporte</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="js/virtual-select.min.js"></script>


<script>
    $(document).ready(function() {
    $('.select2-multiple').select2();
});
</script>
    <!-- Inicializando o novo Select2 -->
    <script>
        $(document).ready(function() {
            $('#planos_escolhidos').select2({
                placeholder: "Selecione os planos",
                templateResult: function(option) {
                    if (!option.id) {
                        return option.text;
                    }
                    var $option = $(
                        '<span><input type="checkbox" checked /> ' + option.text + '</span>'
                    );
                    return $option;
                },
                templateSelection: function(option) {
                    return option.text;
                }
            });

            // Seleciona todos os planos por padrão
            $('#planos_escolhidos').val(['7', '8', '9', '13', '14', '15']).trigger('change');
        });
    </script>
    <!--selação all planos-->
<script>
                        document.getElementById('all').addEventListener('change', function() {
                            let checkboxes = document.querySelectorAll('input[name="planos[]"]');
                            checkboxes.forEach(function(checkbox) {
                            checkbox.checked = document.getElementById('all').checked;
                            });    
                        });
                    </script>
<!--fotoPreview-->
<script>
    var loadfile = function(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<!--validação de celular-->
                                <script>
                                // verificação do número, pois muitos vendedores estão colocando números errados
                                function formatCelular(value) {
                                    // Remove tudo que não é número
                                    value = value.replace(/\D/g, '');
                                    // Adiciona o hífen após os 5 primeiros dígitos
                                    if (value.length > 5) {
                                        return value.slice(0, 5) + '-' + value.slice(5, 9);
                                    } else {
                                        return value;}}
                                        document.getElementById('celular').addEventListener('input', function (e) {
                                    // valor prenchido
                                    var value = e.target.value;
                                    // Formata o valor
                                    var formattedValue = formatCelular(value);
                                     // Corrige
                                     e.target.value = formattedValue;
                                     var regex = /^\d{5}-\d{4}$/;
                                     if (regex.test(formattedValue)) {
                                        e.target.setCustomValidity('');
                                    } else {
                                        e.target.setCustomValidity('Número de celular inválido. Use o formato 00000-0000.');}});
                                        // Mesma coisa pro DDD
                                        document.querySelector('.phone_ddd').addEventListener('input', function (e) {
                                            var value = e.target.value;
                                            var regex = /^\d{2}$/;
                                            if (regex.test(value)) {
                                                e.target.setCustomValidity('');
                                            } else {
                                                e.target.setCustomValidity('DDD inválido. Use exatamente dois dígitos.');
                                            }});
                                            </script>
                                            <!--fim-validação-->
                                            <!--validação de cpf-->
                                            <script>
    // Função para formatar o CPF com pontos e hífen
    function formatCPF(cpf) {
        cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cpf.length > 9) {
            return cpf.slice(0, 3) + '.' + cpf.slice(3, 6) + '.' + cpf.slice(6, 9) + '-' + cpf.slice(9, 11);
        } else if (cpf.length > 6) {
            return cpf.slice(0, 3) + '.' + cpf.slice(3, 6) + '.' + cpf.slice(6);
        } else if (cpf.length > 3) {
            return cpf.slice(0, 3) + '.' + cpf.slice(3);
        } else {
            return cpf;
        }
    }

    // Função para validar o CPF
    function validateCPF(cpf) {
        cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
            return false; // CPF com todos os dígitos iguais é inválido
        }
        // Calcula e valida os dígitos verificadores
        const calculateDigit = (cpf, factor) => {
            let sum = 0;
            for (let i = 0; i < factor; i++) {
                sum += cpf[i] * (factor + 1 - i);
            }
            const remainder = (sum * 10) % 11;
            return remainder === 10 ? 0 : remainder;
        };
        const digit1 = calculateDigit(cpf, 9);
        const digit2 = calculateDigit(cpf, 10);
        return cpf[9] == digit1 && cpf[10] == digit2;
    }

    document.getElementById('cpf').addEventListener('input', function (e) {
        const value = e.target.value;
        const formattedValue = formatCPF(value);
        e.target.value = formattedValue;

        const isValid = validateCPF(formattedValue);
        const errorElement = document.getElementById('cpf-error');
        if (isValid || formattedValue.length === 0) {
            errorElement.classList.add('d-none');
            e.target.setCustomValidity('');
        } else {
            errorElement.classList.remove('d-none');
            e.target.setCustomValidity('CPF inválido. Use o formato 000.000.000-00');
        }
    });
</script>
<!--fim-validação-cpf-->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="text-center mb-3">
                    <img class="img-fluid" src="https://alcancevendas.com.br/wp-content/uploads/2021/07/UI-Design-Alcance-PaginaCaptura.png" width="120px" alt="Logo-Alcance">
                    <img class="img-fluid m-2" src="https://alcancevendas.com.br/panfletodigital/wp-content/uploads/2023/11/logo.png" width="60px" alt="Logo-PD">
                </div>
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Panfleto Digital &copy; Alcance Vendas 2024</span>
                    </div>
                </div>
            </footer>
                <!-- Botão do WhatsApp -->
    <div style="position: fixed; bottom: 70px; right: 3px;">
        <a href="https://wa.me/5511950266656" target="_blank">
            <img title="Dúvidas?" src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-png-0.png" alt="WhatsApp" width="70" height="70">
        </a>
    </div>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    <!--</div>
     End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa-solid fa-arrow-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="https://vendedor.site/vendor/jquery/jquery.min.js"></script>
    <script src="https://vendedor.site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://vendedor.site/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="https://vendedor.site/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="https://vendedor.site/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="https://vendedor.site/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="https://vendedor.site/js/demo/datatables-demo.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function confirm(url){
        var alert = Swal.fire({
            text: "Deseja realizar essa ação",
            icon: 'warning',
            confirmButtonText: 'Confirmar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then((value) => {
            if(value.isConfirmed) window.location.href = url;
            return false;
        });
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script>
    $(document).ready(function() {
        $("#slug").keyup(function(){
            console.log("slug");
            var input = $(this).val();
            if(input != ""){
                $.ajax({
                    url: '/check-slug-unique',
                    type: 'POST',
                    data: { slug: input },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if(response === "existe") {
                            $('.nome_invalido').removeClass('d-none');
                        } else {
                            $('.nome_invalido').addClass('d-none');
                        }
                    },
                });
            }
        });
    });

    $(document).ready(function() {
        $("#celular, .phone_ddd").keyup(function(){
            console.log("celular");
            var ddd = $(".phone_ddd").val();
            var celular = $("#celular").val();
            var fullNumber = ddd + celular;
            if(fullNumber != null){
                $.ajax({
                    url: '/check-celular-unique',
                    type: 'POST',
                    data: { celular: fullNumber },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if(response === "existe") {
                            $('.celular_invalido').removeClass('d-none');
                        } else {
                            $('.celular_invalido').addClass('d-none');
                            console.log(fullNumber);
                        }
                    },
                });
            }
        });
    });
    $(document).ready(function() {
        $('.Vendedor').on('submit', function(e) {
            if (!$('.nome_invalido').hasClass('d-none')) {
                e.preventDefault(); // Prevent form submission
                alert('URL em uso. Por favor, escolha outro.');
            }
            else if(!$('.celular_invalido').hasClass('d-none')){
                e.preventDefault(); // Prevent form submission
                alert('Celular em uso. Caso ja tenha criado um panfleto entre em contato com nosso suporte.');
            }
        });
    });
    </script>
</body>
</html>