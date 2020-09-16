<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto';
            font-size: 14px;
            background: #455a64;
       }
        h3 {
            color: #fff;
            font-size: 24px;
            text-align: center;
            margin-top: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
            margin-bottom: 30px;
            font-weight: 300;
       }
        .container {
            max-width: 970px;
       }
        div[class*='col-'] {
            padding: 0 30px;
       }
        .wrap {
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            border-radius: 4px;
       }
        a:focus, a:hover, a:active {
            outline: 0;
            text-decoration: none;
       }
        .panel {
            border-width: 0 0 1px 0;
            border-style: solid;
            border-color: #fff;
            background: none;
            box-shadow: none;
       }
        .panel:last-child {
            border-bottom: none;
       }
        .panel-group > .panel:first-child .panel-heading {
            border-radius: 4px 4px 0 0;
       }
        .panel-group .panel {
            border-radius: 0;
       }
        .panel-group .panel + .panel {
            margin-top: 0;
       }
        .panel-heading {
            background-color: #009688;
            border-radius: 0;
            border: none;
            color: #fff;
            padding: 0;
       }
        .panel-title a {
            display: block;
            color: #fff;
            padding: 15px;
            position: relative;
            font-size: 16px;
            font-weight: 400;
       }
        .panel-body {
            background: #fff;
       }
        .panel:last-child .panel-body {
            border-radius: 0 0 4px 4px;
       }
        .panel:last-child .panel-heading {
            border-radius: 0 0 4px 4px;
            transition: border-radius 0.3s linear 0.2s;
       }
        .panel:last-child .panel-heading.active {
            border-radius: 0;
            transition: border-radius linear 0s;
       }
       /* #bs-collapse icon scale option */
        .panel-heading a:before {
            content: '\e146';
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            font-size: 24px;
            transition: all 0.5s;
            transform: scale(1);
       }
        .panel-heading.active a:before {
            content: ' ';
            transition: all 0.5s;
            transform: scale(0);
       }
        #bs-collapse .panel-heading a:after {
            content: ' ';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: scale(0);
            transition: all 0.5s;
       }
        #bs-collapse .panel-heading.active a:after {
            content: '\e909';
            transform: scale(1);
            transition: all 0.5s;
       }
       /* #accordion rotate icon option */
        #accordion .panel-heading a:before {
            content: '\e316';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: rotate(180deg);
            transition: all 0.5s;
       }
        #accordion .panel-heading.active a:before {
            transform: rotate(0deg);
            transition: all 0.5s;
       }
        
    </style>
  </head>
  <body>
  @switch($type)
      @case(1)
          
          @break
      @case(2)
          
          @break
      @default
          
  @endswitch
    <div class="container">
        <div class="col-md-6 col-sm-6">
          <h3>Default collapse with scaling icon</h3>
          <div class="panel-group wrap" id="bs-collapse">
      
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#" href="#one">
                Collapse item #1
              </a>
            </h4>
              </div>
              <div id="one" class="panel-collapse collapse">
                <div class="panel-body">
                  Where now are the horse and the rider? Where is the horn that was blowing? Where is the helm and the hauberk, and the bright hair flowing?
                </div>
              </div>
      
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#" href="#two">
               Collapse item #2
              </a>
            </h4>
              </div>
              <div id="two" class="panel-collapse collapse">
                <div class="panel-body">
                  Where is the harp on the harpstring, and the red fire glowing? Where is the spring and the harvest and the tall corn growing?
                </div>
      
              </div>
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#" href="#three">
                Collapse item #3
              </a>
            </h4>
              </div>
              <div id="three" class="panel-collapse collapse">
                <div class="panel-body">
                  The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning?
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#" href="#four">
               Collapse item #4
              </a>
            </h4>
              </div>
              <div id="four" class="panel-collapse collapse in">
                <div class="panel-body">
                  They have passed like rain on the mountain, like a wind in the meadow; The days have gone down in the West behind the hills into shadow.
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
          </div>
          <!-- end of #bs-collapse  -->
      
        </div>
      
        <div class="col-md-6 col-sm-6">
          <h3>Accordion collapse with rotating icon</h3>
          <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible item #1
              </a>
            </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible item #2
              </a>
            </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible item #3
              </a>
            </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
            <div class="panel">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Collapsible item #4
              </a>
            </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <!-- end of panel -->
      
          </div>
          <!-- end of #accordion -->
      
        </div>
        <!-- end of wrap -->
      
      </div>
      <!-- end of container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
          .on('show.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').addClass('active');
          })
          .on('hide.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').removeClass('active');
          });
      });
    </script>  
</body>
</html>