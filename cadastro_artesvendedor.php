<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacote de Artes do Vendedor</title>
    <!--bootstrapp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://alcancevendas.com.br/wp-content/uploads/2021/07/icone-alcance-150x150.png" sizes="32x32">
    <link rel="icon" href="https://alcancevendas.com.br/wp-content/uploads/2021/07/icone-alcance.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://alcancevendas.com.br/wp-content/uploads/2021/07/icone-alcance.png">
    <meta name="msapplication-TileImage" content="https://alcancevendas.com.br/wp-content/uploads/2021/07/icone-alcance.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        header {
            background-image: url('http://alcancevendasonline.com.br/wp-content/uploads/2022/11/head3.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 50%;
            z-index: -1;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fc;
        }
        .custom-checkbox {
            display: inline-block;
            margin-right: 10px; /* Espaço entre os checkboxes */
            input {
                transform: scale3d(1.5, 1.5, 1.5); /* Tamanho do checkbox */
                box-shadow: inset;
                cursor: pointer;
            }
        }
        #btn-artes {
            background: linear-gradient(to right, #ff00ff, #800080, #0000ff);
            /* Add any other styles you want for the button */
            color: white;
            font-weight: bold;
            transform: scale(1.1);
            border-radius: .1rem;
            border: none;
            height: 4rem;
            width: 35rem;
            font-family: 'Poppins', sans-serif;
        }

        #btn-artes:hover {
            color: white;
            transform: scale(1.15);
            transition: all 0.3s;
        }

        @media (max-width: 1366px) {
            #btn-artes {
                width: 90%;
                max-width: 35rem;
                margin-left: auto;
                margin-right: auto;
                font-size: small;
            }
        }
    </style>
    
</head>
<body>
    <header class="bg-dark shadow">
        <nav class="header p-5">
            <div class="text-center">
                <img class="img-fluid" width="120px" src="https://alcancevendasonline.com.br/wp-content/uploads/2022/11/logo-white-768x635.png" alt="">
            </div>
        </nav>
        <section class="container">
        <div class="row">
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <h1 class="text-center mt-5 p-3 text-white">
                    Personalize suas Redes Sociais e <font color="blue">Multiplique suas vendas</font> de Motos e Consórcios
                    <p class="h5 mt-5" style="font-weight:200;">
                    Tenha Artes Personalizadas para gerar Clientes ainda mais qualificados.
                </p>
            </h1>
            </div>
            <div class="col-sm-6 bg-dark rounded-5 mb-5 mt-2">
                <div class="text-center p-5" style="margin-top: -6rem;">
        <img class="img-fluid" width="350px" src="https://alcancevendasonline.com.br/wp-content/uploads/2023/12/pacote4-1.png" alt="alcance vendas online">
        <p class="h3 text-white">De: <s class="h2" style="color:whitesmoke">R$97,00</s>
        por apenas
        <font class="text-danger h1"><b>R$ 49,90</b></font>
        por mês
        </p>
        </div>
        </div>
        <div class="botao-centralizado text-center">
        <button id="btn-artes" class="btn mb-2" onclick="document.getElementById('envio_cadastro').scrollIntoView({ behavior: 'smooth' });">
            QUERO GARANTIR MINHAS ARTES
        </button>
        </div>
        <div class="container-sm">
        <section class="container-xl mb-5" style="margin-top: 2rem; display: inline-block;position: relative;left: 50%;transform: translateX(-50%);">
                <iframe class="w-100 shadow-lg" style="border-radius: .5rem;" width="315" height="560" src="https://www.youtube.com/embed/frD-WTohgZ8" title="Você já tem seu SITE DO VENDEDOR?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </section>
                </div>
            </div>
        </section>
    </header>
    
    <main class="container">
        <div class="cadastroArtes">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <div class="text-center">
                        <h2 id="envio_cadastro" class="mt-5">Envie seu cadastro<p class="h6 text-danger">Pacote de Artes do Vendedor</p></h2>
                        </div>
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <form action="/autostore" style="color:#4F4F4F;" method="POST" class="Vendedor" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Nome nas Artes:</label>
                                    <input type="text" name="nome" class="form-control form-control-user" id="exampleFirstName"
                                        value="" required>
                                </div>
                                <div class="col-sm-6">
                                        <label for="instagram">Seu instagram:</label>
                                        <input type="text" name="instagram" value="" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="@joaocarlosvendas">
                                    </div>
                            </div>
                            <div class="form-group row mb-1">
                                <div class="col-3 col-sm-1 mb-3">
                                    <label for="celular">DDD</label>
                                    <input required type="text" name="ddd" class="form-control form-control-user phone_ddd" placeholder="00" maxlength="2" style="font-family: Roboto, sans-serif, Apple Color Emoji, Noto Color Emoji, EmojiNotoColor, Noto Emoji, EmojiNoto,Segoe UI,Segoe UI Emoji,Segoe UI Symbol, Twitter Color Emoji, EmojiTwemColor,Twemoji Mozilla, EmojiTwem,EmojiOne Mozilla, Android Emoji, EmojiSymbols, Symbola, EmojiSymb !important;" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);">
                                </div>
                                <div class="col-9 col-sm-5 mb-3">
                                    <label for="celular">Celular</label>
                                    <input required type="text" name="celular" class="form-control form-control-user phone" id="celular" placeholder="00000-0000" maxlength="10">
                                    <p class="celular_invalido text-danger d-none">Numero em uso</p>
                                </div>
                            </div>
                            <div class="form-group row text-center">
                            <div class="custom-checkbox h5 d-flex">
                                        <label for="temsite" class="mt-5 mb-5 text-danger">Tenho Site do Vendedor</label>
                                        <input class="m-2" type="checkbox" id="temsite" name="temsite" value="1">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="name">Seu Nome completo:</label>
                                    <input type="text" name="nome_completo" class="form-control form-control-user" id="exampleFirstName"
                                        value="" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="cpf">Seu CPF:</label>
                                    <input type="text" name="CPF" class="form-control form-control-user" id="cpf" value="" required placeholder="000.000.000-00">
                                    <p id="cpf-error" class="text-danger d-none">CPF inválido.</p>
                                </div>
                            </div>

                            <div class="form-group row mb-sm-3">
                                <div class="col-sm-6">
                                    <label for="loja">Concessionaria:</label>
                                    <input type="text" name="loja" value="" class="form-control form-control-user" id="slug"
                                    placeholder="Ex:..Potiguar Honda" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="name">Estado:</label>
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
                            <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="name">Cidade:</label>
                                    <input type="text" name="cidade" value="" class="form-control form-control-user" id="slug"
                                        placeholder="Ex:..Porto Alegre" required>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="apresentacao">Exibir valor da carta de crédito</label>
                                    <select name="mostrar_valor_credito" id="mostrar_valor_credito" class="form-control">
                                        <option value="1"  selected >Sim</option>
                                        <option value="0" >Não</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <label for="apresentacao">QUEM VAI PAGAR SEU PACOTE?</label>
                                    <select name="fonte_pagamento" id="fonte_pagamento" class="form-control">
                                        <option value="1" >Vendedor</option>
                                        <option value="2" >Minha Concessionaria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger btn-user btn-block shadow-lg w-100" value='QUERO MINHAS ARTES'>
                            </div>
                        </form>
                        <div id="duvidas" class="text-center mt-3">
                                Dúvidas? <a href="https://wa.me/5511950266656" target="_blank" rel="noopener noreferrer" style="text-decoration:none">Clique aqui para suporte</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    </main>

