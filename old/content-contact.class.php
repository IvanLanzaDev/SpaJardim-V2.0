<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
    <div class="container">
        <div class="row"><br>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.695293270283!2d-46.53836998471903!3d-23.651080970797473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42eb47c70807%3A0x6f490d01369e0c48!2sSPA+Jardim+by+Ronaldo+Est%C3%A9tica!5e0!3m2!1spt-BR!2sbr!4v1491751884108" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    <address class="default-address">
                        <strong>Spa Jardim by Ronaldo Est&eacute;tica</strong><br>
                        Rua Almirante Prot&oacute;genes, 362
                        <br>
                        Bairro Jardim - Santo Andr&eacute; - SP - 09080-140<br>
                        <abbr title="Phone">Telefone:</abbr> (11) 4992-1222<br>
                        <a href="#">contato@spajardim.com.br</a>
                    </address>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="vip">
                    <form method="post" action="enviar.php">
                        <div class="form-group">
                            <label>Assunto</label>
                            <select name="subject" class="form-control">
                                <option selected>Selecione</option>
                                <option>Quero ser um cliente VIP<</option>
                                <option>Pre-agendamento de consulta</option>
                                <option>Trabalhe Conosco</option>
                                <option>Duvidas</option>
                                <option>Elogios</option>
                                <option>Reclamacoes</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" name="tel" placeholder="(00)0000-0000" required maxlength="13">
                        </div>
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="tel" class="form-control" name="cel" placeholder="(00)00000-0000" required maxlength="14">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="form-group">
                            <label>Como conheceu a <span class="green-title">Spa Jardim by Ronaldo Est&eacute;tica</span></label>
                            <select name="know" class="form-control">
                                <option selected>Selecione</option>
                                <option>Rede Social</option>
                                <option>Indicacao</option>
                                <option>Eventos</option>
                                <option>Jornal</option>
                                <option>Parcerias</option>
                                <option>Revistas</option>
                                <option>Tv</option>
                                <option>Sites</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea name="msg" class="form-control" placeholder="Deixe sua mensagem" required rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="btn_send_contact">Enviar <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>