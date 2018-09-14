<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> New2Mumbai  </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('rawfiles/theme1/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ URL::asset('rawfiles/theme1/css/custom.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
   <link rel="stylesheet" href="{{ URL::asset('rawfiles/theme1/css/JLX-Contact-Form-with-Placeholder-FI.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('rawfiles/theme1/css/Responsive-Form.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('rawfiles/theme1/css/Responsive-Form1.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('rawfiles/theme1/css/styles.css')}}">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('rawfiles/theme1/css/scrolling-nav.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{ url('/') }}"> New 2 Mumbai </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About us </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <!-- Intro Section -->
  <div  id="contact" class="contact-clean">
      <form method="post" action="storeformvalues">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <h2 class="text-center"> Share With us Some Details </h2>
          <div class="form-group has-success has-feedback">
              <input class="form-control" type="text" name="name" placeholder="Name"><i class="form-control-feedback glyphicon glyphicon-ok" aria-hidden="true"></i></div>
          <div class="form-group has-error has-feedback">
              <input class="form-control" type="email" name="email" placeholder="Email"><i class="form-control-feedback glyphicon glyphicon-remove" aria-hidden="true"></i>
              <p class="help-block">Please enter a correct email address.</p>
          </div>
          <div class="form-group has-success has-feedback">
              <input class="form-control" type="text" name="mobile" placeholder="Mobile"><i class="form-control-feedback glyphicon glyphicon-ok" aria-hidden="true"></i></div>
          <div class="form-group">
            <label for="exampleSelect1">Reason of Visting the City?</label>
            <select class="form-control" name="reason" id="exampleSelect1">
              <option>Job</option>
              <option>Business</option>
              <option>Marraige</option>
              <option>Concert</option>
              <option>Family</option>
            </select>
          </div>          
          <div class="form-group">
              <textarea class="form-control" rows="14" name="message" placeholder="Mention Details!! "> </textarea>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Need Accomodation ?</label>
            <select class="form-control" id="exampleSelect1">
              <option>Yes</option>
              <option>No</option>
            </select>
          </div>

          <div class="form-group">
              <button class="btn btn-primary" type="submit"> SUBMIT </button>
          </div>
      </form>
  </div>

    




    <!-- jQuery -->
    <script src="{{ URL::asset('rawfiles/theme1/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('rawfiles/theme1/js/bootstrap.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ URL::asset('rawfiles/theme1/js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('rawfiles/theme1/js/scrolling-nav.js') }}"></script>

</body>

</html>
