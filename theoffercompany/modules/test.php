<?php

class toc_test_module extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Test Module', 'et_builder' );
		$this->plural     = esc_html__( 'Test Modules', 'et_builder' );
		$this->slug       = 'et_pb_toc_test_module';
		$this->vb_support = 'on';
	}

	public function get_advanced_fields_config() {
		return array(
			'background' => false,
		);
	}

	function render() {
		$output = sprintf(
			'<div class="toc_test">
                <h1>Testing Divi custom module, success! Hello!</h1>
			</div>'
		);

		return $output;
	}
}

new toc_test_module;
