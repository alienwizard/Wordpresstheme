require.config({
	"baseUrl": "wp-content/themes/Marknad/js",
	"paths": {
		"jquery": "vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
