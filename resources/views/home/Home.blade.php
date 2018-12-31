@extends('_shared.Layout')
@section('title','Home')
@section('content')


  <!-- Three columns of text below the carousel -->
<!--<div class="row">
    <div class="col-md-4 hd-before"></div>
    <div class="col-md-4 hd" align="center"><h3 class="hd"Header</h3></div>
    <div class="col-md-4 hd-after"></div>
</div>
<hr>-->
      <div class="row">
        <div class="col-md-3 shadow">
          <div class="card">
            <img class="img-circle" src="{{ 'img/photo_11.jpg'}}" alt="Cricket Board" width="160" height="160">
            <h3>Title</h3>
            <p class="lead"> Description...</p>
            <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
          </div>
        </div><!-- /.col-md-4 -->
        <div class="col-md-6 shadow">
            <div class="card">
          <img class="img-circle" src="{{ 'img/photo_11.jpg'}}" alt="Cricket Board" width="160" height="160">
          <h3>Title</h3>
          <p class="lead"> Description...</p>
          <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
          </div>
        </div><!-- /.col-md-4 -->
        <div class="col-md-3 shadow">
            <div class="card">
          <img class="img-circle" src="{{ 'img/photo_11.jpg'}}" alt="Cricket Board" width="160" height="160">
          <h3>Title </h3>
          <p class="lead"> Description...</p>
          <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
          </div>
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
      <!-- START THE FEATURETTES -->
      
      <!--<hr class="featurette-divider">-->

      <div class="row">
        <div class="col-md-3 shadow">
          <img class="img-circle" src="{{ 'img/photo_11.jpg'}}" alt="Cricket Board" width="160" height="160">
          <h3>Title</h3>
          <p class="lead">Description...</p>
          <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
        </div><!-- /.col-md-4 -->
        <div class="col-md-6 shadow">
          <div class="col-md-2 imagewrapper">
            <img src="{{ 'img/photo_11.jpg'}}" class="img-thumbnail rowstyleimage">
          </div>
          <div class="col-md-4">
            <h2>First featurette heading.</h2>
            <h2><span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
          </div>
      </div>
        <div class="col-md-3 shadow">
          <img class="img-circle" src="{{ 'img/photo_11.jpg'}}" alt="Cricket Board" width="160" height="160">
          <h3>Title </h3>
          <p class="lead"> Description...</p>
          <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
      <!-- START THE FEATURETTES -->


      
      

      
      
      <div class="row shadow">
        <div class="col-md-4 imagewrapper">
          <img src="{{ 'img/photo_11.jpg'}}" class="img-thumbnail rowstyleimage">
        </div>
        <div class="col-md-8">
          <h2>First featurette heading.</h2>
          <h2><span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          <a  class="btn btn-default more" href="#" role="button">More &raquo;</a>
        </div>
      </div>
<!--
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
-->
@endsection