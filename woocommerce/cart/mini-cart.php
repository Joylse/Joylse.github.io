<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit; ?>
<script type="text/javascript">
    if (window.sessionStorage) {
        window.sessionStorage.setItem('wc_cart_created', '');
    }
</script>
<a class="u-shopping-cart u-shopping-cart-1" href="<?php echo wc_get_cart_url(); ?>"><span class="u-icon u-icon-circle u-shopping-cart-icon u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-37f6"></use></svg><svg class="u-svg-content" id="svg-37f6" style="color: rgb(71, 138, 201);"><g><path d="m434.333 150h-59.333v-70c0-44.112-35.888-80-80-80h-5c-12.545 0-24.421 2.91-35 8.079-10.579-5.169-22.455-8.079-35-8.079-44.112 0-80 35.888-80 80v70h-64.333l-16.364 360h391.395zm-139.987-121.209c27.57 0 50.654 23.639 50.654 51.209v70h-45v-70c0-18.668-6.445-35.849-17.203-49.474 0 0 1.654-1.735 11.549-1.735zm-39.346 15.547c9.249 9.079 15 21.709 15 35.662v70h-30v-70c0-13.953 5.751-26.583 15-35.662zm-85 35.662c0-27.57 22.43-50 50-50 2.446 0 4.849.185 7.203.526-10.758 13.625-17.203 30.806-17.203 49.474v70h-40zm-65.667 100h35.667v300h-49.303zm65.667 300v-300h40v30h30v-30h105v30h30v-30h30.667l13.636 300z"></path>
</g></svg>
        <span class="u-icon-circle u-opacity u-opacity-0 u-shopping-cart-count" style="font-size: 0.75rem;"><?php $count = WC()->cart->get_cart_contents_count(); $count = isset($count) ? $count : 0; echo $count; ?></span>
    </span>
    </a>
