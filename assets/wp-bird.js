(function($) {
	TogetherJSConfig_on = {
	  	ready: function () {
		  	$("#start-togetherjs").text("End TogetherJS").removeClass("togetherjs-close").addClass("togetherjs-ready");
		  	$("#wp-admin-bar-start_together_js_button").removeClass("togetherjs-close").addClass("togetherjs-ready");
		},
	  	close: function () {
		  	$("#start-togetherjs").text("Start TogetherJS").removeClass("togetherjs-ready").addClass("togetherjs-close");
		  	$("#wp-admin-bar-start_together_js_button").removeClass("togetherjs-close").addClass("togetherjs-ready");
		}
	};
    var BIRDTICK = 0;
   TogetherJSConfig_toolName = "BIRD";
   TogetherJSConfig_inviteFromRoom = true;
    TogetherJSConfig_cloneClicks = true;
    TogetherJSConfig_youtube = true;
    TogetherJS_enableAnalytics = true;
   while(TogetherJS.running){
       BIRDTICK += 1;
       console.log("BIRD" + BIRDTICK);
      }
     
})(jQuery);