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
		$output = sprintf(
            '<div class="property-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="owl-carousel">
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-3.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-1.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-2.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
                                <div class="property-item" style="background: url(/wp-content/themes/theoffercompany/images/property-3.png)">
                                    <span class="time-on-market">5 days on the market</span>
                                    <span class="sale-type">House for Sale</span>
                                    <h1 class="property-price">$425,000</h1>
                                    <div class="property-info"><span class="beds">3 bds</span><i class="fas fa-circle"></i><span class="baths">2 ba</span><i class="fas fa-circle"></i><span class="sqft">1,209 sqft</span></div>
                                    <span class="property-address">4549 E Cheyenne Dr, Phoenix, AZ</span>    
                                </div>
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