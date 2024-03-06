import { __ } from '@wordpress/i18n';
import NiceSelect from '../../../../../node_modules/nice-select2/dist/js/nice-select2.js';

const dropdown = () => {
	function init() {
		Array.from( document.querySelectorAll( '.wpo-field-dropdown select' ) ).forEach( ( select ) => {
			new NiceSelect( select, { placeholder: __( 'Select an option', 'woocommerce-product-options' ) } );
		} );
	}

	return { init };
};

export default dropdown();
