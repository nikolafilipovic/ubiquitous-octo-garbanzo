<?php

class toc_landing_search extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Lading Page Search', 'et_builder' );
		$this->plural     = esc_html__( 'Lading Page Search', 'et_builder' );
		$this->slug       = 'et_pb_toc_landing_search';
		$this->vb_support = 'off';
	}

	public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}

	function render() {
		$output = sprintf(
			'
			
			<div class="landing-search">
                <div class="search-choice">
                    <span class="buy active">Buy</span><span class="sell">Sell</span><span class="estimate">Estimate</span>
                </div>
                <div class="search-field search-desktop-field">
					<div class="input-group buy" id="input-group">
						<input type="text" class="form-control" id="landing-search" placeholder="Enter addresss, neighborhood, city or zip...">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="far fa-search" id="search-button"></i></div>
						</div>
						<br>
						<div id="home_search_dropdown">
			              <div class="section">
			                <div class="header">Addresses</div>
			                <div class="items"></div>
			              </div>
			            </div>
					</div>

                </div>
			</div>'
		);
		
		return $output;
	}
}

new toc_landing_search;
