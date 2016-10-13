
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logos/vaex_alt.png">

    <title>Vaex: Visualization and exploration of big tabular data</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/vaex.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/monokai-sublime.min.css">


  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <!--<a class="navbar-brand" href="#"><span class="glyphicon icon-spectabular"></span>vaex</a> -->
               <!--  <a class="navbar-brand" href="#"><span class="glyphicon icon-spectabular"></span>V&#xe6;X</a>-->
              <a class="navbar-brand" href="http://vaex.astro.rug.nl"><li class="glyphicon icon-telescope3" style="color: white"></li>vaex</i>(beta)</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#download" class="page-scroll" ><i class="fa fa-download"></i>Download</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-eye"></i>Demonstration<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li> <a data-width="1025" data-title="Vaex demo" href="https://www.youtube.com/watch?v=NpWLef7-0Yg" data-toggle="lightbox" role="button"><i class="fa fa-film"></i>Demonstration movie</a> </li>
                    <li> <a href="#demo" class="page-scroll"><i class="fa fa-desktop"></i>Live demonstration</a> </li>
                    <li><a href="#example" class="page-scroll"><i class="fa fa-file-code-o"></i>Example code</a></li>
                  </ul>
              </li>
                <li><a href="http://vaex.astro.rug.nl/latest/"><i class="fa fa-book"></i>Documentation</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://github.com/maartenbreddels/vaex"><i class="fa fa-github"></i>Github</a></li>
                    <li><a href="http:http://vaex.astro.rug.nl/latest/installing.html"><i class="fa fa-download"></i>Download/Install instructions</a></li>
                    <li><a href="https://pypi.python.org/pypi/vaex/"><i class="fa fa-archive"></i>Vaex on pypi</a></li>
                    <li><a href="http:http://vaex.astro.rug.nl/latest/gallery.html"><i class="fa fa-picture-o"></i>Gallery</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><i class="fa fa-book"></i>Documentation</li>
                    <li><a href="http://vaex.astro.rug.nl/latest/"><i class="fa-empty"></i>Home</a></li>
                    <li><a href="http://vaex.astro.rug.nl/latest/tutorial_ipython_notebook.html"><i class="fa-empty"></i>Tutorials</a></li>
                    <li><a href="http://vaex.astro.rug.nl/latest/api.html"><i class="fa "></i>API</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!--<div class="item active" style="background: url(overview.png) no-repeat left center; background-size: cover;>-->
        <div class="item active" style="background: url(image/aq_nytaxi.png) no-repeat center center; background-size: cover;">
          <!--<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">-->
          <!--<img src="aq_nytaxi.png"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Fast visualization of big data.</h1>
                Plot 1 billion points in ~1 second, with interactive navigation on a single computer.
              <!--<p><a href="nyct.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="global-gallery" data-parent="" ><img src="nyct.png" width="20%"/></a></p>-->
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Or watch the demo movie</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/linked_views.png">
          <!--<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">-->
          <div class="container">
            <div class="carousel-caption alt-color">
              <h1>Interactive selections.</h1>
              <p>Lasso selection, with instant redraw.</p>
              <!--<p><img src="linked_views.png" width="30%"/></a></p>-->
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/notebook.png">
          <!--<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Jupyter notebook integration.</h1>
                <p>Interactive navigation and selections are possible</p>
              <!--<p><a href="notebook.png" data-toggle="lightbox" data-title="In a Jupyter notebook" data-footer="Interactive navigation and selection possible in the notebook"  data-gallery="global-gallery" data-parent="" ><img src="notebook.png" width="30%"/></a></p>-->
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/volr.png"/>
          <!--<img class="fourth-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">-->
          <div class="container">
            <div class="carousel-caption ">
              <h1>Volume rendering.</h1>
              <p>Vectors overlayed.</p>
              <!--<p><img src="volr.png" width="30%"/></p>-->
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="jumbotron">
    <h1><li class="glyphicon icon-telescope3"></li>vaex: visualization and exploration of big tabular data</h1>
        <p class="lead">A billion objects per second on a single computer. <span class="text-muted">Standalone or Python library.</span></p>
        <p>
          <a class="btn btn-lg btn-success page-scroll" href="#download" role="button"><i class="fa fa-download"></i>Download</a>
          <a id="bla" class="btn btn-lg btn-success" href="https://www.youtube.com/watch?v=NpWLef7-0Yg" data-toggle="lightbox" data-width="1024" role="button"><i class="fa fa-film"></i>Demo movie</a>
        </p>
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-4">
          <a href="nyc_taxi_full.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="gallery-1" data-parent="" >
            <img class="img-circle" src="image/nyc_taxi_square.png" alt="Generic placeholder image" width="140" height="140">
          </a>
          <h2>Why use vaex</h2>
          <p>
            Visualize and explore <b>huge tabular datasets interactively</b>...
          </p>
          <p><a class="btn btn-default page-scroll" href="#fast" role="button">Read more &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <a href="linked_views.png" data-toggle="lightbox" data-title="Helmi and de Zeeuw 2000" data-footer="Selection made on the right, also visible in the left"  data-gallery="gallery-1" data-parent="" >
            <img class="img-circle" src="image/linked_views.png" alt="Generic placeholder image" width="140" height="140">
          </a>
          <h2>How does it work</h2>
          <p>vaex does this by visualizing binned aggregated data...</p>
          <p><a class="btn btn-default page-scroll" href="#explore" role="button">Read more &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <a href="notebook.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="gallery-2" data-parent="" >
            <img class="img-circle" src="image/notebook.png" alt="Generic placeholder image" width="140" height="140">
          </a>
          <h2>What is vaex</h2>
          <p>A graphical interface, or library that integrates with the Jupyter/IPython notebook...</p>
          <p><a class="btn btn-default page-scroll" href="#flexible" role="button">Read more &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <a id="fast" name="fast"></a>
      <div class="row featurette">
        <div class="col-md-8">
          <h2 class="featurette-heading">Why use vaex? <span class="text-muted"></span></h2>
            <p class="lead">
            <ul>
                <li>Visualize and explore <b>big tabular data</b> interactively</li>
                <li>Process more than a <b>billion objects</b> per second on a single computer.</li>
                <li>Custom mathematical expressions can <b>transform</b> data on the fly.</li>
                <li><b>Explore</b> the dataset by using visual queries and boolean expressions to visualize subsets of the data.</li>
                <li>vaex has a <b>graphical interface</b> for most common uses cases.</li>
                <li>vaex is also Python library for custom plots and applications, such as in the <b>Jupyter/IPython notebook</b>.</li>
                <li><b>Client/server</b> architecture: Delegate computations to a remote server. (<i>in development</i>)</li>
                <li>Use a <b>cluster</b> to visualize and explore even larger datasets (10-100 billion). (<i>in development</i>)</li>
                <li>With a focus on astronomy and astrophysics, but widely applicable.</li>
                <li>Can visualize the whole upcoming <b>Gaia catalogue</b> in one second.</li>
            </ul>
            </p>
        </div>
        <div class="col-md-4">
          <a href="nyc_taxi_full.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="gallery-2" data-parent="" >
          <img class="featurette-image img-responsive center-block" src="image/nyc_taxi_square.png" alt="Generic placeholder image">
          </a>
        </div>
      </div>

      <hr class="featurette-divider">
      <a id="explore" name="explore"></a>
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">How does it work?<!--<span class="text-muted">Make interactive selection.</span>--></h2>
            <p class="lead">
                vaex does this by
                <ul>
                    <li><b>Binning</b> or <b>aggregating</b> the data on a grid, using simple optimized algorithms</li>
                    <li><b>Columnar</b> storage of data avoids reading unneeded data and enables maximum performance of hard drives.</li>
                    <li><b>Memory mapped</b> files avoids unneeded reading, and copying of data.</li>
                </ul>
            </p>

            <!--<p class="lead">In the GUI, or the IPython/Jupyter notebook, a selection can be made in the plot, for instance a lasso selection. The selection is applied to all views of the data. In this example,
            a cluster is selected in the right view , and this cluster can be seen to correspond to a stream in the left view.
          </p>-->
        </div>
        <div class="col-md-5 col-md-pull-7">
          <a href="linked_views.png" data-toggle="lightbox" data-title="Helmi and de Zeeuw 2000" data-footer="Selection made on the right, also visible in the left"  data-gallery="global-gallery-2" data-parent="" >
            <img class="featurette-image img-responsive center-block" src="image/linked_views.png" alt="Generic placeholder image">
          </a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <a id="flexible" name="flexible"></a>
        <div class="col-md-7">
          <h2 class="featurette-heading">What is vaex?</h2>
            <ul>
                <li>A program that</li>
                <ul>
                    <li>Visualizes 1d histograms, 2d density plots, averages quantities, and 3d volume rendering </li>
                    <li>Allows interactive <b>navigation</b> and <b>selection</b></li>
                    <li>Overlay <b>vector</b> and <b>tensor</b> quantities in 2 and 3d.</li>
                </ul>
                <li>A Python library/package for (data) scientists:</li>
                <ul>
                    <li>Is <b>pip</b> and <b>conda</b> installable.</li>
                    <li>Make <b>custom</b> plot and statistics.</li>
                    <li>Calculate <b>statistics</b> on a <b>N-dimensional grid</b> and visualize it.</li>
                    <li>Create interactive <b>Jupyter/IPython notebooks</b>.</li>
                    <li>Publication quality plots with <b>matplotlib</b>.</li>
                    <li>Interactive plots with <b>bqplot</b> or <b>bokeh</b>.</li>
                    <li>Combine the notebook with the graphical interface in one kernel</li>
                </ul>
            </ul>
          <!--<p class="lead">
            No tool will be able to give all options, we have to resort to programming. vaex can also be used as a library, which is especially usefull in the IPython/Jupyter notebook.
            Making custom plots, and even combining it with the gui, or doing selections programmatically are all possible.
          </p>
            <p class="lead">
            The vaex library for (data) scientists comes as a pip and conda installable Python package,
            for producing custom statistics, plots and interactive plots in the Jupyter/IPython Notebook.
            vaex supports matplotlib for publication quality plots, and bqplot and bokeh for interactivity.
            </p>-->
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="image/notebook.png"" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <a id="demo" name="demo"></a>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Live demo. <span class="text-muted">Yellow taxi pickup locations in New York City.</span></h2>
          <p class="lead">The demo on the right shows 140 million points, rendered real time. Zoom/pan and the plot get updated on the fly. </p>
        </div>

        <div class="col-md-5">
