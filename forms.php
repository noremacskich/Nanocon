<?php
	/**@function newTextArea($id, $Label, $innerText='')
	 * 	^ This will create a new text area
	 * 
	 * @requires jQueryUI
	 *
	 * @param $id | String
	 * 	^ This is the unique identifier for this text box
	 * 
	 * @param $Label | String
	 * 	^	This is the label for the text area
	 * 
	 * @param $innerText | String | Optional
	 * 	^	This text will appear in the textbox when first created
	 * 	D	''
	 * 
	 */
	function newTextArea($id, $Label, $innerText=''){
		 echo '<label for="' . $id . '">' . $Label . '</label>';
		 echo '<textarea name="' . $id . '" id="' . $id . '">' . $innerText . '</textarea>';
	 }
	
	/**@function newText($id, $Label, $attributes='')
	 * 
	 * @require jQueryUI
	 * 
	 * @param $id | String
	 * 	^	This is the id for the text box
	 * 
	 * @param $Label | String
	 * 	^	This is the label for the box
	 * 
	 * @param $attributes | String | Optional
	 * 	^	Where you can define additional attributes if needed
	 * 	D	''
	 */
	function newText($id, $Label, $attributes=''){
		echo '<fieldset class="ui-field-contain">';
		echo '	<label for="' . $id . '">' . $Label . '</label>';
		echo '	<input type="text" name="' . $id . '" id="' . $id . '" value="" ' . $attributes . ' data-clear-btn="true" data-mini="true">';
		echo '</fieldset>';
	}
	
	/**@function newDropDown($id, $Label, $DropdownList)
	 * 	^	This function will create a dropdown list with the
	 * 	^	given array in $DropdownList
	 * 
	 * @require jQuery Mobile
	 * 
	 * @param $id | unique String
	 * 	^	This is the id for the selectbox
	 * 
	 * @param $Label | String
	 * 	^	This is the label that will hover next to the 
	 * 	^	drop down list
	 * 
	 * @param $DropdownList | Array | [$dropID, $dropLabel]
	 * 	^	This array hold the id and label for each
	 * 	^	selection option
	 * 
	 * 	@element $dropID | String
	 * 		^	This will be the value that will be returned
	 * 		^	when the form is submitted
	 * 
	 * 	@element $dropLabel | String
	 * 		^	This is the label that will be shown when 
	 * 		^	the values are displayed
	 */
	function newDropDown($id, $label, $DropdownList){
		echo '<div class="ui-field-contain">';
		echo '	<label for="' . $id . '">'. $label . '</label>';
		echo '	<select name="' . $id . '" id="' . $id . '">';
		foreach($DropdownList as list($dropID, $dropLabel)){
			echo '<option value="' . $dropID . '">' . $dropLabel . '</option>';
		}
		echo '	</select>';
		echo '</div>';
		
	}
	
	/**@function Button($text='Button', $link='#', $Icon='')
	 * 	^	This will create a new button
	 * 
	 * @requires JqueryUI
	 * 
	 * @param $txt | String | Optional
	 * 	^	This is what the button will say
	 * 	D	"Button"
	 * 
	 * @param $link | HyperLink
	 * 	^	This is where the button will send you
	 * 	D	"#"
	 * 
	 * @param $Icon | File
	 * 	^	If you want an Icon, you put it here
	 * 	D	""
	 * 
	 * @note NoremacSkich
	 * 	^	The link needs http:// in order to function correctly
	 * 
	 */
    function Button($text='Button', $link='#', $Icon=''){		
		// Now spit it out to the website
	    echo '<a href="' . $link . '" data-role="button" '. $Icon . '>' . $text . '</a>';
	}
?>