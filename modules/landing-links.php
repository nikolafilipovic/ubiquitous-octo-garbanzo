<?php

class toc_landing_links extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Lading Page Links', 'et_builder' );
		$this->plural     = esc_html__( 'Lading Page Links', 'et_builder' );
		$this->slug       = 'et_pb_toc_landing_links';
		$this->vb_support = 'off';
    }

	public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}

	function render() {
		$output = sprintf(
            '<div class="landing-links"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-link">
                            <a href="#"><h1>Search homes for sale</h1><i class="fas fa-arrow-right"></i></a>
                            <p>Homes updated every 2 minutes. See every home on the market.</p>      
                            <div class="separator"></div>                      
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-link">
                            <a href="#"><h1>Search foreclosures</h1><i class="fas fa-arrow-right"></i></a>
                            <p>Make offers with just a click. Get new property and price change alerts.</p>      
                            <div class="separator"></div>                      
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-link">
                            <a href="#"><h1>Talk to a local pro</h1><i class="fas fa-arrow-right"></i></a>
                            <p>Local experts to answer questions immediately online.</p>     
                            <div class="separator"></div>                       
                        </div>
                    </div>
                </div>
			</div>'
		);
		return $output;
	}
}

new toc_landing_links;
