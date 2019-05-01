<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="no-nb" class="scheme_original">
<?php
 
$headerString = "Psykoterapeut Christine Schjetlein - Kontakt meg";
 include "include/header.php";



 ?>



    <body class="page cloe_brooks_body body_style_wide theme_skin_less article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide">
        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>                
                <!-- Header -->
                <?php
                    include "include/navbar.php"

                    ?>
                <!-- /Header -->   
                
            
            </div>

            <!-- top_panel_title -->
            <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_dark">
                <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner panel_img">
                    <div class="content_wrap">
                        <h1 class="page_title">Kontakt</h1>
                       
                    </div>
                </div>
            </div>
            <!-- /top_panel_title -->

            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    <div class="content">
                        <div class="post_item post_item_single post_featured_default post_format_standard page type-page">     
                            <div class="wrapper text_contact_page">
                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_top_huge margin_bottom_huge">
                                    <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                        <div class="sc_section sc_section_block  aligncenter">
                                            <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                    <figure class="sc_image sc_image_shape_square">
                                                        <img src="images/mail.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text_column content_element ">
                                            <div class="wrapper">
                                                <p>
                                                    <a style="color:black" href="mailto:&#099;&#104;&#114;&#105;&#115;&#116;&#105;&#110;&#101;&#064;&#115;&#099;&#104;&#106;&#101;&#116;&#108;&#101;&#105;&#110;&#046;&#110;&#111;">&#099;&#104;&#114;&#105;&#115;&#116;&#105;&#110;&#101;&#064;&#115;&#099;&#104;&#106;&#101;&#116;&#108;&#101;&#105;&#110;&#046;&#110;&#111;</a><br> www.christineschjetlein.no
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_2 even">
                                        <div class="sc_section sc_section_block aligncenter">
                                            <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                    <figure class="sc_image sc_image_shape_square">
                                                        <img src="images/phone.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wrapper">
                                                <p>
                                                     + 47 922 60 216
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 sc_column_item sc_column_item_3 odd">
                                        <div class="sc_section sc_section_block aligncenter">
                                            <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                    <figure class="sc_image sc_image_shape_square">
                                                        <img src="images/check.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text_column content_element ">
                                            <div class="wrapper">
                                                <p>
                                                Neuberggata 5A<br>  0367 Oslo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <?php
 include "include/contact-form.php"

 ?>      
                

            <!--  Google Map
            <div id="sc_googlemap_1339375003" class="sc_googlemap" data-zoom="16" data-style="standart">
                <div id="sc_googlemap_1339375003_1" class="sc_googlemap_marker" data-title="" data-description="USA, Chicago, IL 60606" data-address="USA, Chicago, IL 60606" data-latlng="" data-point="images/map_marker.png"></div>
            </div>
        /Google Map -->

           
            <!-- /copyright_wrap footer -->
        </div>   
        <?php
 include "include/footer.php"

 ?>                   
    </body>
</html>