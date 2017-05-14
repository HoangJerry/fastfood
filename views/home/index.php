<?php include_once 'views/layout/header.php'; ?>        
        <div id="carousel-example-generic" class="carousel intro slide">
            
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item active" style="background-image:url('media/img/onepage-restaurant-events03.jpg')">
                    <div class="carousel-caption">
                        <h2 data-animation="animated bounceInDown">
                        Fast-Food</h2>
                        <h1 style="text-transform : none" data-animation="animated bounceInUp">
                        Daily</h1>
                        <a href="<?php echo html_helpers::url(array('ctl'=>'menu')); ?>" class="btn 
                        btn-ghost btn-lg" data-animation="animated fadeInLeft">Tour of Menu</a>
                        <a href="<?php echo html_helpers::url(array('ctl'=>'login')); ?>" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Login</a>
                    </div>
                </div>
                <!-- /.item -->
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls (currently displayed none from style.css)-->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
<?php include_once 'views/layout/footer.php'; ?>