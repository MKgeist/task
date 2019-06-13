(function($, window) {
	$(function() {
  	
    // ここに処理を書きます
  $(window).ready( function() {
    $('#sarch').jpostal({
    click:'#sarch',
        postcode : [
            '#zip1'

        ],

        address : {
            '#pref'  : '%3',
            '#city'  : '%4',
            '#street'  : '%5'
        }
    });
  });
 });

})(jQuery, window);
