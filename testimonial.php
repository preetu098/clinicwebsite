<?php include('header.php');?>
<style>
  button {
    width: 150px;
    height: 40px;
    background-color: #133e85;
    color: white;
    border: 0px;
    font: normal 1.2em/1.7em Verdana, 'Trebuchet MS', Tahoma, sans-serif;
    border-radius: 5px;
  }

  button:hover {
    border: 1px solid #133e85;
    background-color: white;
    color: #133e85;
  }

  .card {
    box-shadow: 2px 2px 12px gray;
  }

  .cards-wrapper {
    display: flex;
    justify-content: center;
  }

  .card img {
    max-width: 100%;
    max-height: 100%;
  }

  .card {
    margin: 0 0.5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    border-radius: 0;
  }

  .carousel-inner {
    padding: 1em;
  }

  /* .carousel-control-prev,
  .carousel-control-next {
    background-color: #e1e1e1;
    width: 5vh;
    height: 5vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
  } */
</style>
<section>
  <div class="container-fluid"
    style="background-image:url('https://parumalahospital.com/assets/images/inside-header/about.jpg');background-repeat:no-repeat;background-size:cover">
    <div class="text-center">
      <h2 class="mt-5 mb-5" style="margin-top:200px!important;font-size:30px!important">Testimonial</h2>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="text-center">
      <h1 class="mt-5 mb-5">Testimonial</h1>
      <div class="row">
        <div class="col-lg-4 col-4">
          <button>All</button>
        </div>
        <div class="col-lg-4 col-4">
          <button>Recent</button>
        </div>
        <div class="col-lg-4 col-4">
          <button>Old</button>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="mt-5    ">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>

    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>

    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="text-center">
            <img src="assets/pat1.png" style="height:200px;width:200px" alt="">
            <h1>User1</h1>
            <p class="ms-5 me-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, sunt.</p>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
<section class="mt-5">
  <div class="container">
    <div class="text-center">
      <h1>Case studies</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <img src="assets/pa1.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
             
              </div>
            </div>
            <div class="card">
            <img src="assets/pa2.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
               
              </div>
            </div>
            <div class="card">
            <img src="assets/pa3.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
            <img src="assets/pa4.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                
              </div>
            </div>
            <div class="card">
            <img src="assets/pa5.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                
              </div>
            </div>
            <div class="card">
            <img src="assets/pa6.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
            <img src="assets/pa1.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              
              </div>
            </div>
            <div class="card">
            <img src="assets/pa1.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
               
              </div>
            </div>
            <div class="card">
            <img src="assets/pa1.jpg" style="height:200px;width:400px" class="card-img-top" alt="...">
              <div class="card-body">
              <h3 class="card-title">After And Before</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
</section>
<section class="mt-5">
  
    <div class="container-fluid">
      <div class="text-center">
        <h1 class="mt-5 mb-5">We are available</h1>
      </div>
      <div class="row">
        <div class="col-lg-2 col-6">
       
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
           <div class="text-center">
           <i class="fa fa-question-circle-o mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
           <h1 class="mt-3 mb-3">Questions</h1>
           </div>
        </div>
        </div>
       
        <div class="col-lg-2 col-6">
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
            <div class="text-center">
            <i class="fa fa-phone-square mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
            <h1 class="mt-3 mb-3">Contact Us</h1>
            </div>
        </div>
        </div>
        <div class="col-lg-2 col-6">
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
            <div class="text-center">
            <i class="fa fa-search mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
            <h1 class="mt-3 mb-3">Find</h1>
            </div>
        </div>
        </div>  
        <div class="col-lg-2 col-6">
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
           <div class="text-center">
           <i class="fa fa-book mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
           <h1 class="mt-3 mb-3">Book</h1>
           </div>
        </div>
        </div>
        <div class="col-lg-2 col-6">
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
           <div class="text-center">
           <i class="fa fa-user mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
           <h1 class="mt-3 mb-3">About Modern</h1>
           </div>
        </div>
        </div>
        <div class="col-lg-2 col-6">
        <div class="card" style="background-color:transparent;border:2px solid orange;box-shadow:0px 0px 0px 0px">
        <div class="text-center">
        <i class="fa fa-plus mt-5 mb-1" aria-hidden="true" style="font-size:40px;color:#003060"></i>
        <h1 class="mt-3 mb-3">Treatment</h1>
           </div>
        </div>
        </div>
      </div>
    </div>
</section>

<?php include('footer.php');?>