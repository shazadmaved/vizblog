<?php
    $options[] = array( 
                        "name" => "Banner",
                        "sicon" => "banner.png",
			"type" => "heading"
                      );
    $options[] = array( 
                        "name" => "Banner Image url (468x60) ",
                        "id" => SN."bannerimg",
                        "std" => get_template_directory_uri()."/img/banner.jpg",
                        "type" => "text"
                      );					
    $options[] = array( 
                        "name" => "Banner Link",
                        "id" => SN."bannerlink",
                        "std" => "http://bhardwaja.com",
                        "type" => "text"
                      );  
    $options[] = array( 
                        "name" => "Banner Title",
                        "id" => SN."bannertitle",
                        "std" => "bhardwaja.com",
                        "type" => "text"
                      );  
?>