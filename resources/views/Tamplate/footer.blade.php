<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> 
                    Contate-nos </h4>
                    <form action="#" method="get">
                        @csrf
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <textarea class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
                        <button href="#" type="submit" class="submit-button btn-constom">Enviar <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    
                    </form>
                </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Companhia</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Novidades</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">
                                Perguntas frequentes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                        </ul>
                        <h4 class="mt-5">Siga-nos</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                                                                 aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>
                            Serviços</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link" href="#">
                                Designer de Web</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Design gráfico</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Design de aplicativo</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">SEO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Marketing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Analítica</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>&copy; <?= date('Y')?>. Todos os direitos reservados por  <a href="/" >Sênior Sistemas</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>