DELETE FROM cs_address;
DELETE FROM cs_category;
DELETE FROM cs_category_description;
DELETE FROM cs_category_to_store;
DELETE FROM cs_coupon;
DELETE FROM cs_customer;
DELETE FROM cs_download;
DELETE FROM cs_download_description;
DELETE FROM cs_manufacturer;
DELETE FROM cs_manufacturer_to_store;
DELETE FROM cs_product;
DELETE FROM cs_product_description;
DELETE FROM cs_product_discount;
DELETE FROM cs_product_featured;
DELETE FROM cs_product_image;
DELETE FROM cs_product_option;
DELETE FROM cs_product_option_description;
DELETE FROM cs_product_option_value;
DELETE FROM cs_product_option_value_description;
DELETE FROM cs_product_related;
DELETE FROM cs_product_special;
DELETE FROM cs_product_to_download;
DELETE FROM cs_product_to_store;
DELETE FROM cs_review;
DELETE FROM cs_store;
DELETE FROM cs_store_description;
DELETE FROM cs_product_tags;
DELETE FROM cs_order;
DELETE FROM cs_order_download;
DELETE FROM cs_order_history;
DELETE FROM cs_order_option;
DELETE FROM cs_order_product;
DELETE FROM cs_order_status;
DELETE FROM cs_order_total;
DELETE FROM cs_product_to_category;
DELETE FROM cs_coupon_description;
DELETE FROM cs_coupon_product;
DELETE FROM cs_extension WHERE type='module' AND ( code='slideshow' OR code='carousel' OR code='featured' );