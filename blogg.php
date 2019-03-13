<!DOCTYPE html>
<html lang="no-nb" class="scheme_original">
<?php
 include "include/header.php";
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

include "data/blogData.php";
$blog_array_searched = [];
if(array_key_exists("s", $_GET)){
    foreach($blog_array as $key=>$value){

        if($value->search($_GET["s"]) ){
     
            $blog_array_searched[] = $value;
        }

    }
}
else{
    $blog_array_searched = $blog_array;
}


 ?>

    <body class="archive category category-masonry-2-columns category-8 cloe_brooks_body body_style_wide body_transparent theme_skin_less article_style_stretch layout_masonry_2 template_masonry scheme_original top_panel_show top_panel_above sidebar_show sidebar_right sidebar_outer_hide">
        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>                
                <!-- Header -->
          <!-- /Header -->
          <?php
                    include "include/navbar.php"

                ?>
                <!-- /Header -->   
                
             
                </div>
            </div>
            <!-- top_panel -->
            <div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_dark">
                <div class="top_panel_title_inner top_panel_inner_style_3  title_present_inner breadcrumbs_present_inner panel_img">
                    <div class="content_wrap">
                        <h1 class="page_title">Blogger</h1>
                        
                    </div>
                </div>
            </div>
             <!-- /top_panel -->

            <div class="page_content_wrap page_paddings_yes">
                <div class="content_wrap">
                    <div class="content">
                        <div class="isotope_wrap " data-columns="2">
                            
                        <?php
                foreach($blog_array_searched as $key=>$value){
                        ?>
                        <div class="isotope_item isotope_item_masonry isotope_item_masonry_2 isotope_column_2">
                        <div class="post_item post_item_masonry post_item_masonry_2 post_format_standard <?php echo $key % 2 == 0 ? 'even' : 'odd' ?> ">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                                <a href=' <?php
                                                    echo "blogg-single.php?id=".$key."&ref=".$value->slug; 
                                                    ?>  ' class='hover_icon hover_icon_link'>
                                                    <img alt="<?php echo $value->excerpt ?> " src="http://placehold.it/370x238">
                                                 
                                                </a>
                                                
                                            
                                        </div>
                                    </div>
                                    <div class="post_content isotope_item_content">
                                        <div class="post_info">
                                            <span class="post_info_item post_info_posted"> 
                                                <?php
                                                    echo "<a href='blogg-single.php?id=".$key."&ref=".$value->slug."' class='post_info_date'>"; 
                                                    echo $value->date;
                                                    echo "</a>";
                                                 ?>
                                              
                                            </span>
                                           
                                        </div>
                                        <h5 class="post_title">
                                           <?php 
                                                echo "<a href='blogg-single.php?id=".$key."&title=".$value->title."'>"; 
                                                echo $value->title;
                                                echo "</a>"
                                            ?>
                                        </h5>
                                        <div class="post_descr">
                                            <p><?php  echo $value->excerpt ; ?></p>
                                            <?php
                                                    echo "<a href='blogg-single.php?id=".$key."&title=".$value->title."' class='post_readmore sc_button sc_button_style_filled'>"; 
                                                    echo "<span class='post_readmore_label'>Read more</span>";
                                                    echo "</a>";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                      <?php
                  }

            ?>
                        
                        
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="sidebar widget_area scheme_dark">
                        <div class="sidebar_inner widget_area_inner">
                            <!-- widget_categories -->
                     
                            <!-- /widget_categories -->

                            <!-- widget_categories dropdown-->
                                <aside class="widget widget_categories">
                                    <h5 class="widget_title">Categories dropdown</h5>
                                    <label class="screen-reader-text" for="cat">Categories dropdown</label>
                                    <select name='cat' id='cat' class='postform'>
                                        <option value='-1'>Select Category</option>
                                        <option class="level-0" value="12">Featured Articles</option>
                                        <option class="level-0" value="8">Masonry 2 Columns</option>
                                        <option class="level-0" value="9">Masonry 3 Columns</option>
                                        <option class="level-0" value="10">Portfolio 2 Columns</option>
                                        <option class="level-0" value="11">Portfolio 3 Columns</option>
                                        <option class="level-0" value="22">Post Formats</option>
                                        <option class="level-0" value="6">Standard Blog</option>
                                        <option class="level-0" value="48">Subcat</option>
                                        <option class="level-0" value="45">Timeline</option>
                                        <option class="level-0" value="7">Without Sidebar</option>
                                    </select>                                            
                                </aside>
                            <!-- /widget_categories dropdown-->

                            <!-- widget_meta -->
                               
                            <!-- /widget_meta --> 

                            <!-- widget_archive -->    
                              
                            <!-- /widget_archive -->  

                            <!-- widget_rss -->
                               
                            <!-- /widget_rss -->

                            <!-- widget_search -->
                                <aside class="widget widget_search">
                                    <form role="search" method="get" class="search_form" action="#blogg.php">
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search for:" />
                                        <button type="submit" class="search_button icon-search-light"></button>
                                    </form>
                                </aside>    
                            <!-- /widget_search -->
                            
                            <!-- widget_recent_comments -->
                          
                            <!-- /widget_recent_comments -->

                            <!-- Recent Posts -->
                                <aside class="widget widget_recent_entries">
                                    <h5 class="widget_title">Recent Posts</h5>
                                    <ul>
                                        <li>
                                            <a href="post-standard.html">
                                                Cognitive Behavioral Therapy for Insomnia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="post-standard.html">
                                                Family Therapy and Marriage Counseling
                                            </a>
                                        </li>
                                        <li>
                                            <a href="post-standard.html">
                                                Six Important Rules for Parenting Teenagers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="post-standard.html">
                                                Dealing with Mental Trauma of Severe Desease
                                            </a>
                                        </li>
                                        <li>
                                            <a href="post-standard.html">
                                                Dealing with Mental Trauma of Severe Desease
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                            <!-- /Recent Posts -->

                            <!-- widget_calendar -->
                           
                            <!-- /widget_calendar -->

                            <!-- Text Widget -->
                               
                            <!-- /Text Widget -->

                            <!-- widget_tag_cloud -->
                              
                            <!-- /widget_tag_cloud -->
                        </div>
                    </div>
                    <!-- /Sidebar -->
                </div>
            </div>                        
                         
            <!-- footer -->
                  <?php
        include 'include/footer.php';
                  ?>
            <!-- /footer -->

            <!-- copyright_wrap footer-->
            <div class="copyright_wrap copyright_style_text scheme_dark">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">
                            ThemeREX © 2016 All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
            <!-- /copyright_wrap footer -->
        </div>

            <!-- Scroll to top -->
                <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
            <!-- /Scroll to top -->
        
            <!-- All Script -->       
                <script type='text/javascript' src='js/jquery/jquery.js'></script>
                <script type='text/javascript' src='js/_main.js'></script>
                <script type='text/javascript' src='js/packed.js'></script>         
                <script type='text/javascript' src='js/photostack/modernizr.min.js'></script>        
                <script type='text/javascript' src='js/theme.init.min.js'></script>
                <script type='text/javascript' src='js/core.utils.min.js'></script>                        
                <script type='text/javascript' src='js/core.init.min.js'></script>             
                <script type="text/javascript" src="js/testimonialcarousel/slick/slick.min.js"></script>        
                <script type="text/javascript" src="js/draggabletimeline/js/draggabletimeline.min.js"></script>
                <script type="text/javascript" src="js/draggabletimeline/js/perfect-scrollbar.jquery.min.js"></script>   
                <script type='text/javascript' src='js/theme.shortcodes.js'></script> 
                <script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
            <!-- /All Script -->                 
        </body>
</html>            




