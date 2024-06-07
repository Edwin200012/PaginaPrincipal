<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Servicios</h2>
  <p>
  En Arsha, nos enorgullecemos de ofrecer una amplia gama de servicios diseñados para satisfacer las necesidades de nuestros clientes y ayudarlos a alcanzar sus objetivos. 
  Nuestro equipo de expertos está comprometido a brindar soluciones personalizadas y de alta calidad en cada proyecto que emprendemos. 
  A continuación, te ofrecemos una descripción general de los servicios que ofrecemos:
  </p>
</div>

<div class="row" id="servicios-container">
  <!-- Se muestra la informacion de servicios -->
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    mostrarDatosServicios();
  })

  function mostrarDatosServicios(){
    jQuery.ajax({
      url: 'controllers/mostrarservicios.php',
      type: 'GET',
      dataType: 'JSON',
      success: function(response){
        let servicios = response.registroservicios;
        let serviciosContainer = $('#servicios-container');
        
        servicios.forEach(function(servicio, index) {
          let delay = (index + 1) * 100; //Incrementar delay con cada registro
          let servicioHTML = `
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="${delay}">
              <div style="width: 330px; height: 265.8;" class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="#">${servicio.nombre}</a></h4>
              <p>${servicio.descripcion}</p>
              <p>$${servicio.precio} / mensual</p>
              </div>
            </div>
          `;
          serviciosContainer.append(servicioHTML);
        });
      }
    }).fail(function() {
      alert("Error");
    })
  }
</script>