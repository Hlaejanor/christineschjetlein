<?php
include "contact-form-handler.php";
?>
<div class="form_contact_page_bg" style="<?php echo $contactFormBackground;?>">
    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap ">
            <div class="content">
                <div class="wrapper">
                    <div class="sc_form_wrap scheme_light">
                        <div class="sc_form sc_form_style_form_1 aligncenter margin_top_huge margin_bottom_huge">
                            <?php 
                                if(!verifyEmailPostSubmit()){
                                    
                            ?>
                            <h2 class="sc_form_title sc_item_title">
                            <?php

                                    $message = verifyEmailPostSubmit();

                                    echo "<h1>".$message[1]."</h1>";

                                    if($message[0] == true){
                                    ?>
                            </h2>
                            <h3>
                            Mer informasjon følger senere. Meld deg gjerne på mitt månedlige inspirasjonsbrev for oppdateringer og nyheter.

                            </h3>
                            <form data-formtype="form_1" method="post" action="kontakt.php">
                                <input id="formtype" type="hidden" name="formtype" value="form_custom">
                                <div class="sc_form_info">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                        <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_usernameasd">Navn</label>
                                                <input id="sc_form_username" type="text" name="username" placeholder="Navn" value="<?php echo $_POST["username"]; ?>">
                                            </div>
                                        </div>
                                        <div class="column-1_3 sc_column_item sc_column_item_2 even">
                                            <div class="sc_form_item sc_form_field label_over">
                                                <label class="required" for="sc_form_email">E-post</label>
                                                <input id="sc_form_email" type="text" name="email" placeholder="E-post" value="<?php echo $_POST["email"]; ?>">
                                                
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                            Skriv inn bokstavene <div class="sc_form_item sc_form_field label_over">
                                                 <img src="captcha/captchaImage.php" / style="margin:10px"><input type="text" name="captcha" placeholder="Skriv inn bokstavene over"/>
                                            </div>
                                        </div>
                                        </div>
                                <div class="sc_form_item sc_form_button">
                                    <input type="SUBMIT" name="submit" placeholder="send" value="Meld meg på">
                                    
                                </div>                                                            
                            </form>
                            <?php
                                }
                                else{
                            ?>

                            <h2 class="sc_form_title sc_item_title">
                               Takk for din påmelding
                            </h2>
                        
                                    
                            <?php
                                }
                            ?>
                        
                        </div>
                    </div>                                               
                </div>     
            </div>                                                                                
        </div>
    </div>                          
</div>