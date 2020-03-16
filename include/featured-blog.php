   <?php
    include "data/contentData.php";

   ?>
   
   <div class="page_content_wrap page_paddings_no">
                            <div class="content_wrap">
                                <div class="content">
                                    <div class="wrapper">
                                        <h1 class="h1_home sc_title sc_title_regular sc_align_center margin_top_huge margin_bottom_medium">
                                            Nyeste blogginnlegg
                                        </h1>
                                        <div id="sc_blogger_1646116989" class="sc_blogger layout_classic_3 template_masonry margin_top_null margin_bottom_large sc_blogger_horizontal">
                                            <div class="isotope_wrap" data-columns="3">
                                           <?php 
                                            foreach($blog_array as $key=>$value){
                                                if($value->featured){
                        ?>

                                                <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3 isotope_item_show">
                                                    <div class="post_item post_item_classic post_item_classic_3 post_format_standard even">
                                                        <div class="post_featured">
                                                        <?php
                                   
                                                    echo "<a class='hover_icon hover_icon_link' href='".$value->getLinkUrl()."'>";
                                                    echo "<img alt='".$value->excerpt."' src='".$value->getImageUrl()."'>";
                                                    echo "</a>";
                                            
                                                
                                                    
                                        ?>

                                                        </div>
                                                        <div class="post_content isotope_item_content">
                                                            <div class="post_info">
                                                                <span class="post_info_item post_info_posted"> 
                                                                    <a href="<?php echo $value->getLinkUrl();?>" class="post_info_date">
                                                                        <p><?php echo $value->published; ?></p>
                                                                    </a>
                                                                </span>
                                                                
                                                            </div>
                                                            <h5 class="post_title">
                                                                <a href="innhold.php?id=<?php echo $value->getLinkUrl();?>">
                                                                <?php echo $value->title; ?>
                                                                </a>
                                                            </h5>
                                                            <div class="post_descr">
                                                                <p><?php echo $value->excerpt; ?></p>
                                                                <a href="<?php echo $value->getLinkUrl();?>" class="post_readmore sc_button sc_button_style_filled ">
                                                                    <span class="post_readmore_label"><?php echo $value->getButtonText()?></span>
                                                                </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                            }
                                                ?>
                                               
                                            </div>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>