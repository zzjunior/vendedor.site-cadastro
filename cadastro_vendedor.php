<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panfleto Digital - Cadastre-se">
    <meta name="author" content="Alcance Vendas">
    <title>Panfleto Digital</title>
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
</head>

<body id="page-top">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <div class="text-center">
                            <h1 class="mt-5">Cadastro Panfleto Digital <p class="h6 text-danger">Site do Vendedor</p></h1>
                        </div>
                        <div class="col">
                    <div class="text-center" style="margin-top: 2rem;">
                        <img class="cnh_produtos_seller_image mx-auto w-25 shadow" style="border-radius: 50%;" src="https://vendedor.site/img/user.png" id="output">
                    </div>
                </div>
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <form action="/admin/criar/5" method="POST" class="Vendedor" enctype="multipart/form-data">
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
                                        value="">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Seu CPF:</label>
                                    <input type="text" name="CPF" class="form-control form-control-user" id="exampleFirstName"
                                        value="">
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
                                    <div class="mb-3 mb-sm-0 input-group">
                                    <span class="input-group-text rounded-0 mb-sm-5 mb-3" id="basic-addon1">vendedor.site/</span>
                                    <input type="text" name="slug" class="form-control form-control-user" id="slug"
                                        placeholder="Ex:..nicolyhonda" value="" required>
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
                                    <label for="name">Sua Cidade:</label>
                                    <input type="text" name="cidade" value="" class="form-control form-control-user" id="slug"
                                        placeholder="Ex:..Sua Cidade" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="WhatsApp">Seu WhatsApp:</label>
                                    <input type="number" name="whatsapp" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="" value="" required >
                                </div>
                                <div class="col-sm-6">
                                    <label for="instagram">Seu instagram:</label>
                                    <input type="text" name="instagram" value="" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Ex:..@joaocarlosvendas">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col mb-3 mb-sm-0">
                                    <label for="planos_escolhidos">Planos desejados:</label>
                                    <select multiple placeholder="Selecione os planos" name="planos[]" class="form-control select2-multiple" >
                                                                                    <option value="7">Advance</option>
                                                                                    <option value="8">#Vou de Honda</option>
                                                                                    <option value="9">#Vou de Honda+</option>
                                                                                    <!--<option value="12" selected>Plano Especial</option>-->
                                                                                    <option value="13">Exibir Pop 110i ES</option>
                                                                                    <option value="14">Exibir Pop 110i + 10</option>
                                                                                    <option value="15">Exibir CRF</option>
                                                                                    <!--<option value="16" selected>Plano CRF + (Placa)</option>-->
                                                                            </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="apresentacao">Exibir valor da carta de crédito</label>
                                    <select name="mostrar_valor_credito" id="mostrar_valor_credito" class="form-control">
                                        <option value="1" >Sim</option>
                                        <option value="0"  selected >Não</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="apresentacao">Fonte de pagamento</label>
                                    <select name="fonte_pagamento" id="fonte_pagamento" class="form-control">
                                        <option value="1" >Eu mesmo</option>
                                        <option value="2" >Minha Concessionaria</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-danger btn-user btn-block" value='Criar Meu Site'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/virtual-select.min.js"></script>

<script>
    VirtualSelect.init({
  ele: '#multipleSelect',
  multiple: true
});
</script>

<script>
    var loadfile = function(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="text-center mb-3">
                    <img src="https://alcancevendas.com.br/wp-content/uploads/2021/07/UI-Design-Alcance-PaginaCaptura.png" width="120px" alt="">
                </div>
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Panfleto Digital &copy; Alcance Vendas 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
        $(document).ready(function() {
        $('.select2-single').select2();
        $('.select2-multiple').select2();
        });

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
</body>
</html>