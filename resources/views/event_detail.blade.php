@extends('layouts.web')

@section('content')
	<!-- <a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
	<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a> -->
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src='{{ asset("img/$event->picture") }}' alt="Image" class="img-responsive center-block">
				</figure>
				<!-- <span class="fh5co-meta animate-box"><a href="single.html">Travel</a></span> -->
				<h2 class="fh5co-article-title animate-box"><a href="single.html">{{ $event->name }}</a></h2>
				<span class="fh5co-meta fh5co-date animate-box">{{ \Carbon\Carbon::parse($event->end_date)->diffForHumans() }}</span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
							<p>{{ $event->description }}</p>
						</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Event Highlight</h4>
								<h3>Start Date</h3>
								<p>{{ \Carbon\Carbon::parse($event->start_date)->format('d-m-Y') }}</p>
								<h3>End Date</h3>
								<p>{{ \Carbon\Carbon::parse($event->end_date)->format('d-m-Y') }}</p>
								<button class="btn btn-info">Purchse Ticket</button>
							</div>
						</div>
					</div>
	
				</div>
			</article>
		</div>
	</div>
@endsection