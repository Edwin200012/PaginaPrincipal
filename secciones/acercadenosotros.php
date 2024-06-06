<link href="../assets/css/style.css" rel="stylesheet">
 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Acerca de Nosotros</h2>
        </div>

        <div class="row content">
          <div>
            <p id="mostrarDescripcion" class="centered-text" style="margin-bottom: 2%;">
            </p>
          </div>
          <div class="col-lg-6">
            <h3>Misión</h3>
            <p id="mostrarMision">
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Visión</h3>
            <p id="mostrarVision">
            </p>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
            mostrarDatosNosotrosPublicado();
        })

        function mostrarDatosNosotrosPublicado(){
            jQuery.ajax({
                url: 'controllers/acercadenosotrospublicado.php',
                type: 'GET',
                dataType: 'JSON',
                success: function (response){
                    let datos = response.registronosotrospublicado;
                     // Iterar sobre los datos y mostrar informacion
                    datos.forEach(item => {
                        $('#mostrarDescripcion').append(item.descripcion);
                        $('#mostrarMision').append(item.mision);
                        $('#mostrarVision').append(item.vision);
            });
                }
            }).fail(function() {
                alert("Error");
            });
        }
      </script>
    </section>