<script src="https://npmcdn.com/jupyter-js-widgets@~1.1.2/dist/embed.js"></script><script type="application/vnd.jupyter-embedded-widgets">{
    "4089dc5069fb4087b93f12edd2a86eca": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": -73.77295187777271,
            "min": -74.02443763891917
        },
        "views": []
    },
    "7b460db8de9f4ad9bcdd31bef1083cd7": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 40.837966668699174,
            "min": 40.63243495690996
        },
        "views": []
    },
    "3500a98736a64612bba3c87500381fc0": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {},
        "views": []
    },
    "e25696562b2d4bf88f93b983d2eba647": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 1,
            "min": 0
        },
        "views": []
    },
    "cf8d366437e04cb38a10e204319013c6": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 1,
            "min": 0
        },
        "views": []
    },
    "5c4a7afa00724562a3a7ed30e684d61f": {
        "model_name": "FigureModel",
        "model_module": "bqplot",
        "state": {
            "color": null,
            "fig_margin": {
                "top": 40,
                "right": 10,
                "left": 60,
                "bottom": 40
            },
            "background_color": null,
            "font_style": "",
            "layout": "IPY_MODEL_e8fcd0fe8a214d50b5ba20e9e07fd532",
            "axes": [
                "IPY_MODEL_48aedddd3a2d43329f380c672f2e6fc7",
                "IPY_MODEL_3c1f085e921d491da4ee8d6d04aa972a"
            ],
            "marks": [
                "IPY_MODEL_9b24f18e110b4676919ebe862103f149",
                "IPY_MODEL_d056bb4cbe4043aab51c602b23d78f79"
            ],
            "scale_x": "IPY_MODEL_e25696562b2d4bf88f93b983d2eba647",
            "scale_y": "IPY_MODEL_cf8d366437e04cb38a10e204319013c6",
            "font_family": "",
            "padding_y": 0,
            "_dom_classes": [],
            "fig_color": "black",
            "font_weight": "",
            "interaction": "IPY_MODEL_5ee90b7078df43468edcc538532185a2",
            "font_size": "",
            "visible": true
        },
        "views": []
    },
    "9b24f18e110b4676919ebe862103f149": {
        "model_name": "LinesModel",
        "model_module": "bqplot",
        "state": {
            "scales": {
                "y": "IPY_MODEL_7b460db8de9f4ad9bcdd31bef1083cd7",
                "x": "IPY_MODEL_4089dc5069fb4087b93f12edd2a86eca"
            },
            "color": {
                "type": "float64",
                "values": []
            },
            "display_legend": false,
            "selected": null,
            "labels": [
                "C1"
            ],
            "y": {
                "type": "float",
                "values": [
                    0,
                    1,
                    4,
                    9,
                    16,
                    25,
                    36,
                    49,
                    64,
                    81
                ]
            },
            "x": {
                "type": "float",
                "values": [
                    0,
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    7,
                    8,
                    9
                ]
            }
        },
        "views": []
    },
    "48aedddd3a2d43329f380c672f2e6fc7": {
        "model_name": "AxisModel",
        "model_module": "bqplot",
        "state": {
            "scale": "IPY_MODEL_7b460db8de9f4ad9bcdd31bef1083cd7",
            "orientation": "vertical",
            "label": "pickup_longitude",
            "tick_values": {
                "type": "object",
                "values": []
            },
            "side": "left"
        },
        "views": []
    },
    "3c1f085e921d491da4ee8d6d04aa972a": {
        "model_name": "AxisModel",
        "model_module": "bqplot",
        "state": {
            "scale": "IPY_MODEL_4089dc5069fb4087b93f12edd2a86eca",
            "label": "pickup_latitude",
            "tick_values": {
                "type": "object",
                "values": []
            },
            "side": "bottom"
        },
        "views": []
    },
    "d056bb4cbe4043aab51c602b23d78f79": {
        "model_name": "ImageModel",
        "model_module": "vaex.ext.bqplot",
        "state": {
            "scales": {
                "y": "IPY_MODEL_7b460db8de9f4ad9bcdd31bef1083cd7",
                "x": "IPY_MODEL_4089dc5069fb4087b93f12edd2a86eca"
            },
            "height": -0.20553171178921303,
            "scales_metadata": {
                "y": {
                    "orientation": "vertical",
                    "dimension": "y"
                },
                "x": {
                    "orientation": "horizontal",
                    "dimension": "x"
                }
            },
            "preserve_aspect_ratio": "",
            "display_legend": false,
            "selected": null,
            "width": 0.25148576114645493,
            "src": "data:image/png;base64,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",
            "y": 40.837966668699174,
            "x": -74.02443763891917
        },
        "views": []
    },
    "d96c72fd2a474834adea6ddc26c65ec6": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {},
        "views": []
    },
    "a8864bc5e3194be9afcc3cbf0fa21676": {
        "model_name": "ProgressModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "orientation": "horizontal",
            "layout": "IPY_MODEL_d96c72fd2a474834adea6ddc26c65ec6",
            "description": "Done",
            "max": 1,
            "step": 0.01,
            "value": 1
        },
        "views": []
    },
    "5ee90b7078df43468edcc538532185a2": {
        "model_name": "PanZoomModel",
        "model_module": "bqplot",
        "state": {
            "scales": {
                "y": [
                    "IPY_MODEL_7b460db8de9f4ad9bcdd31bef1083cd7"
                ],
                "x": [
                    "IPY_MODEL_4089dc5069fb4087b93f12edd2a86eca"
                ]
            }
        },
        "views": []
    },
    "79d55a0e56c94f40b141cd12b488ca41": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {},
        "views": []
    },
    "90f6e138adc4409a8228cb64de193657": {
        "model_name": "ToggleButtonsModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "tooltips": [],
            "_options_labels": [
                "m"
            ],
            "layout": "IPY_MODEL_79d55a0e56c94f40b141cd12b488ca41",
            "icons": [
                "fa-arrows",
                "fa-pencil-square-o"
            ],
            "button_style": "",
            "value": "m"
        },
        "views": []
    },
    "858eed4cf7144b8f90aa7181d4553242": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "align_items": "stretch",
            "display": "flex"
        },
        "views": []
    },
    "60c654b6e3114122818b304f32bb165d": {
        "model_name": "BoxModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "layout": "IPY_MODEL_858eed4cf7144b8f90aa7181d4553242"
        },
        "views": []
    },
    "e8fcd0fe8a214d50b5ba20e9e07fd532": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "height": "100%",
            "flex_flow": "column",
            "width": "100%",
            "display": "flex"
        },
        "views": []
    },
    "aa06cc0fbbd140e58bcbf358ac32847c": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {
            "flex_flow": "column",
            "align_items": "stretch",
            "display": "flex"
        },
        "views": []
    },
    "552161ed1a9144819a7a5c18105a06b2": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": -73.7807680397851,
            "min": -74.04147222438682
        },
        "views": []
    },
    "8158674a7dbf431288e2c6f6641a0fbc": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 40.834356371836,
            "min": 40.6212907211704
        },
        "views": []
    },
    "f96a04c2fb4c42f1952b9dcf91b69569": {
        "model_name": "ImageModel",
        "model_module": "vaex.ext.bqplot",
        "state": {
            "scales": {
                "y": "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
                "x": "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2"
            },
            "height": -0.21306565066559813,
            "scales_metadata": {
                "y": {
                    "orientation": "vertical",
                    "dimension": "y"
                },
                "x": {
                    "orientation": "horizontal",
                    "dimension": "x"
                }
            },
            "preserve_aspect_ratio": "",
            "display_legend": false,
            "selected": null,
            "width": 0.26070418460172107,
            "src": "data:image/png;base64,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",
            "y": 40.834356371836,
            "x": -74.04147222438682
        },
        "views": []
    },
    "082a159c6aaf4905bb87b5ae63c83c7f": {
        "model_name": "LinesModel",
        "model_module": "bqplot",
        "state": {
            "scales": {
                "y": "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
                "x": "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2"
            },
            "color": {
                "type": "float64",
                "values": []
            },
            "colors": [
                "red"
            ],
            "display_legend": false,
            "selected": null,
            "stroke_width": 3,
            "labels": [
                "C1"
            ],
            "y": {
                "type": "float64",
                "values": [
                    0.8847498027354481,
                    -1.5452848844587206,
                    -0.48390125504369425,
                    -0.653723572781396,
                    -0.999884621203658,
                    -1.5539996623082075,
                    0.15470196926549545,
                    -1.0078469864203217,
                    -0.7111947587021005,
                    -1.1532260368355103,
                    -0.7499051932430264,
                    -0.9532988827971486,
                    -0.9352161241291396,
                    -0.38236504215138983,
                    0.3842442450957401,
                    0.7769565275176309,
                    0.4510820535656682,
                    -0.20464777224699415,
                    0.09754035333143114,
                    -1.9542322966045103
                ]
            },
            "x": {
                "type": "float",
                "values": [
                    0,
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    7,
                    8,
                    9,
                    10,
                    11,
                    12,
                    13,
                    14,
                    15,
                    16,
                    17,
                    18,
                    19
                ]
            }
        },
        "views": []
    },
    "f9c0242d4e544fc5856a5960e59d2ed4": {
        "model_name": "AxisModel",
        "model_module": "bqplot",
        "state": {
            "scale": "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2",
            "tick_format": "0.2f",
            "grid_lines": "solid",
            "label": "latitude",
            "tick_values": {
                "type": "object",
                "values": []
            },
            "side": "bottom"
        },
        "views": []
    },
    "63b0da80582a47e8974dd295fdbf249d": {
        "model_name": "AxisModel",
        "model_module": "bqplot",
        "state": {
            "scale": "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
            "orientation": "vertical",
            "tick_format": "0.2f",
            "grid_lines": "solid",
            "label": "longitude",
            "tick_values": {
                "type": "object",
                "values": []
            },
            "side": "left"
        },
        "views": []
    },
    "d825731dff554d58b5a40c17da22e5ae": {
        "model_name": "PanZoomModel",
        "model_module": "bqplot",
        "state": {
            "scales": {
                "y": [
                    "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc"
                ],
                "x": [
                    "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2"
                ]
            }
        },
        "views": []
    },
    "ffdcad9c072940ef865cc916a8be8117": {
        "model_name": "LassoSelectorModel",
        "model_module": "bqplot",
        "state": {
            "y_scale": null,
            "x_scale": null
        },
        "views": []
    },
    "d8aa6b62f1de4d17811eaea877d5308c": {
        "model_name": "BrushSelectorModel",
        "model_module": "bqplot",
        "state": {
            "y_scale": "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
            "color": "green",
            "x_scale": "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2"
        },
        "views": []
    },
    "325f444bd6694f5fb90c2019bbc90887": {
        "model_name": "LayoutModel",
        "model_module": "jupyter-js-widgets",
        "state": {

        },
        "views": []
    },
    "982832f18b51496088243653205154f2": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 1,
            "min": 0
        },
        "views": []
    },
    "d68a9c32e050417e8dd8e5295692f6e5": {
        "model_name": "LinearScaleModel",
        "model_module": "bqplot",
        "state": {
            "max": 1,
            "min": 0
        },
        "views": []
    },
    "a91bce4bc7f8480792884f9d0b1923a8": {
        "model_name": "FigureModel",
        "model_module": "bqplot",
        "state": {
            "color": null,
            "min_width": 100,
            "background_color": null,
            "padding_y": 0,
            "fig_color": "black",
            "font_style": "",
            "title": "Yellow taxi pickup location in NYC for 2015",
            "layout": "IPY_MODEL_325f444bd6694f5fb90c2019bbc90887",
            "axes": [
                "IPY_MODEL_f9c0242d4e544fc5856a5960e59d2ed4",
                "IPY_MODEL_63b0da80582a47e8974dd295fdbf249d"
            ],
            "marks": [
                "IPY_MODEL_082a159c6aaf4905bb87b5ae63c83c7f",
                "IPY_MODEL_f96a04c2fb4c42f1952b9dcf91b69569"
            ],
            "scale_x": "IPY_MODEL_982832f18b51496088243653205154f2",
            "scale_y": "IPY_MODEL_d68a9c32e050417e8dd8e5295692f6e5",
            "font_family": "",
            "_dom_classes": [],
            "min_height": 100,
            "font_weight": "",
            "interaction": "IPY_MODEL_d825731dff554d58b5a40c17da22e5ae",
            "font_size": "",
            "visible": true
        },
        "views": [
            {
                "cell_index": 3
            }
        ]
    },
    "08ced375127f4de7be13a63e2e4e65ee": {
        "model_name": "JsonSourceModel",
        "model_module": "hello",
        "state": {
            "custom_json": "\n    var xlim = [data['xmin'], data['xmax']]\n    var ylim = [data['ymin'], data['ymax']]\n    return _.extend({limits: [xlim, ylim]}, data_static)\n\n",
            "data_input": {
                "xmin": -74.04147222438682,
                "xmax": -73.7807680397851,
                "ymin": 40.6212907211704,
                "ymax": 40.834356371836
            },
            "url": "http://www.astro.rug.nl/~breddels/cgi-bin/proxy.cgi/jansky:9002/datasets/nyt2015/image_rgba_url",
            "listeners": [
                [
                    "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2",
                    "min",
                    "xmin"
                ],
                [
                    "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2",
                    "max",
                    "xmax"
                ],
                [
                    "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
                    "min",
                    "ymin"
                ],
                [
                    "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
                    "max",
                    "ymax"
                ]
            ],
            "custom_js_output": "\n    var img = scope['img']\n    //var scale_x = scope['scale_x']\n    //var scale_y = scope['scale_y']\n    var src = data[\"result\"]\n    var m = data_input\n     img.set('x', m['xmin'])\n    img.set('y', m['ymax'])\n    img.set('width', m['xmax'] - m['xmin'])\n    img.set('height', -(m['ymax'] - m['ymin']))\n    img.set('src', src)\n    img.save_changes()\n    ",
            "scope": {
                "scale_x": "IPY_MODEL_552161ed1a9144819a7a5c18105a06b2",
                "scale_y": "IPY_MODEL_8158674a7dbf431288e2c6f6641a0fbc",
                "fig": "IPY_MODEL_a91bce4bc7f8480792884f9d0b1923a8",
                "img": "IPY_MODEL_f96a04c2fb4c42f1952b9dcf91b69569"
            },
            "method": "GET",
            "data_input_static": {
                "expressions": [
                    "pickup_longitude",
                    "pickup_latitude"
                ],
                "variables": [],
                "f": "log1p",
                "virtual_columns": [],
                "size": [
                    600,
                    600
                ]
            }
        },
        "views": []
    }
}</script>

        </div>
      </div>



      <hr class="featurette-divider">

      <div class="row featurette">
        <a id="download" name="download"></a>
        <div class="col-md-5">
          <a class="download-vaex" href="#download"><i class="fa fa-download fa-big falink-black" aria-hidden="true"></i> </a>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Download.</h2>

          <p class="lead">Desktop user? Download the standalone <a href="http://vaex.astro.rug.nl/program/vaex-1.0.0-beta.2-osx.zip">OSX</a> or
            <a href="http://vaex.astro.rug.nl/program/vaex-1.0.0-beta.2-linux.tar.gz">Linux</a> version. *

          </p>
          <p class="lead">For programming? Install the python package:
            <br/>
            <code>
              $ pip install --user --pre vaex
          </code>
          </p>
          <p class="lead">Or for anaconda users:
            <br/>
            <code>
              $ conda install -c maartenbreddels vaex
          </code>
          <p class="lead">Latest from git:
            <br/>
            <code>
              $ pip install git+https://github.com/maartenbreddels/vaex/
          </code>
          </p>
          <p class="lead">Or see the <a href="http://vaex.astro.rug.nl/latest/installing.html#from-source">detailed instructions</a>.</p>

          <span class="text-muted" style="font-size: 80%">*Not possible to combine with the IPython/Jupyter notebook</span>.

        </div>
      </div>



      <hr class="featurette-divider">


       <a id="example" name="example"></a>
      <div id="myCarousel-code" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel-code" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel-code" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row featurette">
              <div class="col-md-8">
                <h2 class="featurette-heading">Python example.</h2>
      Run <code>python</code></codfe>, and paste:
