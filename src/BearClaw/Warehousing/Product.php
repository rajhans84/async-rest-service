<?php
namespace BearClaw\Warehousing;

class Product
{
    public $id; //String
    public $uuid; //String
    public $customer_id; //String
    public $customer_code; //String
    public $name; //Date
    public $description; //String
    public $product_type_id; //String
    public $product_unit_of_measure_id; //String
    public $product_group_id; //array( undefined )
    public $warning_threshold_days; //String
    public $expiry_threshold_days; //String
    public $product_packaging_id; //String
    public $require_weight; //String
    public $active; //boolean
    public $warehouse_ids; //String
    public $product_unit_of_measure_category_id; //String
    public $created; //Date
    public $modified; //Date
    public $custom_field_1; //array( undefined )
    public $custom_field_2; //array( undefined )
    public $custom_field_3; //array( undefined )
    public $low_stock_threshold; //array( undefined )
    public $low_stock_notification_enable; //String
    public $low_stock_bitmask; //String
    public $storage_charge_method_id; //String
    public $per_item_storage_charge; //String
    public $volume; //String
    public $weight; //String
    public $allow_zero_storage_charge; //String
    public $custom_field_4; //array( undefined )
    public $custom_field_5; //array( undefined )
    public $custom_field_6; //array( undefined )
    public $custom_field_7; //array( undefined )
    public $custom_field_8; //array( undefined )
    public $custom_field_9; //array( undefined )
    public $custom_field_10; //array( undefined )
    public $pop_expiry_date_required; //String
    public $pop_custom_field_disable_bitmask; //String
    public $pop_custom_field_optional_bitmask; //String
    public $pop_custom_field_require_bitmask; //String
    public $pop_custom_field_require_on_outgoing_bitmask; //String
    public $stock_selection_method_id; //String
    public $pop_initial_status_id; //String
    public $stock_sub_selection_method; //String
    public $strict_stock_selection; //String
    public $Derived; //Derived
    public function getFormula()
    {

    }
}
