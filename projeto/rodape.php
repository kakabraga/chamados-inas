        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; INAS-DF 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
                
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pronto pra sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Clique em Sair para fechar sua sessão.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="login.html">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <!--script src="vendor/jquery/jquery.min.js"></script-->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        
        <!-- Core mask JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <script type="text/javascript" class="init">
                        var total = 0;
                        verificaNotificacoes();
                        function atualizaNotificacoes() {
                            $.get( "get_notificacao.php?id=<?=$usuario_logado->id ?>")
                            .done(function(data) {
                                //var resp = JSON.parse(data);
                                //console.log(resp);
                                $("#notifica").html(data);
                            });

                        }
                        function verificaNotificacoes() {
                            $.get( "get_total_notificacao.php?id=<?=$usuario_logado->id ?>")
                            .done(function(data) {
                                //var resp = JSON.parse(data);
                                //console.log(resp);
                                if(data != total){
                                    total = data;
                                    atualizaNotificacoes();
                                    if(total != 0){
                                        $("#total_not").html(total);
                                    } else {
                                        $("#total_not").html("");
                                    }
                                    
                                }
                            });

                        }
                        setInterval(verificaNotificacoes, 5000); 
                    </script>

        