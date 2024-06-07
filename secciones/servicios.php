<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Servicios</h2>
  <p>
  En Arsha, nos enorgullecemos de ofrecer una amplia gama de servicios diseñados para satisfacer las necesidades de nuestros clientes y ayudarlos a alcanzar sus objetivos. 
  Nuestro equipo de expertos está comprometido a brindar soluciones personalizadas y de alta calidad en cada proyecto que emprendemos. 
  A continuación, te ofrecemos una descripción general de los servicios que ofrecemos:
  </p>
</div>

<div class="row">
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
    <div class="icon-box">
      <div class="icon"><i class="bx bxl-dribbble"></i></div>
      <h4><a href="">Lorem Ipsum</a></h4>
      <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
    <div class="icon-box">
      <div class="icon"><i class="bx bx-file"></i></div>
      <h4><a href="">Sed ut perspici</a></h4>
      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
    <div class="icon-box">
      <div class="icon"><i class="bx bx-tachometer"></i></div>
      <h4><a href="">Magni Dolores</a></h4>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
    <div class="icon-box">
      <div class="icon"><i class="bx bx-layer"></i></div>
      <h4><a href="">Nemo Enim</a></h4>
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
    </div>
  </div>

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
        console.log("Datos Servicios: ", response.registroservicios);

      }
    }).fail(function() {
      alert("Error");
    })
  }
</script>