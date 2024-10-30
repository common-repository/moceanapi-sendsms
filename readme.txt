=== MoceanAPI SendSMS===
Contributors: moceanapiplugin
Tags: MoceanAPI, Send SMS, mocean, messaging, sms, broadcasting
Requires at least: 3.8
Tested up to: 6.0
Stable tag: 1.4.11

A plugin to send SMS notification to your wordpress users

== Description ==

Telling your users about new promotion throught sms is so easy. Just register and compose your message.

Try for FREE. 20 trial SMS credits will be given upon [registration](https://dashboard.moceanapi.com/register?fr=wordpress_sms). Additional SMS credits can be requested and is subject to approval by MoceanAPI.

Features:
*   Send SMS to your users
*   Send SMS to your specific numbers
*   Free support
*   Integrated with your favourite Booking, Reservation, Membership plugins
*   WooCommerce integration included
*   Notify seller whenever a new order is placed.
*	Inform buyer the current order status / whenever order status is changed.
*	All WooCommerce order statuses are supported.
*	SMS content can be customized for different order status.
*	These tags are supported to customize message: [shop_name], [order_id], [order_amount], [order_status], [order_product], [payment_method], [bank_details], [billing_first_name], [billing_last_name], [billing_phone], [billing_email], [billing_company], [billing_address], [billing_country], [billing_city], [billing_state], [billing_postcode]
*   Custom checkout field added from Woo Checkout Field Editor Pro is supported.
*   Notify vendor whenever there's new order
*   Notify vendor when sub order status changed
*   Notify Admin when product stock is low

Supported Third Party Multivendor Plugin:

*   [Woocommerce Product Vendors](https://woocommerce.com/products/product-vendors/)
*   [MultivendorX formerly WC Marketplace](https://wordpress.org/plugins/dc-woocommerce-multi-vendor/)
*   [WC Vendors Marketplace](https://wordpress.org/plugins/wc-vendors/)
*   [WooCommerce Multivendor Marketplace (WCFM Marketplace)](https://wordpress.org/plugins/wc-multivendor-marketplace/)
*   [Dokan](https://wordpress.org/plugins/dokan-lite/)
*   [YITH WooCommerce Multi Vendor](https://wordpress.org/plugins/yith-woocommerce-product-vendors/)
*   Send SMS to vendors when their order status changed

Supported Third Party Reservation / Booking / Appointment Plugin:

[Five Star Restaurant Reservations – WordPress Booking Plugin](https://wordpress.org/plugins/restaurant-reservations/)
*   Reservation is pending
*   Reservation is confirmed
*   Reservation is closed
[Booking Calendar | Appointment Booking | BookIt](https://wordpress.org/plugins/bookit/)
*   An appointment is approved
*   An appointment is pending
*   An appointment is cancelled
[Quick Restaurant Reservations](https://wordpress.org/plugins/quick-restaurant-reservations/)
*   Reservation is pending
*   Reservation is confirmed
*   Reservation is rejected
*   Reservation is cancelled
[LatePoint - Appointment Booking & Reservation](https://codecanyon.net/item/latepoint-appointment-booking-reservation-plugin-for-wordpress/22792692)
*   An appointment is approved
*   An appointment is pending approval
*   An appointment is pending payment
*   An appointment is cancelled
[FAT Service Booking](https://codecanyon.net/item/fat-services-booking-automated-booking-and-online-scheduling/24214247)
*   An appointment is cancelled
*   An appointment is approved
*   An appointment is pending
*   An appointment is rejected

Supported Third Party Membership Plugin:

[ARMember – Membership Plugin](https://wordpress.org/plugins/armember-membership/)
*   In ARMember, you can Send SMS notifications when:
*   User's subscription cancelled
*   User's membership plan changed
*   User's plan renewed
[MemberMouse](https://membermouse.com/)
*   Member's membership changed
*   Member's status changed
*   Bundles are added to member
*   Bundles status changed
*   Payment received
*   Payment rebill
*   Payment rebill declined
*   Refunds issued
[MemberPress](https://memberpress.com/)
*   Transaction completed
*   Transaction expired
*   Transaction pending
*   Transaction failed
*   Transaction refunded
*   Subscription paused
*   Subscription resumed
*   Subscription stopped
[S2Members](https://wordpress.org/plugins/s2member/)
*   In S2Members, you can send SMS notifications when:
*   There's new subscription
*   Payment received
*   Payment modification
*   End of term or expired
*   Refunds or reversal
[Simple Membership](https://wordpress.org/plugins/simple-membership)
*   In Simple Membership plugin, you can send SMS notification when:
*   Member's membership is cancelled or expired
*   Member's recurring payment is successful

Supported Third Party CRM Plugin:

[Jetpack CRM](https://wordpress.org/plugins/zero-bs-crm/)
*   In Jetpack CRM, you can Send SMS notifications when:
*   There's a new contact with status "Customer"
*   There's a new contact with status "Lead"
*   There's a new contact with status "Refused"
*   There's a new contact with status "Blacklisted"
[Groundhogg CRM](https://wordpress.org/plugins/groundhogg/)
*   In Groundhogg CRM, you can Send SMS notifications when:
*   A contact status changed to confirmed
*   A contact status changed to unconfirmed
*   A contact status changed to unsubscribed
[Fluent CRM](https://wordpress.org/plugins/fluent-crm/)
*   In Fluent CRM, you can Send SMS notifications when:
*   A contact status changed to subscribed
*   A contact status changed to unsubscribed
*   A contact status changed to pending
[WP ERP CRM](https://wordpress.org/plugins/erp/)
*   In WP ERP CRM, you can Send SMS notifications when:
*   There's a new contact with status "Customer"
*   There's a new contact with status "Lead"
*   There's a new contact with status "Opportunity"
*   There's a new contact with status "Subscriber"

Compatibility:

*   [Custom Order Status for WooCommerce](https://wordpress.org/plugins/custom-order-statuses-woocommerce/)
*   [Custom Order Statuses for WooCommerce](https://wordpress.org/plugins/custom-order-statuses-for-woocommerce/)
*   [Ni WooCommerce Custom Order Status](https://wordpress.org/plugins/ni-woocommerce-custom-order-status/)
*   [Ultimate Member – User Profile, User Registration, Login & Membership Plugin](https://wordpress.org/plugins/ultimate-member/)
*   Send SMS to users filtered by UM Status
*   [Members – Membership & User Role Editor Plugin](https://wordpress.org/plugins/members/)
*   Send SMS to users filtered by Roles
*   [Paid Memberships Pro](https://wordpress.org/plugins/paid-memberships-pro/)
*   Send SMS to users filtered by Membership Level

== Installation ==

Search for "MoceanApi SendSMS" in "Add Plugin" page and activate it.

= Have questions? =

If you have any questions, you can contact our support at support@moceanapi.com

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 1.4.11 =
* Added new keyword [order_cust_latest_note]
* order_latest_cust_note will display the latest customer note (public) from WooCommerce order in SMS content.

= 1.4.10 =
* Added option to send to shipping recipient

= 1.4.9 =
* Added auto select default country based on IP

= 1.4.8 =
=   - Added validation for sender id

= 1.4.4 =
*    - Minor bug fix for WP footer displaying at wrong position

= 1.4.3 =
*    - Added support for AR Member Premium

= 1.4.2 =
*    - Added a minor log for debugging purpose

= 1.4.1 =
*    - Keyword modal clicked but no UI displayed and Woocommerce Multivendor Marketplace automations are working
*    - Removed a log line
*    - Added XSS sanitization in Customer Logs
*    - Combined log file into 1 (MoceanAPI_Multivendor into MoceanAPI)

= 1.4.0 =
*     - Supports WooCommerce custom order status

= 1.3.5 =
*     - Changed mocean-medium to follow fr link in registration page

= 1.3.4 =
*     - Added Freemius integration and yandex analytics

= 1.3.3 =
*     - Updated readme

= 1.3.2 =
* New - Added integration for new membership plugin
*     - In Simple Membership plugin, you can send SMS notification when:
*     - Member's membership is cancelled or expired
*     - Member's recurring payment is successful

= 1.3.0 =
* New - Added integrations for CRM plugins
*     In Jetpack CRM, you can Send SMS notifications when:
*     - There's a new contact with status "Customer"
*     - There's a new contact with status "Lead"
*     - There's a new contact with status "Refused"
*     - There's a new contact with status "Blacklisted"
*     In Fluent CRM, you can Send SMS notifications when:
*     - A contact status changed to subscribed
*     - A contact status changed to unsubscribed
*     - A contact status changed to pending
*     In Groundhogg CRM, you can Send SMS notifications when:
*     - A contact status changed to confirmed
*     - A contact status changed to unconfirmed
*     - A contact status changed to unsubscribed
*     In WP ERP CRM, you can Send SMS notifications when:
*     - There's a new contact with status "Customer"
*     - There's a new contact with status "Lead"
*     - There's a new contact with status "Opportunity"
*     - There's a new contact with status "Subscriber"

= 1.2.0 =
*     - Send SMS to:
* New - specific group of people (filter based on roles & country)
* New - Automatically send sms to user when an event is triggered (eg: a reservation is confirmed)
*     - In ARMember, you can Send SMS notifications when:
*     - User's subscription cancelled
*     - User's membership plan changed
*     - User's plan renewed
* New In BookIt, you can Send SMS notifications when:
*     - An appointment is approved
*     - An appointment is pending
*     - An appointment is cancelled
* New In FAT Service Appointment, you can send SMS notification when:
*     - An appointment is cancelled
*     - An appointment is approved
*     - An appointment is pending
*     - An appointment is rejected
* New In LatePoint Appointment Booking & Reservation, you can send SMS notifications when:
*     - An appointment is approved
*     - An appointment is pending approval
*     - An appointment is pending payment
*     - An appointment is cancelled
* New In MemberMouse, you can send SMS notifications when:
*     - Member's membership changed
*     - Member's status changed
*     - Bundles are added to member
*     - Bundles status changed
*     - Payment received
*     - Payment rebill
*     - Payment rebill declined
*     - Refunds issued
* New In MemberPress, you can send SMS notifications when:
*     - Transaction completed
*     - Transaction expired
*     - Transaction pending
*     - Transaction failed
*     - Transaction refunded
*     - Subscription paused
*     - Subscription resumed
*     - Subscription stopped
* New In Quick Restaurant Reservation, you can send SMS notifications when:
*     - Reservation is pending
*     - Reservation is confirmed
*     - Reservation is rejected
*     - Reservation is cancelled
* New In Five Star Restaurant Reservation, you can send SMS notifications when:
*     - Reservation is pending
*     - Reservation is confirmed
*     - Reservation is closed
* New In S2Member, you can send SMS notifications when:
*     - There's new subscription
*     - Payment received
*     - Payment modification
*     - End of term or expired
*     - Refunds or reversal
* New - Send SMS Reminders before reservation date or membership expiry date
*     - Improved UI/UX

= 1.1.1 =
* Fix - Fatal error showing when send sms to specific user

= 1.1.0 =
* Fix - plugin activation error
* Fix - Sub tab page not loaded
* Fix - jQuery bug for wordpress version 5.6

= 1.0.0 =
* Initial version released