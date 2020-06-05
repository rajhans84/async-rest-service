<?php
class PurchaseOrderProduct
{
    public $id; //String
    public $uuid; //String
    public $purchase_order_id; //String
    public $customer_id; //String
    public $product_id; //String
    public $unit_quantity_confirmed; //array( undefined )
    public $unit_quantity_initial; //String
    public $unit_quantity_onhand; //String
    public $unit_quantity_free; //String
    public $expiry_date; //Date
    public $product_unit_of_measure_id; //String
    public $product_status_id; //String
    public $parent_id; //array( undefined )
    public $date_created; //Date
    public $last_modified; //Date
    public $version; //String
    public $arrival_date; //Date
    public $date_allocated; //array( undefined )
    public $original_date_allocated; //array( undefined )
    public $date_depleted; //array( undefined )
    public $product_type_id; //String
    public $warehouse_id; //String
    public $send_warn_email; //String
    public $product_packaging_id; //String
    public $warehouse_location_id; //array( undefined )
    public $charge_new_storage; //String
    public $warehouse_location_capacity_id; //array( undefined )
    public $warehouse_location_pick_efficiency_id; //array( undefined )
    public $purchase_order_history_status_id; //String
    public $pallet_id; //String
    public $custom_field_1; //String
    public $custom_field_2; //String
    public $custom_field_3; //String
    public $confirmed; //boolean
    public $adjustment; //String
    public $labels_printed; //String
    public $custom_field_4; //String
    public $custom_field_5; //String
    public $custom_field_6; //String
    public $custom_field_7; //String
    public $custom_field_8; //String
    public $custom_field_9; //String
    public $custom_field_10; //String
    public $pallet_rental_applies; //boolean
    public $Product; //Product
    public $ProductPackaging; //ProductPackaging
    public $WarehouseLocation; //array( undefined )
    public $unit_quantity_packed; //String
    public $product_storage_charge_method; //String
    public $scale_msg; //String
    public $pallet_qty; //int
    public $pallet_qty_name; //String
    public $undercharging_storage; //boolean
    public $location_already_used; //boolean
    public $custom_fields; //array( undefined )
    public $additional_info; //String
}
