<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>iDevelopment - Customer panel</title>

	    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type='text/css'>

	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body>
      <div class="wrapper container no-padding">
        <div class="container-fluid" style="padding-top: 10px; padding-bottom: 20px;">
          <img src="{{asset('img/logo.png')}}" class="pull-left">
          <div class="pull-right">
            <a href="{{ url('/auth/alerts') }}" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Netwerk status"><i class="fa fa-bell fa-lg"></i></a>
            <a href="{{ url('/auth/logout') }}" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Online documentatie"><i class="fa fa-book fa-lg"></i></a>
            <a href="{{ url('/auth/logout') }}" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Sign out"><i class="fa fa-sign-out fa-lg"></i></a>

          </div>
        </div>
            <div class="page-container">
	        <!-- top navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
    	            <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn btn-custom" data-toggle="collapse" data-target="#navbar-collapse-menu" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="{{ url('') }}" >Klantenpaneel v1.0</a>
    	            </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-sm-offset-3">
                        <div class="collapse navbar-collapse " id="navbar-collapse-menu">
                            <ul class="nav navbar-nav">
                                <li class="@if (Request::is('/*')) active @endif">
                                    <a href="{{ url('/') }}">
                                        <i class="fa fa-home fa-lg"></i>
                                    </a>
                                </li>
                                <li class="@if (Request::is('billing*')) active @endif"> <a href="{{ url('billing') }}"> Facturatie</a></li>
                                <li class="@if (Request::is('dom*')) active @endif"> <a href="{{ url('/') }}"> Domeinnamen</a></li>
                                <li class="@if (Request::is('webhosting*')) active @endif"><a href="{{ url('webhosting') }}"> Webhosting</a></li>
                                <li class="@if (Request::is('servers*')) active @endif"><a href="{{ url('servers') }}"> Servers</a></li>
                                <li class="@if (Request::is('servers*')) active @endif"><a href="{{ url('servers') }}"> Software</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('cases') }}">Tickets</a></li>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Change password</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Online support</a></li>
                                        <li><a href="#">Sign out</a></li>
                                      </ul>
                                    </li>
                                  </ul>

                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-left">
                    <div class="col-xs-12 col-sm-12" style="padding-top: 20px;">
                        @yield('content')
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->
            </div><!--/row-->
        </div><!--/.container-->
    </div>

	<!-- Scripts -->
	<script type="text/javascript">
	$("[data-toggle=tooltip]").tooltip();
	</script>

    </body>
</html>
