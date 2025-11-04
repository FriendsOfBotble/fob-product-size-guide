/**
 * Size Guide Frontend - Product Page
 */

(function($) {
    'use strict';

    const SizeGuideFrontend = {
        init: function() {
            // Initialize Bootstrap modal if exists
            if ($('#sizeGuideModal').length && typeof bootstrap !== 'undefined') {
                // Modal is automatically initialized by Bootstrap 5
                console.log('Size Guide modal ready');
            }
        }
    };

    $(document).ready(function() {
        if ($('#product-size-guide').length) {
            SizeGuideFrontend.init();
        }
    });

})(jQuery);
