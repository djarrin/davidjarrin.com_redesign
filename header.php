    <nav class="navbar navbar-inverse navbar-fixed-top container-fluid">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">David Jarrin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo 'class="active"';} ?>><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li <?php if (stripos($_SERVER['REQUEST_URI'],'about.php') !== false) {echo 'class="active"';} ?>><a href="about.php">About Me</a></li>
                <li <?php if (stripos($_SERVER['REQUEST_URI'],'mywork.php') !== false) {echo 'class="active dropdown"';} ?>class="dropdown">
                  <a href="mywork.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Work<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="mywork.php#skills">Aquired Skills</a></li>
                    <li><a href="mywork.php#experience">Work Experience</a></li>
                    <li class="divider"></li>
                    <li><a href="mywork.php#works">Examples of My Work</a></li>
                  </ul>
                </li>
                    <li <?php if (stripos($_SERVER['REQUEST_URI'],'contact.php') !== false) {echo 'class="active"';} ?>><a href="contact.php">Contact Me</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
    </nav>