window.bingo = window.bingo || {};
bingo.cacheSelectors = function () {
  	bingo.cache = {
	    $html                    : $('html'),
	    $body                    : $('body')
  	};
};
bingo.init = function () {
	
};

$(document).ready(function() {
	$(bingo.init);
});