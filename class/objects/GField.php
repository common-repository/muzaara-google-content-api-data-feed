<?php 
namespace Muzaara\ProductFeed\Object;

class GField {
    protected $slug, $description, $schema, $group;

    public function __construct(\StdClass $field) {
        if ( !empty( $field->slug ) ) {
            $this->slug = $field->slug;
            $this->description = (!empty($field->description) ? $field->description : "" );
            $this->schema = (!empty($field->schema) ? $field->schema : "" );
            $this->group = (!empty($field->group) ? $field->group : "" );
        }
    }

    public function getSlug() : string {
        return apply_filters( "muzaara_woopf_get_gfield_slug", $this->slug, $this );
    }

    public function getName() : string {
        $name = str_replace( "_", " ", $this->slug );
        $name = str_replace( "min", __( "Minimum", "muzaara-woopf" ), $name );
        $name = str_replace( "max", __( "Maxium", "muzaara-woopf" ), $name );
        $name = trim( $name );

        return apply_filters( "muzaara_woopf_get_gfield_name", ucwords($name), $this );
    }

    public function getGroup() : string {
        return apply_filters( "muzaara_woopf_get_gfield_group", $this->group, $this );
    }

    public function getGroupName() : string {
        $ret = "";

        switch( $this->group ) {
            case "basic":
                $ret = __( "Basic product data", "muzaara-woopf" );
            break;
            case "price":
                $ret = __( "Price & availability", "muzaara-woopf" );
            break;
            case "category":
                $ret = __( "Product category", "muzaara-woopf" );
            break;
            case "identifiers":
                $ret = __( "Product identifiers", "muzaara-woopf" );
            break;
            case "product_description":
                $ret = __( "Detailed product description", "muzaara-woopf" );
            break;
            case "shopping_campaigns":
                $ret = __( "Shopping campaigns and other configurations", "muzaara-woopf" );
            break;
            case "destinations":
                $ret = __( "Destinations", "muzaara-woopf" );
            break;
            case "shipping":
                $ret = __( "Shipping", "muzaara-woopf" );
            break;
            case "tax":
                $ret = __( "Tax", "muzaara-woopf" );
            break;
            default:
                $ret = "";
        }
        
        return $ret;
    }
}