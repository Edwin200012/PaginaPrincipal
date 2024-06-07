<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>
          ¡Nos encantaría saber de ti! Si tienes alguna pregunta, comentario o simplemente deseas ponerte en contacto con nosotros, aquí tienes todas las formas en las que puedes hacerlo:
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p id="mostrarUbicacion"></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Correo:</h4>
                <p id="mostrarCorreo"></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>+52 <span id="mostrarTelefono"></span></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Tu Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Tu Correo</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
            mostrarDatosContactoPublicado();
        })

        function mostrarDatosContactoPublicado(){
            jQuery.ajax({
                url: 'controllers/mostrarcontactopublicado.php',
                type: 'GET',
                dataType: 'JSON',
                success: function (response){
                    let datos = response.registrocontactopublicado;
                    // Iterar sobre los datos y mostrar información
                    datos.forEach(item =>{
                        $('#mostrarUbicacion').append(item.ubicacion);
                        $('#mostrarCorreo').append(item.correo);
                        $('#mostrarTelefono').append(item.telefono);
                    });
                }
            }).fail(function() {
                alert("Error");
            });

        }
      </script>