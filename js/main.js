var Anchor = {
	init: function() {
		Anchor.slidey = $('.slidey');
		Anchor.keys = [];

		//  Uh, bind to the resizing of the window?
		$(window).resize(Anchor.bindResize).trigger('resize');

		// Re-/Set keys
		$(window).on('keyup', Anchor.keyup);
		$(window).on('keydown', Anchor.keydown);

		//  Set up the toggle link
		Anchor.linky = $('.linky').on('click', Anchor.toggleSlidey);

		//  Hide the thingymabob
		setTimeout(function() {
			//  Set up the slidey panel
			Anchor.hideSlidey();

			$('body').addClass('js-enabled');
		}, 10);

		//  Listen for search link
		$('a[href="#search"]').click(function() {
			if(!Anchor.linky.hasClass('active')) {
				return Anchor.toggleSlidey.call(Anchor.linky);
			}
		});
	},

	keyup: function(event) {
		Anchor.keys[event.keyCode] = false;
	},

	keydown: function(event) {
		Anchor.keys[event.keyCode] = true;

		// ctrl + shift + f => show Slidey and/or focus search bar
		if(Anchor.keys[17] && Anchor.keys[16] && Anchor.keys[70]) {
			event.preventDefault();

			Anchor.showSlidey.call(Anchor.linky);
			$('input[type="search"]').focus();
		}

		// esc => hide Slidey
		if(Anchor.keys[27]) {
			event.preventDefault();

			Anchor.hideSlidey();
			$('input[type="search"]').blur();
		}
	},

	hideSlidey: function() {
		Anchor.slidey.css('margin-top', this._slideyHeight);
		Anchor.linky && Anchor.linky.removeClass('active');

		return this;
	},

	showSlidey: function() {
		Anchor.slidey.css('margin-top', 0);
		Anchor.linky && Anchor.linky.addClass('active');

		return this;
	},

	toggleSlidey: function() {
		var self = Anchor;
		var me = $(this);

		me.toggleClass('active');
		self.slidey.css('margin-top', me.hasClass('active') ? 0 : self._slideyHeight);

		return false;
	},

	bindResize: function() {
		Anchor._slideyHeight = -(Anchor.slidey.height() + 1);
		Anchor.hideSlidey();
	}
};

// and bind loading
$(Anchor.init);

// scroll to section
$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing', function () {
            window.location.hash = target;
        });
    });
});

// disqus
var disqus_shortname = 'denzildoyleme';

(function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();

// facebook
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1456879947883169&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// twitter
!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){
        js=d.createElement(s);js.id=id;
        js.src="https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js,fjs);
    }
}(document,"script","twitter-wjs");

//animation
$(function() {
    $('#about-me').addClass('animated fadeInUp');
    $('#skills').addClass('animated fadeInDown');
    $('#article-heading').addClass('animated fadeInUp');
});


$(function() {
	var i = 2;
	//get instagram photos from my account
	var userFeed = new Instafeed({
	    get: 'user',
	    userId: 14494070,
	    accessToken: '14494070.467ede5.d689abdddf494b5a8525d7e6f020a668',
	    template: '<a href="{{link}}" class="col-md-2 col-xs-6"><img src="{{image}}" /></a>',
	    limit: 6,
	    resolution: 'standard_resolution'
	});
	userFeed.run();
});

angular.module('myApp', []);

function FeedCtrl($scope, $timeout,$http) {
    // set default message here
    // $scope.data = "";

    var feed = function() {
		$http.get('https://twitter-web-service.azurewebsites.net/twitter').
		  success(function(data) {
		    $scope.tweet = data;
		  }).
		  error(function(data, status, headers, config) {
		  	//
		});
		$timeout(feed, 30000);
    }

    $timeout(feed, 1000);
}
