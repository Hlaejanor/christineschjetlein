<!DOCTYPE html>
<html lang="no-nb" class="scheme_original">
<?php


include "data/contentData.php";
$content_array_searched = [];
$pageHeader = "Innhold";
$latestCount  = 5;

if(array_key_exists("title", $_GET)){
  
    $showMasonry = false;
    $showSideBar = false;
    $columns = 3;
 
    foreach($blog_array as $key=>$value){

        if($value->slug == $_GET['title']){
            
         $blogEntry = $value;
        }

    }
 
    $pageHeader = "Blogg";

}
else{

    $showMasonry = true;
if(array_key_exists("type", $_GET)){
    if($_GET['type'] == 'article'){
        $content_array = $article_array;
        $pageHeader = "Artikler";
        $showSideBar = false;
        $columns = 2;
    }
    else{
        $content_array = $blog_array;
        $pageHeader = "Blogg";
        $showSideBar = true;
        $columns = 2;
    }
}
else{
    $content_array = array_merge($article_array, $blog_array);
    $showSideBar = true;
    $columns = 3;
}

if(array_key_exists("s", $_GET)){
    foreach($content_array as $key=>$value){

        if($value->search($_GET["s"]) ){
     
            $content_array_searched[] = $value;
        }

    }
}
else{
    $content_array_searched = $content_array;
}
}

$headerString = "Psykoterapeut Christine A. Schjetlein - ".$pageHeader;
include "include/header.php";
 ?>

    <body class="archive category category-masonry-2-columns category-8 cloe_brooks_body body_style_wide body_transparent theme_skin_less article_style_stretch layout_masonry_2 template_masonry scheme_original top_panel_show top_panel_above <?php if($showSideBar){ echo "sidebar_show sidebar_right sidebar_outer_hide"; }  ?>">
        <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>                
        
            <!-- /Header -->
            <?php
                include "include/navbar.php"

            ?>
      
        </div>
            <!-- top_panel -->
        <div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_dark">
            <div class="top_panel_title_inner top_panel_inner_style_3  title_present_inner breadcrumbs_present_inner panel_img">
                <div class="content_wrap">
                    <h1 class="page_title"><?php  echo $pageHeader ;?></h1> 
                </div>
            </div>
        </div>
             <!-- /top_panel -->
            <?php
        if($showMasonry){
            ?>
        <div class="page_content_wrap page_paddings_yes">
            <div class="content_wrap">
                <div class="content">
                    <div class="isotope_wrap " data-columns="<?php echo $columns?>">
                        
                    <?php
                    if(count($content_array_searched) == 0){
                        echo "<h3>Beklager, vi fant ingen treff</h3>";
                    }
             
                     foreach($content_array_searched as $key=>$value){
                    ?>
                    <div class="isotope_item isotope_item_masonry <?php echo "isotope_item_masonry_".$columns." isotope_column_".$columns; ?> ">
                    <div class="post_item post_item_masonry post_item_masonry_2 post_format_standard <?php echo $key % 2 == 0 ? 'even' : 'odd' ?> ">
                        <div class="post_featured">
                            <div class="post_thumb">
                            <?php
                
                                echo "<a class='hover_icon hover_icon_link' href='".$value->getLinkUrl()."'>";
                                echo "<img alt='".$value->excerpt."' src='".$value->getImageUrl()."'>";
                                echo "</a>";
                                        
                            ?>
                                 </a>
                            </div>
                        </div>
                            <div class="post_content isotope_item_content">
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted"> 
                                        <?php
                                            echo "<a target='".$value->getTargetType()."'  href='".$value->getLinkUrl()."' class='post_info_date'>"; 
                                            echo $value->published;
                                            echo "</a>";
                                            ?>
                                        
                                    </span>    
                                </div>
                                <h5 class="post_title">
                                    <?php 
                                        echo "<a target='".$value->getTargetType()."'  href='".$value->getLinkUrl()."'>"; 
                                        echo $value->title;
                                        echo "</a>"
                                    ?>
                                </h5>
                                <div class="post_descr">
                                    <p><?php  echo $value->excerpt ; ?></p>
                                    <?php
                                        
                                            echo "<a target='".$value->getTargetType()."'  href='".$value->getLinkUrl()."' class='post_readmore sc_button sc_button_style_filled'>"; 
                                            echo "<span class='post_readmore_label'>".$value->getButtonText()."</span>";
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
                <?php
                    if($showSideBar){
                ?>
                    <!-- Sidebar -->
                <div class="sidebar widget_area scheme_dark">
                    <div class="sidebar_inner widget_area_inner">
                            <!-- widget_categories -->
                     
                            <!-- /widget_categories -->

                            <!-- widget_categories dropdown-->
                               
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
                                <h5 class="widget_title">Alle blogginnlegg</h5>
                                <ul>
                                    <?php 
                                        $i = 0;
                                    
                                        foreach($blog_array as $key=>$value){
                                            
                                            
                                                    echo "<li>
                                                        <a class='hover_icon ' href='".$value->getLinkUrl()."'>"
                                                        .$value->title
                                                        ."</a>
                                                    </li>";

                                            
                                        }
                                    ?>
                                    

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
                    <?php
                    }
                }
                else{

                    ?>
                <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap">
                        <div class="content">
                        <!-- post-content -->
                            <div class="itemscope post_item post_item_single post_featured_default post_format_standard post type-post status-publish format-standard has-post-thumbnail hentry category-standard-blog category-without-sidebar tag-my-office tag-presentations">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                   
                                    <img alt="<?php echo $blogEntry->excerpt; ?>" src="<?php echo $blogEntry->getImageUrl(); ?>">
                                  
                                    </div>
                                </div>
                                <div class="post_content">
                               

                      
                        <?php
                                include "content/blogg/tekstdokumenter/".$blogEntry->htmlContent;
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
                         
            <!-- footer -->
            <?php
 include "include/footer.php"

 ?>   
             
    </body>
</html>



