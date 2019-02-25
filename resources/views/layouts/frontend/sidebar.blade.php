<div class="col-md-4">
    <!-- ad -->
    <div class="aside-widget text-center">
        <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="./img/ad-1.jpg" alt="">
        </a>
    </div>
    <!-- /ad -->
    <!-- post widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2>Random post you missed</h2>
        </div>

        @foreach ($side_posts as $post)
        <div class="post post-widget">
            <a class="post-img" href="blog-post.html"><img src="./img/{{$post->image}}" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="blog-post.html">{{$post->post_title}}</a></h3>
            </div>
        </div>
        @endforeach
 
    </div>
    <!-- /post widget -->
    
    <!-- catagories -->
    <div class="aside-widget">
        <div class="section-title">
            <h2>Catagories</h2>
        </div>
        <div class="category-widget">
            <ul>
                @foreach ($categories as $category)  
                <?php
                    $count=DB::table('posts')->where('category_id','=',$category->id)->count();
                ?> 
                    <li><a href="#" class="cat-{{$category->id}}">{{$category->category_name}}<span>{{$count}}</span></a></li>
                @endforeach
                
              
            </ul>
        </div>
    </div>
    <!-- /catagories -->
    
    <!-- tags -->
    <div class="aside-widget">
        <div class="tags-widget">
            <ul>
                @foreach ($tags as $tag)
                    <li><a href="#">{{$tag->name}}</a></li>
                @endforeach
               
                
            </ul>
        </div>
    </div>
    <!-- /tags -->
</div>