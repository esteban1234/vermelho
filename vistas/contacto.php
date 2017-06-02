<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	<div class="lineaarriba">
  <p class=" direc"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;Av. Eugenia #831 por Av. Gabriel Mancera y Manuel Lopez Cotilla, Col. Del Valle, Benito Juarez, México. C.P. 03100.</p>
</div>

<div class="contenmenulogo">
  <nav class=" pull-left">
      <a href="../index.php">INICIO</a>
      <a href="nosotros.php">NOSOTROS</a>
      <a href="servicios.php">SERVICOS</a>
      <a class="select" href="contacto.php">CONTACTO</a>
  </nav>

  <figure class="logo pull-right">
  <img src="../img/vermelho.png" class="img-responsive" alt="">
</figure>
</div>
<article class="titc">
<p>Formulario de contacto</p>
</article>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu Nombre Completo" required="required" />
                        </div>
                         <div class="form-group">
                            <label for="name">
                                Teléfono</label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu Teléfono" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Escribe tu Correo" required="required" /></div>
                        </div>
                       <!--  <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Comentario</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribe tu Comentario"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning pull-right" id="btnContactUs">
                            ENVIAR</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span ><i class="fa fa-phone" aria-hidden="true"></i></span> Contactos</legend>
            <address>
                <strong>Dirección</strong><br>
                Av. Eugenia #831 entre C. Av. Gabriel Mancera<br>
                 y C. Manuel Lopez Cotilla, Col. Del Valle.<br>
                 Benito Juerez, México. C.P 03100 <br>
                <abbr title="Phone">
                    Teléfono:</abbr>
                PENDIENTE
            </address>
            <address>
                <strong>Correo</strong><br>
                <a href="mailto:info@vermelho.com.mx">info@vermelho.com.mx</a>
            </address>
            <address>
                <strong>Horario</strong><br>
                Lunes a Viernes de 9am a 6pm
            </address>
            </form>
        </div>
    </div>
</div>
<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.8036561196016!2d-99.165415721575!3d19.386148782374622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff0a5ba9b8ff%3A0xd6d290906aa7245b!2sEugenia+831%2C+Col+del+Valle+Centro%2C+03100+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1496439397888" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>