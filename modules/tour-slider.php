<?php

class toc_virtual_tour_slider extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Virtual Tour Slider', 'et_builder' );
		$this->plural     = esc_html__( 'Virtual Tour Sliders', 'et_builder' );
		$this->slug       = 'et_pb_toc_virtual_tour_slider';
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
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
                                </div>
                                <div class="property-item" style="background: url(https://via.placeholder.com/388x259)">
                                    <div style="height: 200px;"></div>
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

new toc_virtual_tour_slider;