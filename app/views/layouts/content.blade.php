

<div class="wrapper">
	<div class="container">
		<div class="panel panel-default">
    	<div class="panel-body">
    	<h4>Последние добавленные</h4>


    		<div class="row">
    		<div class="sider_container">
    		<div class="carousel">
    		@foreach($results['lastPosts'] as $post)
 
<div class="col-md-4 car">
<div class="slide-item">
    			<a href="#" class="art_img"><img width=60 height=30 src="{{$post->img}}"></a>
    			<span class="info">{{$post->created_at}}<i class="fa fa-comments"></i>
	    		<span class="count_com">{{$post->views}}</i></span></span>
    			<span class="art_title">
	    		<a href="#">{{$post->title}}
	    		</a>
	    		</span>
	    		<div class="clearfix"></div>
    		</div>
    		</div>
			@endforeach
    </div>
    </div>
    		</div>

			<div class="customNavigation">
				  <a class="btn prev"><i class="fa fa-chevron-left"></i></a>
				  <a class="btn next"><i class="fa fa-chevron-right"></i></a>
			</div>

  	</div>

 

</div>

	<div class="panel panel-default">
	<div class="row marginTop">
			<div class="col-md-3">
			<h4>Популярные</h4>

			<div class="row">

			@foreach($results['popularPosts'] as $post)
				<div class="col-md-7">
				<a href=""><img class="img-responsive" src="{{ $post->img }}"></a>
				<div class="category"><button class="btn_categ"><span>Категория</span></button></div>
					<span class="main_title">{{ $post->title }}</span>
					<div class="soc">
					<a href="#likes" id="likes">
						<i class="fa fa-eye">
							<span class="count_likes">{{ $post->views }}</span>
						</i>
						</a>
					<a href="#likes" id="likes">
						<i class="fa fa-heart">
							<span class="count_likes">{{ $post->likes }}</span>
						</i>
						</a>
						<a href="#comms" id="comms">
						<i class="fa fa-comments">
							<span class="count_coms">{{ $post->likes }}</span>
						</i>
						</a>
					</div>
				</div>
		@endforeach

			</div>

			</div>
			<div class="col-md-6 main">
			<h4>Все</h4>

			<div class="row">
				
		@foreach($results['allPosts'] as $post)
				<div class="col-md-4">
				<a href=""><img class="img-responsive" src="{{ $post->img }}"></a>
				<div class="category"><button class="btn_categ"><span>Категория</span></button></div>
					<span class="main_title">{{ $post->title }}</span>
					<div class="soc">
					<a href="#likes" id="likes">
						<i class="fa fa-eye">
							<span class="count_likes">{{ $post->views }}</span>
						</i>
						</a>
					<a href="#likes" id="likes">
						<i class="fa fa-heart">
							<span class="count_likes">{{ $post->likes }}</span>
						</i>
						</a>
						<a href="#comms" id="comms">
						<i class="fa fa-comments">
							<span class="count_coms">{{ $post->likes }}</span>
						</i>
						</a>
					</div>
				</div>
		@endforeach

			</div>

			</div>
			<div class="col-md-3">
			<h4>Сайдбар</h4>
			</div>
	</div>
	</div>
	
</div>
