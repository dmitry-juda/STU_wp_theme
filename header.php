<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STU
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/coin-slider-styles.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/coin-slider.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

	<style>
	
	* , *::before , *::after {

    	box-sizing: initial !important;

	}

	.header_info table {

		margin: 0px;
		
	}

	.wrapper table {

		margin: 0px;
	}
	
	</style>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header">
        <div class="wrapper">
            <i class="home_triangle"></i>
            <table>
                <tbody>
                <tr>
                    <td class="header_left">
                        <a href="index.html">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<? bloginfo('name') ?>">
                        </a>
                    </td>
                    <td class="header_right">
                        <div class="header_info">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="header_info_place">
                                        <b><?php bloginfo( 'name' ); ?></b>
                                        <span> / ??????????????????</span>
                                    </td>
                                    <td class="header_info_phone">
                                        <?php bloginfo( 'description' ); 
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <?  wp_nav_menu( ['container' => 'div', 'menu_class' => 'navigation' ] ); ?>    
                       



                                    
                                
                                
                                
                                <!--
                                    <td class="navigation_item first cl-effect-11">
                                        <a href="about.html" data-hover="?? ????????????????">?? ????????????????</a>
                                    </td>
                                    <td class="navigation_item">
                                        <div class="navigation_dropdown js-nav_dropdown">
                                            <span class="dropdown_link js-nav_dropdown_link" data-hover="???????????? ?? ????????????">???????????? ?? ????????????</span>
                                            <i class="dropdown_triangle"></i>
                                            <div class="dropdown_list_wrap">
                                                <div class="dropdown_active">
                                                    <span class="dropdown_link active js-nav_dropdown_link-close">???????????? ?? ????????????</span>
                                                    <i class="dropdown_triangle"></i>
                                                </div>
                                                <div class="dropdown_list">
                                                    <div class="dropdown_list_item"><a href="tarif_complex_service.html">?????????? ???????????????????????? ??????????????</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_reporting.html">?????????? ????????????????????????</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_without_employees.html">?????????? ?????? ?????? ??????????????????????</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_additional services.html">???????????????????????????? ????????????</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="feedbacks.html" data-hover="????????????">????????????</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="faq.html" data-hover="???????????? ??????????????">???????????? ??????????????</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="contacts.html" data-hover="????????????????">????????????????</a>
                                    </td>
                                -->
 
            </table>
        </div>
    </div>