<!--SCRIPTS--JS--PÁGINA DE CADASTRO PHELPS-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="js/virtual-select.min.js"></script>

<!--checkbox tem site--->
<script>
    //remove os dados do formulários desnecessários caso o vendedor selecione que já tem site
document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('temsite');
    const formFieldsBelowCheckbox = document.querySelectorAll('.Vendedor .form-group.row:nth-child(n+4)');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            formFieldsBelowCheckbox.forEach(function(field) {
                field.style.display = 'none';
            });
        } else {
            formFieldsBelowCheckbox.forEach(function(field) {
                field.style.display = 'flex';
            });
        }
    });
});
</script>

<script>
    $(document).ready(function() {
    $('.select2-multiple').select2();
});
</script>
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
                                        e.target.setCustomValidity('Use um Número de celular válido.');}});
                                        // Mesma coisa pro DDD
                                        document.querySelector('.phone_ddd').addEventListener('input', function (e) {
                                            var value = e.target.value;
                                            var regex = /^\d{2}$/;
                                            if (regex.test(value)) {
                                                e.target.setCustomValidity('');
                                            } else {
                                                e.target.setCustomValidity('Use DDD válido.');
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
            e.target.setCustomValidity('informe um CPF válido.');
        }
    });
</script>
<!--fim-validação-cpf-->

            <!-- Footer -->
            <footer class="sticky-footer mb-5" style="background: #f8f9fc; color:#8B8989;">
                <div class="text-center mb-3">
                    <img class="img-fluid" src="https://alcancevendas.com.br/wp-content/uploads/2021/07/UI-Design-Alcance-PaginaCaptura.png" width="120px" alt="Logo-Alcance">
                </div>
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Alcance Vendas 2024 - Todos os direitos reservados</span>
                    </div>
                </div>
            </footer>
                <!-- Botão do WhatsApp -->
    <div style="position: fixed; bottom: 20px; right: 3px;">
        <a href="https://wa.me/5511950266656" target="_blank">
            <img title="Dúvidas?" src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-png-0.png" alt="WhatsApp" width="50" height="50">
        </a>
    </div>
            <!-- End of Footer -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                alert('Celular em uso. Caso já tenha sido cliente, entre em contato com nosso suporte.');
            }
        });
    });
    </script>
</body>
</html>