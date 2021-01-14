<!DOCTYPE HTML>
<html lang="en">
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="index.php">Disney's Animation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbar">

    <ul class="navbar-nav">
    <li class="nav-item">
    <a href="index.php" class="nav-link navbar-link-2 waves-effect">
    <img src="icon/homepage.png" height="30"> 
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link navbar-link-2 waves-effect" href="#!" data-toggle="modal" data-target="#myModal"><img src="icon/search.png" height="30"></a>
    </li>
    </ul>
    </div>
    
 <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
      <!-- konten modal-->
      <div class="modal-content modal-xl">
        <!-- heading modal -->
        <div class="modal-header modal-xl">
          <form action="search.php" method="get" class="form-inline form-xl">
            <input name="keyword" class="form-control" type="text" style="width: 376px;" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark" type="submit"><img src="icon/search.png" height="30"></button>
          </form>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      </div>
    </div>
  </div>

        </div>

</nav>
  </body>
</html>
