var win = null,
	scroll = 'yes',
	pos = 'center',
	w = 500,
	h = 400
	myname = 'template_window';
	
function share(mypage) {
    if (pos == "random") {
        LeftPosition = (screen.width) ? Math.floor(Math.random() * (screen.width - w)) : 100;
        TopPosition = (screen.height) ? Math.floor(Math.random() * ((screen.height - h) - 75)) : 100;
    }
    if (pos == "center") {
        LeftPosition = (screen.width) ? (screen.width - w) / 2 : 100;
        TopPosition = (screen.height) ? (screen.height - h) / 2 : 100;
    } else if ((pos != "center" && pos != "random") || pos == null) {
        LeftPosition = 0;
        TopPosition = 20
    }
    settings = 'width=' + w + ',height=' + h + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no';
    win = window.open(mypage, myname, settings);
};

// DOM Ready
$(function() {
	
	// Share button states
	$('.share-reaction-icon.start').click(function(){
		$(this).toggleClass('on');
		return false;
	})
	
	// Tag tooltips
	$('.tags .tag').tooltip({
		title:'Add tag to filters'
	});
/*
	$('.share-reaction-icon.star').tooltip({
		placement:'right'
	})	
*/
	// Mobile menu
	$('#mobile-header-menu').click(function(){
		if(!$(this).hasClass('active')){
			// Fix body width
			$('.hide-overflow').css({
				'width':window.innerWidth,
				'height':window.innerHeight
			}).addClass('active')
			$('.ajaxtags-container').css({
				'height':window.innerHeight-parseInt($('.ajaxtags-container h3').css('height'))
			})
			// Animate header and body
			$('.wrapper').animate({
				marginLeft:'80%'
			},250);
			$('#mobile-header').animate({
				left:'80%'
			},250);
			$(this).addClass('active');
		} else {
			$('.wrapper').animate({
				marginLeft:'0'
			},250,function(){
				// Remove fixed body width
				$('.hide-overflow').removeClass('active');
			});
			$('#mobile-header').animate({
				left:'0'
			},250);
			$(this).removeClass('active');
		}
		return false;
	});
	// Mobile menu orientation change
	$(window).on('orientationchange',function(){
		if($('.hide-overflow').hasClass('active')){
			// Animate header and body
			$('.wrapper').animate({
				marginLeft:'80%'
			},250);
			$('#mobile-header').animate({
				left:'80%'
			},250);
			$('.hide-overflow').css({
				'width':$('body').width(),
				'height':window.innerHeight
			});
		}
	})
	
	// YouTube video resize
	var $allVideos = $("iframe[src^='//www.youtube.com']"),
	    // The element that is fluid width
	    $fluidEl = $("#loop");
	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

	$(this)
		.data('aspectRatio', this.height / this.width)
		// and remove the hard coded width/height
		.removeAttr('height')
		.removeAttr('width');
	});
	// When the window is resized
	$(window).resize(function() {
		var newWidth = $fluidEl.width();
		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {
			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));
		});
	// Kick off one resize to fix all videos on page load
	}).resize();
	
	
	/* *********************** SHARING *************************** */
	//add sharing to item
	function addSharing(id,link,title,description) {
		var ua = new gigya.socialize.UserAction();
		ua.setLinkBack(link); 
		ua.setTitle(title);
		ua.setDescription(description);

		var params = { 
			userAction:ua,
			noButtonBorders:true,
			showCounts:'none',
			iconsOnly:true,
			layout: 'vertical',
			shareButtons:
			[
				{
					provider:'facebook',
					tooltip:'Share this on Facebook',
					action:'share',
					iconImgUp:'http://beta.images.theglobeandmail.com/static/ROB/interactives/crisis/images/fb20.png',
					iconImgOver:'http://beta.images.theglobeandmail.com/static/ROB/interactives/crisis/images/fb20over.png'
				},
				{
					provider:'twitter',
					tooltip:'Share this on Twitter',
					iconImgUp:'http://beta.images.theglobeandmail.com/static/ROB/interactives/crisis/images/tw20.png',
					iconImgOver:'http://beta.images.theglobeandmail.com/static/ROB/interactives/crisis/images/tw20over.png'
				}			        
			],
			containerID: id,
		    cid:''
		};

		gigya.socialize.showShareBarUI(params);
	}
	
	$('body,html').on('click','.gig-button-container .tw a',function(){
		var shareUrl = $(this).attr('href');
		share(shareUrl);
		return false;
	});
	
	$('body,html').on('click','.gig-button-container .fb a',function(){
		var shareUrl = $(this).attr('href');
		share(shareUrl);
		return false;
	});
	
	$('body,html').on('click','.gig-button-container .email a',function(){
		
	});

});