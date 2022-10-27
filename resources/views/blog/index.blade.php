@extends('layouts.blog')

@section('content')


<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle"> Food Blog</h1>

	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span> My Blogs </span></h2>
	</div>

	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
	@foreach ( $posts as $post )
		
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class = "post-image-specs"><a href = ""><img src = " {{ asset($post->imagePath) }}" class="thumbnail post-image-specs" style="background-image" alt="img"></a>
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="">{{ $post->title}}</a></h2>
						<h4 class="card-text">{{ substr(strip_tags($post->body), 0, 150) }}
							{{ strlen(strip_tags($post->body)) > 50 ? "......" : "" }}
						</h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="{{Route('author')}}"><img class="author-thumb" src="{{asset($post->imagePath)}}"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="{{Route('author')}}">{{ $post->user->name ?? 'None' }}</a></span><br/>
								<span class="post-date"> Posted:&nbsp;</b>{{$post->created_at->diffForHumans()}}&nbsp;</span><span class="dot"></span><span class="post-read">6 min read</span>
								</span>
								<span class="post-read-more"><a href="" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		@endforeach
	</div>
	<!-- End List Posts
	================================================== -->

@endsection
