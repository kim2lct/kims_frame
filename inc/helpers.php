<?php 
	
	// Helper for manage wp

	// combine array to be ID and TEXT
	function cmb_slider($values = []){
		$sliders = ['none'=>__('None','cmb2')];
		foreach($values as $key => $value){
			$sliders[$value->id] = __($value->title,'cmb2');
		}
		
		return $sliders;
	}

	function formatterWrapper($value,$classes,$delimiter = ':'){
		$explode = explode($delimiter,$value);
		$tags = $explode[0];
		$text = $explode[1];
		return '<'.$tags.' class="'.$classes.'">'.$text.'</'.$tags.'>';
	}