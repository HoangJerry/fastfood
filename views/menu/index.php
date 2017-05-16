<?php include_once 'views/layout/header.php'; ?> 
        <section id="funfacts" class="parallax parallax-image" style="background-image:url(media/img/menu-background.jpg); padding-top: 80px; ">
        <div class="wrapsection">
        <div class="container">
            <div class="parallax-content" style="max-height: 500px;" >
                <div class="row">
                    <div class="col-md-3 col-sm-6 xs-display-none">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
                            <h4>Choose</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 xs-display-none">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
                            <h4>Reserver</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  xs-display-none">
                        <div class="funfacts text-center">
                            <div class="icon">
                                <i class="fa fa-send-o"></i>
                            </div>
                            <h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
                            <h4>Delivery</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  xs-display-none">
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
        <section class="content page-title bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading"><b>Menu</b></h2>
                            <hr class="primary">
                            <br/>
                            <a href="" style="text-align: center;">
                            <?php 
                                    if (isset($_SESSION["user"]))
                                    {
                                      echo "Hello ".$_SESSION["user"];
                                      if ($_SESSION["user"] =="admin")
                                      {
                                        echo "<a href='".html_helpers::url(array('ctl'=>'menu','act'=>'add'))."'><br><span class='glyphicon glyphicon-plus'></span></a>";
                                      }
                                    } 
                            ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 breadcrumb text-uppercase sm-no-margin-top wow fadeInUp animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                        <form>
                                <i class="fa fa-search close-search search-button"></i>
                                <input type="text" placeholder="Search..." id="searchResult" class="search-input" name="search" style="text-transform : none;">
                        </form>
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
                    <?php while($row = mysqli_fetch_array($this->records)) : ?>
                        
                    <div class="col-md-3 col-sm-6 col-xs-12 blog-listing wow fadeInUp animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <div class="blog-image"><a href=""><img src="./media/img/upload/<?php echo $row["photo"]; ?>" alt="$row['name']"></a></div>
                        <div class="blog-details">
                            <div class="blog-date">
                                <a href=""><?php echo $row["name"] ?></a> |<?php echo $row["cost"]?>
                            </div>
                            <div class="blog-title">
                                <a href=""><?php echo $row["name"] ?></a>
                            </div>                            
                            <?php if (isset($_SESSION["user"])): ?> 
                                <?php if ($_SESSION["user"] =="admin"): ?> 
                                    <a href="<?php echo html_helpers::url(array('ctl'=>'menu','act'=>'edit','params'=>array('id'=>$row['id']))); ?>" style = " width: 50%;  " class="contact submit btn btn-primary btn-xl space-margin">Edit</a>
                                    <a href="<?php echo $row["id"] ?>" class="contact submit btn btn-primary btn-xl space-margin" id="delButton" style="float:right; margin-right: 0px;">Del</a>
                                <?php else: ?>
                                    <a href="" style = "width: 50%;  " class="contact submit btn btn-primary btn-xl space-margin">Detail</a>
                                    <a href="" class="contact submit btn btn-primary btn-xl space-margin" style="float:right; margin-right: 0px;">Order</a>
                                <?php endif ?>
                            <?php else:?>
                                <a href="" style = "width: 50%;  " class="contact submit btn btn-primary btn-xl space-margin">Detail</a>
                            <?php endif ?>
                            <div class="separator-line bg-black no-margin-lr"></div>
                        </div>
                    </div>  
                    <?php endwhile; ?>
                    <!-- end post items -->
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="./media/js/search.js"></script>
<script src="./media/js/delete.js"></script>
<?php include_once 'views/layout/footer.php'; ?>