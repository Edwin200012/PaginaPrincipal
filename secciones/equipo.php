
<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>
          En Arsha, contamos con un equipo altamente calificado y apasionado que está dedicado a ofrecer soluciones innovadoras y de alta calidad a nuestros clientes. 
          Nuestro equipo diverso y multidisciplinario está compuesto por profesionales talentosos que aportan una amplia gama de habilidades y experiencias a cada proyecto que emprendemos. 
          A continuación, te presentamos a algunos de los miembros destacados de nuestro equipo:
          </p>
        </div>

        <div class="row" id="equipo-container">
          <!-- Se muestra la informacion de equipo -->
        </div>

        </div>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          mostrarDatosEquipo();
        })

        function mostrarDatosEquipo(){
          jQuery.ajax({
            url: 'controllers/mostrarequipo.php',
            type: 'GET',
            dataType: 'JSON',
            success: function (response){
              let equipo = response.registroequipo;
              let equipoContainer = $('#equipo-container');
              //Utilizar rutas relativas para buscar la imagen
              let baseURL = '../NiceAdmin';

              equipo.forEach(function(integrante, index) {
                let imageURL = baseURL + integrante.imagen;
                let delay = (index + 1) * 100;
                let equipoHTML = `
                 <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                  <div class="member d-flex align-items-start">
                  <div class="pic"><img src="${imageURL}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                  <h4>${integrante.nombre}</h4>
                  <span>${integrante.puesto}</span>
                  <p>${integrante.descripcion}</p>
                  </div>
                </div>
                `;
                equipoContainer.append(equipoHTML);
              });

            }
          }).fail(function() {
            alert("Error");
          });
        }
      </script>