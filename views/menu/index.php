<?php include_once 'views/layout/header.php'; ?> 
        <section id="funfacts" class="parallax parallax-image" style="background-image:url(media/img/menu-background.jpg);">
        <div class="wrapsection">
        <div class="container">
            <div class="parallax-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
                            <h4>Choose</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
                            <h4>Reserver</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-send-o"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
                            <h4>Delivery</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="458" data-speed="2500"></h2>
                            <h4>Enjoy</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </section>
        <div class="clearfix">
        </div>   
        <section class="content-top-margin page-title bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading"><b>Menu</b></h2>
                            <hr class="primary">
                            <br/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 breadcrumb text-uppercase sm-no-margin-top wow fadeInUp xs-display-none animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                        <!-- breadcrumb -->
                        {% if 'username' in request.session %}
                            <a href="{% url 'logout' %}" class="top-menu">Logout</a>
                            <a href="{% url 'profile' username=request.session.username  %}" class="top-menu">{{request.session.username}}</a>
                            <a href="{% url 'post_new' %}" class="top-menu"><span class="glyphicon glyphicon-plus"></span></a>
                        {% else %}
                            <a href="{% url 'login' %}" class="top-menu">Login</a>
                            <a href="{% url 'register' %}" class="top-menu">Register</a>
                        {% endif %}
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- content section -->
        <section class="wow fadeIn blog-full-width-section animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="container-fuild">
                <div class="row blog-full-width no-margin xs-no-padding">
                    <!-- post item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 blog-listing wow fadeInUp animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <div class="blog-image"><a href=""><img src="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/blog-post16.jpg" alt=""></a></div>
                        <div class="blog-details">
                            <div class="blog-date"><a href="http://www.themezaa.com/html/h-code/blog-masonry-2columns.html">Paul Scrivens</a> | 02 January 2015</div>
                            <div class="blog-title"><a href="http://www.themezaa.com/html/h-code/blog-single-right-sidebar.html">How To Streamline Creative Dialogue</a></div>
                            <div class="blog-short-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="separator-line bg-black no-margin-lr"></div>
                            <div><a href="http://www.themezaa.com/html/h-code/blog-grid-full-width.html#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="http://www.themezaa.com/html/h-code/blog-grid-full-width.html#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="http://www.themezaa.com/html/h-code/blog-grid-full-width.html#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                        </div>
                    </div>                    
                    <!-- end post item -->
                </div>
                <div class="row no-margin">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- pagination -->
                        <div class="pagination">
                         </div>
                    </div>
                </div>
            </div>
        </section>
<?php include_once 'views/layout/footer.php'; ?>