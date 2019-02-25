<?php use \App\Http\Controllers\PostsController; ?>
@extends('layouts.frontend.layout')

@section('content')
		<!-- section for Trend-->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/9.png" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="https//127.0.0.1/8000/single">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/7.png" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section for trend-->

		<!-- section for main post-->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Sly's Latest Post</h2>
								</div>
							</div>
							<!-- post -->
							@foreach ($posts as $post)
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="/posts/{{$post->id}}"><img src="./img/{{$post->image}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">						
											<a class="post-category cat-2" href="/categories/{{$post->category_id}}">{{PostsController::getCategoryName($post->category_id)}}</a>

										
											<span class="post-date">{{$post->created_at}}</span>
											<span class="post-date">{{$post->author_id}}</span>
										</div>
									<h3 class="post-title"><a href="/posts/{{$post->id}}">{{$post->post_title}}</a></h3>
										<p>{{$post->body}}</p>
									</div>
								</div>
							</div>
							<!-- /post -->

							
							@endforeach
							{{ $posts->links()}}
										<!--{!! $posts->links() !!}-->
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block" >Load More</button>
								</div>
							</div>
						</div>
					</div>

					@include('layouts.frontend.sidebar')
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section for main post-->

		
@endsection