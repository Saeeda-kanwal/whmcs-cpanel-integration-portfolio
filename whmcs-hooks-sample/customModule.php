<?php
// WHMCS Hook: Send SMS on Order Completion

use WHMCS\Database\Capsule;

add_hook('AfterShoppingCartCheckout', 1, function($vars) {
    $userId = $vars['userid'];
    $orderId = $vars['orderid'];
    // Example: send SMS (integration with API like Twilio)
    // sendSMS($userId, "Thank you for your order #{$orderId}!");
});
