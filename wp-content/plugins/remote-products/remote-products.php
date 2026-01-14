<?php
/**
 * Plugin Name: Remote Products Loader (POST)
 * Description: Loads products from a remote REST API using POST request.
 * Version: 1.0.0
 * Requires at least: 6.8
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Fetch products via POST request
 */
function rpl_fetch_remote_products()
{
    $api_url = 'https://pkjshop.in/api/customer/v1/react/guest_view_products?page=1';

    $payload = [
        'page'      => 1,
        'per_page'     => 10,
        'id'  => 877
    ];

    $response = wp_remote_post($api_url, [
        'timeout' => 15,
        'headers' => [
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
            // 'Authorization' => 'Bearer YOUR_API_TOKEN',
        ],
        'body' => wp_json_encode($payload),
    ]);

    if (is_wp_error($response)) {
        return [];
    }

    $status_code = wp_remote_retrieve_response_code($response);
    if ($status_code !== 200) {
        return [];
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    return is_array($data) ? $data : [];
}

/**
 * Shortcode: [remote_products]
 */
function rpl_remote_products_shortcode()
{
    $products = rpl_fetch_remote_products();

    if (empty($products)) {
        return '<p>No products available.</p>';
    }

    ob_start();
    ?>
    <div class="rpl-products" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:20px;">
        <?php foreach ($products['products'] as $product): ?>
            <div class="rpl-product" style="border:1px solid #ddd;padding:15px;border-radius:6px;">
                <?php if (!empty($product['thumb'])): ?>
                    <img src="<?php echo ('https://pkjshop.in/public/'.$product['thumb']); ?>"
                         style="max-width:100%;height:150px;object-fit:contain;">
                <?php endif; ?>

                <h4><?php echo esc_html($product['product_name'] ?? ''); ?></h4>

                <p><?php echo esc_html(wp_trim_words($product['product_details'] ?? '', 15)); ?></p>

                <strong>₹<?php echo esc_html($product['new_price'] ?? ''); ?></strong>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('remote_products', 'rpl_remote_products_shortcode');
