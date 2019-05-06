{extends file ="navbar.tpl"}
<<<<<<< HEAD
=======
{block name=content}
>>>>>>> registration
    <nav class="navbar navbar-expand-lg navbar-light  backgroundcolor">
      <img src="../../img/tooth.png" width="45" height="45" class="d-inline-block align-top" alt="">
      <a class="navbar-brand" href="mainpageview.tpl"><span class = "test">RemediumDente</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto navbarFontSize">
          <li class="nav-item paddingRight">
            <a class="nav-link" href="#">Zaloguj się</a>
          </li>
          <li class="nav-item paddingRight">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4"><span class ="test"><b>Klinika RemediumDente</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
Fusce efficitur nunc lectus, sit amet fermentum enim efficitur a.
Praesent eget tellus arcu. Sed ut nibh enim. Nam lobortis volutpat augue non pulvinar.
Aenean lacinia nisi in aliquet placerat. Sed volutpat non elit non egestas. Curabitur elementum
sollicitudin risus in vestibulum. Nam tempor risus mi, quis consequat felis interdum sed.
Fusce lobortis ultricies lorem a auctor. Sed euismod elementum ipsum, vel posuere sapien sagittis a.
Cras imperdiet mattis dolor nec condimentum.

Nunc faucibus porttitor ipsum, quis dapibus augue molestie et.
Quisque at tortor pellentesque, dapibus erat id, suscipit felis.
Proin id porta mauris. Curabitur ac placerat lacus, non euismod tellus.
In nec lorem ac arcu consequat malesuada eget sit amet augue. Praesent sed euismod nisl.
Aenean pharetra dapibus nibh. Duis sit amet consectetur lorem. Integer rhoncus quam erat, id iaculis metus.</b>
        </div>
      </div>
<!-- konta -->
<hr class="featurette-divider">

      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4">
            <img  src="../../img/form.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Zostań naszym pacjentem</h2>
            <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary buttony" href="#" role="button">Wypelnij formularz &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4">
            <img src="../../img/certificate1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="#" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><b>Stomatologia</b> nowatorskie leczenie prosto z wschodu</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
               Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../../img/dentist.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><b>Ortodoncja</b> nowatorskie leczenie prosto z zachodu</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
              Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="../../img/ortho.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
</div>



<footer class="container">
  <p class="float-right"><a href="#">Wróć na górę</a></p>
  <p>&copy; <b>2019 Bartosz Glanowski</b></p>
{/block}