<pre><code class="python">import vaex as vx
dataset = vx.examples.helmi_de_zeeuw.get() # get a cup of coffee while this downloads
dataset.plot("L", "E", f="log", show=True)
</code></pre>
<a href="#" data-target="#myCarousel-code" data-slide-to="1">See next example, with a larger dataset</a>
              </div>
              <div class="col-md-4">
                <a href="Lz-E.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="gallery-2" data-parent="" >
                <img class="featurette-image img-responsive center-block" src="image/Lz-E.png" alt="Generic placeholder image">
                </a>
              </div>
            </div>

          </div>

          <div class="item">
            <div class="row featurette">
              <div class="col-md-8">
              <h2 class="featurette-heading">Notebook example.</h2>
      From the IPython/Jupter notebook, run
<pre><code class="python">import vaex as vx
dataset = vx.examples.nyc_taxi.get() # get a cup of coffee while this downloads
dataset.plot_bq("pickup_longitude","pickup_latitude", f="log")
</code></pre>
The plot is interactive, meaning you can zoom in and out and the plot will be updated.
You will need about, ~15BG or free memory for a proper performance, or replace <code>nyc_taxi</code> by <code>nyc_taxi_2015</code> for a subset.
              </div>
              <div class="col-md-4">
                <a href="nyc_taxi_full.png" data-toggle="lightbox" data-title="New York City Taxi pickup locations" data-footer=""  data-gallery="gallery-2" data-parent="" >
                <img class="featurette-image img-responsive center-block" src="image/nyc_taxi_square.png" alt="Generic placeholder image">
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel-code" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel-code" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <h2 class="featurette-heading">Demo movies.</h2>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="image/aq_nytaxi_b.png" alt="">
                <div class="overlay">
                   <h2>Fast visualization</h2>
                   <a class="info" href="#">Coming soon</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="image/linked_views.png" alt="">
                <div class="overlay">
                   <h2>Selections and linked views</h2>
                   <a class="info" href="#">Coming soon</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="image/notebook.png" alt="">
                <div class="overlay">
                   <h2>Notebook integration</h2>
                   <a class="info" href="#">Coming soon</a>
                </div>
            </div>
        </div>
      </div>

      <hr class="featurette-divider">

       <a id="gaia" name="gaia"></a>
      <hr class="featurette-divider">
      <div class="row featurette">
        <h2 class="featurette-heading">Gaia data.</h2>
        <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
            <ul>
                <li>
                    See the <a href="http://www.cosmos.esa.int/web/gaia/home">Gaia Science Homepage for details</a>, and you may want to try the <a href="https://archives.esac.esa.int/gaia">Gaia Archive</a> for ADQL (SQL like) queries.
                </li>
                <li>
                    Use a torrent client like <a href="https://transmissionbt.com/">transmission</a> to download the files, and keep seeding/sharing.
                </li>
            </ul>
            Data:
            <ul>
                <li>
                    Single hdf5 file, copy of <a href="http://cdn.gea.esac.esa.int/Gaia/gaia_source/fits/">full Gaia DR1 catalogue</a> in random row order: <a href="data/gaia-dr1.hdf5.torrent">gaia-dr1.hdf5.torrent</a>(342G).
                </li>
                <li>
                    random 1% of the catalogue, useful for on your laptop: <a href="data/gaia-dr1-1percent.hdf5.torrent">gaia-dr1-1percent.hdf5.torrent</a> (<a href="http://129.125.6.22/gaia-dr1-1percent.hdf5">direct link</a>) (3.5G).
                </li>
                <li>
                    All rows, but just l,b,ra,dec and g magnitude: <a href="data/gaia-dr1-essential.hdf5.torrent">gaia-dr1-essential.hdf5.torrent</a> (43G).
                </li>
                <li>
                    Single hdf5 file, copy of <a href="http://cdn.gea.esac.esa.int/Gaia/gaia_source/fits/">full TGAS catalogue</a>: <a href="data/tgas.hdf5">tgas-hdf5</a> (0.6G).
                </li>
            </ul>
        </div>
      </div>

      <hr class="featurette-divider">


        <div class="row featurette">
        <a id="about" name="about"></a>
        <div class="col-md-12">
          <h2 class="featurette-heading">Acknowledgements.</h2>
            Vaex is funded by:<br>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a href="http://www.rug.nl/research/kapteyn/"><img width="300px" src="logos/rug_bigger.gif"></img</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a href="https://erc.europa.eu"><img width="300px" src="logos/erc2.jpg"></img</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a href="http://www.nova-astronomy.nl/"><img width="300px" src="logos/nova.jpg"></img</a>
        </div>
          <p class="lead">.</p>
        </div>
        <div class="col-md-5">
        </div>
      </div>

      <hr class="featurette-divider">
        <div class="row featurette">
        <a id="about" name="about"></a>
        <div class="col-md-12">
          <h2 class="featurette-heading">Contact.</h2>


            <ul>
