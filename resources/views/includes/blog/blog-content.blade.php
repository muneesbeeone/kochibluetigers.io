<article class="entry entry-single">

    <div class="entry-img" v-if="blogPost.image">
        <img :src="blogPost.image.url" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
        <a href="blog-single.html">@{{ blogPost.title }}</a>
    </h2>

    <div class="entry-meta">
        <ul>
            <li class="d-flex align-items-center"><a class="text-[#7D1E6D]" href="#">@{{ blogPost.category }}</a></li>
            <li>|</li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time
                        datetime="2020-01-01">@{{ blogPost.date }}</time></a></li>
        </ul>
    </div>

    <div class="entry-content">
        <p>
            @{{ blogPost.content }}
        </p>
        {{-- <blockquote>
        <p>
          Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
        </p>
      </blockquote> --}}
      <div v-if="blogPost.details">
        <div v-if="blogPost.details.benefits">
            <h3>Benefits</h3>
            <div v-for="(benefits,index) in blogPost.details.benefits">
                <ul>
                    <li>
                        @{{ benefits }}
                    </li>
                </ul>
            </div>
        </div>
        <div v-if="blogPost.details.steps">
            <h3>Benefits</h3>
            <div v-for="(steps,index) in blogPost.details.steps">
                <ul>
                    <li>
                        @{{ steps }}
                    </li>
                </ul>
            </div>
        </div>
      </div>
        <div v-for="(section,index) in blogPost.sections">
            <h3>@{{ section.title }}</h3>
            <p>
                @{{ section.content }}
            </p>
        </div>
        <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
    </div>

    {{-- <div class="entry-footer">
        <i class="bi bi-folder"></i>
        <ul class="cats">
            <li><a href="#">Business</a></li>
        </ul>

        <i class="bi bi-tags"></i>
        <ul class="tags">
            <li><a href="#">Creative</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>
    </div> --}}

</article><!-- End blog entry -->
