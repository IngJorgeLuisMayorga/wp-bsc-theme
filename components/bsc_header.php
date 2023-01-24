
<?php

// Directory
$dir = get_template_directory_uri() . "/assets/images/header";

// Images
$header_ad_img = $dir . "/header-ad-smile.png";
$header_waves_img = $dir . "/header-waves.png";
$header_search_normal = $dir . '/header-icon-lupa.png';
$header_search_hover = $dir . '/header-icon-lupa--hover.jpg';
$header_profile_normal = $dir .  '/header-icon-persona.png';
$header_profile_hover = $dir . '/header-icon-persona--hover.jpg';
$header_cart_normal = $dir . '';
$header_cart_hover = $dir . '';

// Text
$header_ad_text = '10% DE DESCUENTO EN TU PRIMERA COMPRA';

// Full WP Components
$logo = get_custom_logo();

?>

<style>
.site-header {
    padding-top: 0em !important;
    padding-bottom: 0em !important;
}
.bsc-header {
    width: 100%;
    display: block;
    font-family: 'Helvetica';
}
.bsc-header__ad {
    width: 100%;
    display:flex;
    display: none;
    justify-content: center;
    align-items: center;
    background-color: #fff;
}
.bsc-header__ad h1{
    text-align: center;
    font-size:15px;
    margin:0px;
    padding:0.5em 0em;
    color: #989898;
    font-weight: bold;
    letter-spacing: 3px;
}
.bsc-header__ad img{
    width: 18px;
    display: block;
    margin: 0px 10px;
}
.bsc-header__container{
    width: 100%;
    display:flex;
    justify-content: space-between;
    align-items: center;
    color: #333333;
    background-color: #f4bece;
    padding: 1em 0em;
}

.header__texture{
    width: 60px;
    display: block;
}
.header__navbar{
    margin-bottom: 0px !important;
}
.header__navbar a{
    color: #333333;
    font-weight:bold;
}
.header__buttons{
    display:flex;
    justify-content: flex-end;
    align-items: center;
}

.button__logo{
    width: 50px;
}

.button__search, .button__profile{
    cursor: pointer;
    position:relative;
    width: 27px;
    height: 27px;
    margin-left: 1em;
}
.button__search a, .button__profile a{
    position:relative;
    display:block;
    width: 100%;
    height: 100%;
}
.button__search img , .button__profile  img{
    width: 100%;
    position: absolute;
}
.button__search .normal, .button__profile .normal {
    display:block;
}
.button__search .hover, .button__profile .hover {
    display:none;
}
.button__search:hover .normal, .button__profile:hover .normal {
    display:none;
}
.button__search:hover .hover, .button__profile:hover .hover{
    display:block;
}

.button__profile{}
.button__cart{}

</style>

<div class="bsc-header">
    <div class="bsc-header__ad">
        <h1> <?php echo $header_ad_text; ?> </h1>
        <img src="<?php echo $header_ad_img; ?>">
    </div>
    <div class="bsc-header__container">
        <div class="header__texture">
            <img src="<?php echo $header_waves_img; ?>">
        </div>
        <nav class="header__navbar secondary-navigation"  role="navigation">
                <?php
wp_nav_menu(array(
    'container' => 'nav',
    'menu_id' => 'topMenu',
    'link_before' => '<span>',
    'link_after' => '</span>',
));
?>
		</nav>
        <div class="header__buttons">
            <div class="button__logo">
                <?php echo $logo; ?>
            </div>
            <div class="button__search">
                <a href="<?php echo esc_url(home_url('/?s=&post_type=product')); ?>" >
                    <img class="normal" src="<?php echo $header_search_normal; ?>">
                    <img class="hover" src="<?php echo $header_search_hover; ?>">
                </a>
            </div>
            <div class="button__profile">
            <a href="<?php echo esc_url(home_url('/mi-cuenta/')); ?>" >
                    <img class="normal" src="<?php echo $header_profile_normal; ?>">
                    <img class="hover" src="<?php echo $header_profile_hover; ?>">
                </a>
            </div>
            <div class="button__cart"></div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>


<?php
/**
 * Functions hooked into storefront_header action
 *
 * @hooked storefront_header_container                 - 0
 * @hooked storefront_skip_links                       - 5
 * @hooked storefront_social_icons                     - 10
 * @hooked storefront_site_branding                    - 20
 * @hooked storefront_secondary_navigation             - 30
 * @hooked storefront_product_search                   - 40
 * @hooked storefront_header_container_close           - 41
 * @hooked storefront_primary_navigation_wrapper       - 42
 * @hooked storefront_primary_navigation               - 50
 * @hooked storefront_header_cart                      - 60
 * @hooked storefront_primary_navigation_wrapper_close - 68
 */

//do_action('storefront_header');
do_action('storefront_secondary_navigation');
?>