<li>
                <a href="mailto:breddels@astro.rug.nl"><i class="fa fa-envelope"></i> breddels@astro.rug.nl</a>
 </li>

<li>
            <a href="https://twitter.com/intent/tweet?screen_name=maartenbreddels" class="twitter-mention-button" data-show-count="false">Tweet to @maartenbreddels</a>
            <a href="https://twitter.com/maartenbreddels" class="twitter-follow-button" data-show-count="false">Follow @maartenbreddels</a>
</li>
                </ul>


          <p class="lead">.</p>
        </div>
        <div class="col-md-5">
        </div>
      </div>

      <!--<div class="row featurette">
        <a id="about" name="about"></a>
        <div class="col-md-7">
          <h2 class="featurette-heading">About.</h2>
          <p class="lead">.</p>
        </div>
        <div class="col-md-5">
        </div>
      </div>

      <hr class="featurette-divider">-->



      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <!-- <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/jquery.client.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/languages/python.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

		<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function ($) {
			    if(($.client.os == "Linux") || ($.client.os == "Mac")) {
                    $('.download-vaex').on('click', function (e) {
                        e.preventDefault();
                        console.log($.client.os)
                        if($.client.os == "Linux")
                          window.location.href = "http://vaex.astro.rug.nl/program/vaex-1.0.0-beta.2-osx.zip"
                        if($.client.os == "Mac")
                          window.location.href = "http://vaex.astro.rug.nl/program/vaex-1.0.0-beta.2-linux.tar.gz"

                    });
                }
			   $('a.page-scroll').bind('click', function(event) {
                  var $anchor = $(this);
                  $('html, body').stop().animate({
                      scrollTop: $($anchor.attr('href')).offset().top
                  }, 800); // , 'easeInOutExpo'
                  event.preventDefault();
               });
        });

        $("#myModal").on("show.bs.modal", function(e) {
            var link = $(e.relatedTarget);
            $(this).find(".modal-body").load(link.attr("href"));
        });
		</script>
		<script type="text/javascript">
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('onShown event fired');
							}
						},
						onContentLoaded: function() {
							if (window.console) {
								return console.log('onContentLoaded event fired');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var lb = this;
							$(lb.modal_content).on('click', '.modal-footer a#jumpit', function(e) {
								e.preventDefault();
								lb.navigateTo(2);
							});
							$(lb.modal_content).on('click', '.modal-footer a#closeit', function(e) {
								e.preventDefault();
								lb.close();
							});
						}
					});
				});

			});
		</script>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60052576-1', 'vaex.astro.rug.nl');
  ga('send', 'pageview');

</script>

  <!--<a href="https://github.com/maartenbreddels/vaex"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 1000;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>-->
  </body>
</html>