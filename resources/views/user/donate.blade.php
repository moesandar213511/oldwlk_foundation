@extends('user.site_user.master_user')
@section('title','WLK Foundation')
<style>
	.owl-prev *,
        .owl-next *{
            margin-top: 7px;
        }
</style>
@section('content')
			<section class="section transheader parallax" data-stellar-background-ratio="0.5" style="background-image:url('upload/wlk7.jpg'); background-size:cover">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						{{-- <h2>Blog & News</h2>
						<p class="lead">We publish latest Google news, SEO tips and tricks for our dear customers.</p> --}}
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->


   		<section class="section bt">
			<div class="container">
				{{-- <div class="row text-center">
					<div class="col-md-12">
						<div class="media-box" style="margin-top:-100px;">
							<img src="upload/wlkow.jpg" alt="" style="width:100%;" class="img-responsive">
						</div><!-- end media box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}

				<hr class="invis2">

				<div class="row" style="margin-top:-120px;">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-box-2">
							<h3>Donate Form</h3>
                <form action="{{url('/insert_donate')}}" role="form" class="contactform" method="post">
                            {{csrf_field()}}
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    {{-- <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                            </div> --}}
                <div class="form-group">
									<select name="country" class="form-control" title="Country">
											<option>Country List</option>
											<option>Myanmar</option>
											<option>England</option>
											<option>Singapore</option>
											{{-- <option>Web Copywriting</option>
											<option>SEO Copywriting</option>
											<option>Website Design</option> --}}
									</select>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="Amount" name="amount" placeholder="Amount" required>
						    </div>
						    {{-- <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
						    </div> --}}
						    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Submit Form</button>
						</form>
						</div>
					</div><!-- end col -->

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-box-2">
							<h3>FAQ</h3>
							<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Question 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Question 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Question 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Question 4</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Question 5</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div><div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Question 6</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
</div>
						</div><!-- end text-box -->
					</div><!-- end col -->
			</div><!-- end container -->
</section><!-- end section -->

		<section class="section lb">
			<div class="container" style="margin-top:-30px;">
				<div class="section-title text-center">
					<h3>Our Activities</h3>
					<hr>
					<p class="lead">Our search engine optimization works and happy customers in the past.</p>
				</div><!-- end section-title -->

				{{-- <div class="row lightcasestudies">
					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_04.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Carbon Beauty</h4>
									<small>Backlink Service</small> 
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_05.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Denicler</h4>
									<small>1nd Place Success</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_06.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>KendPark</h4>
									<small>SEO / SEM</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}
				<div class="owl-carousel owl-theme lightcasestudies withhover">
					@foreach($blogs as $blog_data)
					<div class="item-carousel">
						<div class="case-box">
							<img src="{{asset('/upload/blog/'.$blog_data->photo)}}" style="width:352px;height:250px;" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->
					@endforeach

				</div>
			</div><!-- end container -->
		</section><!-- end section -->

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif
@endsection