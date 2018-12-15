<?php

class toc_property_slider extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Property Slider', 'et_builder' );
		$this->plural     = esc_html__( 'Property Sliders', 'et_builder' );
		$this->slug       = 'et_pb_toc_property_slider';
		$this->vb_support = 'off';
	}

	public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}

	function render() {
        $url = "http://portal.theoffercompany.com/api/getLatestProperties.php";
        $json_data = file_get_contents($url);
        $properties = json_decode($json_data,true);
        $str = "";
        foreach($properties as $key => $property):
            $images[$key] = $property['images'][0];
            $lp = number_format($property['listPrice'],0);
            $add = $property['address_full'];
            $bds = $property['property_bedrooms'];
            $baths = $property['property_bathrooms'];
            $property_lotSizeArea = $property['property_lotSizeArea'];
            $property_id = $property['id'];
            $state = $property['address_state'];
            $zip = $property['address_postalCode'];
            $url = str_replace(" ", "_", $add);
            $url = $url.'_'.$state.'_'.$zip;
            $str .= "
                <div class='property-item' style='background: url($images[$key]); background-size:cover;' data-index='$property_id' data-url='$url'>
                                    <span class='time-on-market'>5 days on the market</span>
                                    <span class='sale-type'>House for Sale</span>
                                    <h1 class='property-price'>$$lp </h1>
                                    <div class='property-info'><span class='beds'>$bds bds</span><i class='fas fa-circle'></i><span class='baths'>$baths ba</span><i class='fas fa-circle'></i><span class='sqft'>$property_lotSizeArea sqft</span></div>
                                    <span class='property-address'>$add</span>    
                                </div>
            ";
        endforeach;
		$output = sprintf(
            '<div class="property-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="owl-carousel owl-carousel-landing">
                                '.$str.'
                            </div>
                        </div>
                    </div>
                </div>
			</div>'
		);
		return $output;
	}
}

new toc_property_slider;