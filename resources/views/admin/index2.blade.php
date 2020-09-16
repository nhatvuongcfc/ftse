<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Không giỏi cái này, không biết cái kia thì có theo lập trình được không? | Từ coder đến developer &#8211; Tôi đi code dạo</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://toidicodedao.com/xmlrpc.php">
	<!--[if lt IE 9]>
	<script src="https://s0.wp.com/wp-content/themes/pub/twentyfourteen/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
  WebFontConfig = {"google":{"families":["Noto+Serif:b:latin,latin-ext","Noto+Sans:r,i,b,bi:latin,latin-ext"]}};
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://s0.wp.com/wp-content/plugins/custom-fonts/js/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
	})();
</script><style id="jetpack-custom-fonts-css">.wf-active .site-title{font-family:"Noto Serif",serif;font-weight:700;font-style:normal}.wf-active body{font-family:"Noto Sans",sans-serif}.wf-active body, .wf-active input, .wf-active select, .wf-active textarea{font-family:"Noto Sans",sans-serif}.wf-active #page .entry-content div.sharedaddy h3, .wf-active #page .entry-summary div.sharedaddy h3, .wf-active #page .entry-content h3.sd-title, .wf-active #page .entry-summary h3.sd-title, .wf-active #primary div.sharedaddy .jp-relatedposts-headline em, .wf-active .pd-rating{font-family:"Noto Sans",sans-serif}.wf-active h1, .wf-active h2:not(.site-description), .wf-active h3, .wf-active h4, .wf-active h5, .wf-active h6{font-family:"Noto Serif",serif;font-weight:700;font-style:normal}.wf-active h1{font-style:normal;font-weight:700}.wf-active h2:not(.site-description){font-style:normal;font-weight:700}.wf-active h3{font-style:normal;font-weight:700}.wf-active h4{font-style:normal;font-weight:700}.wf-active h5{font-style:normal;font-weight:700}.wf-active h6{font-style:normal;font-weight:700}.wf-active th{font-weight:700;font-style:normal}.wf-active .entry-title{font-weight:700;font-style:normal}</style>
<meta name="google-site-verification" content="IIcLfe7-qkLMjjIiJ2tGH-s3DwrAHYv5vpEfeUHCjeg" />
<meta name="msvalidate.01" content="5EEABCD3F6B150C261771407144FFA0C" />
<meta name="p:domain_verify" content="1a513e9468938bc0edb46508af1f41f7" />
<meta name="yandex-verification" content="17c7a106c3e83c24" />

<!-- Async WordPress.com Remote Login -->
<script id="wpcom_remote_login_js">
var wpcom_remote_login_extra_auth = '';
function wpcom_remote_login_remove_dom_node_id( element_id ) {
	var dom_node = document.getElementById( element_id );
	if ( dom_node ) { dom_node.remove(); }
}
function wpcom_remote_login_remove_dom_node_classes( class_name ) {
	var dom_nodes = document.querySelectorAll( '.' + class_name );
	for ( var i = 0; i < dom_nodes.length; i++ ) {
		dom_nodes[i].remove();
	}
}
function wpcom_remote_login_final_cleanup() {
	wpcom_remote_login_remove_dom_node_classes( "wpcom_remote_login_msg" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_key" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_validate" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_js" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_request_access_iframe" );
	wpcom_remote_login_remove_dom_node_id( "wpcom_request_access_styles" );
}

// Watch for messages back from the remote login
window.addEventListener( "message", function( e ) {
	if ( e.origin === "https://r-login.wordpress.com" ) {
		var data = {};
		try {
			data = JSON.parse( e.data );
		} catch( e ) {
			wpcom_remote_login_final_cleanup();
			return;
		}

		if ( data.msg === 'LOGIN' ) {
			// Clean up the login check iframe
			wpcom_remote_login_remove_dom_node_id( "wpcom_remote_login_key" );

			var id_regex = new RegExp( /^[0-9]+$/ );
			var token_regex = new RegExp( /^.*|.*|.*$/ );
			if (
				token_regex.test( data.token )
				&& id_regex.test( data.wpcomid )
			) {
				// We have everything we need to ask for a login
				var script = document.createElement( "script" );
				script.setAttribute( "id", "wpcom_remote_login_validate" );
				script.src = '/remote-login.php?wpcom_remote_login=validate'
					+ '&wpcomid=' + data.wpcomid
					+ '&token=' + encodeURIComponent( data.token )
					+ '&host=' + window.location.protocol
						+ '//' + window.location.hostname;
				document.body.appendChild( script );
			}

			return;
		}

		// Safari ITP, not logged in, so redirect
		if ( data.msg === 'LOGIN-REDIRECT' ) {
			window.location = 'https://wordpress.com/log-in?redirect_to=' + window.location.href;
			return;
		}

		// Safari ITP, storage access failed, remove the request
		if ( data.msg === 'LOGIN-REMOVE' ) {
			var css_zap = 'html { -webkit-transition: margin-top 1s; transition: margin-top 1s; } /* 9001 */ html { margin-top: 0 !important; } * html body { margin-top: 0 !important; } @media screen and ( max-width: 782px ) { html { margin-top: 0 !important; } * html body { margin-top: 0 !important; } }';
			var style_zap = document.createElement( 'style' );
			style_zap.type = 'text/css';
			style_zap.appendChild( document.createTextNode( css_zap ) );
			document.body.appendChild( style_zap );

			var e = document.getElementById( 'wpcom_request_access_iframe' );
			e.parentNode.removeChild( e );

			document.cookie = 'wordpress_com_login_access=denied; path=/; max-age=31536000';

			return;
		}

		// Safari ITP
		if ( data.msg === 'REQUEST_ACCESS' ) {
			console.log( 'request access: safari' );

			// Check ITP iframe enable/disable knob
			if ( wpcom_remote_login_extra_auth !== 'safari_itp_iframe' ) {
				return;
			}

			// If we are in a "private window" there is no ITP.
			var private_window = false;
			try {
				var opendb = window.openDatabase( null, null, null, null );
			} catch( e ) {
				private_window = true;
			}

			if ( private_window ) {
				console.log( 'private window' );
				return;
			}

			var iframe = document.createElement( 'iframe' );
			iframe.id = 'wpcom_request_access_iframe';
			iframe.setAttribute( 'scrolling', 'no' );
			iframe.setAttribute( 'sandbox', 'allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-top-navigation-by-user-activation' );
			iframe.src = 'https://r-login.wordpress.com/remote-login.php?wpcom_remote_login=request_access&origin=' + encodeURIComponent( data.origin ) + '&wpcomid=' + encodeURIComponent( data.wpcomid );

			var css = 'html { -webkit-transition: margin-top 1s; transition: margin-top 1s; } /* 9001 */ html { margin-top: 46px !important; } * html body { margin-top: 46px !important; } @media screen and ( max-width: 660px ) { html { margin-top: 71px !important; } * html body { margin-top: 71px !important; } #wpcom_request_access_iframe { display: block; height: 71px !important; } } #wpcom_request_access_iframe { border: 0px; height: 46px; position: fixed; top: 0; left: 0; width: 100%; min-width: 100%; z-index: 99999; background: #23282d; } ';

			var style = document.createElement( 'style' );
			style.type = 'text/css';
			style.id = 'wpcom_request_access_styles';
			style.appendChild( document.createTextNode( css ) );
			document.body.appendChild( style );

			document.body.appendChild( iframe );
		}

		if ( data.msg === 'DONE' ) {
			wpcom_remote_login_final_cleanup();
		}
	}
}, false );

// Inject the remote login iframe after the page has had a chance to load
// more critical resources
window.addEventListener( "DOMContentLoaded", function( e ) {
	var iframe = document.createElement( "iframe" );
	iframe.style.display = "none";
	iframe.setAttribute( "scrolling", "no" );
	iframe.setAttribute( "id", "wpcom_remote_login_key" );
	iframe.src = "https://r-login.wordpress.com/remote-login.php"
		+ "?wpcom_remote_login=key"
		+ "&origin=aHR0cHM6Ly90b2lkaWNvZGVkYW8uY29t"
		+ "&wpcomid=81976675"
		+ "&time=1599730701";
	document.body.appendChild( iframe );
}, false );
</script>
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//toidicodedao.wordpress.com' />
<link rel='dns-prefetch' href='//wordpress.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.pubmine.com' />
<link rel='dns-prefetch' href='//x.bidswitch.net' />
<link rel='dns-prefetch' href='//static.criteo.net' />
<link rel='dns-prefetch' href='//ib.adnxs.com' />
<link rel='dns-prefetch' href='//aax.amazon-adsystem.com' />
<link rel='dns-prefetch' href='//bidder.criteo.com' />
<link rel='dns-prefetch' href='//cas.criteo.com' />
<link rel='dns-prefetch' href='//gum.criteo.com' />
<link rel='dns-prefetch' href='//ads.pubmatic.com' />
<link rel='dns-prefetch' href='//gads.pubmatic.com' />
<link rel='dns-prefetch' href='//tpc.googlesyndication.com' />
<link rel='dns-prefetch' href='//ad.doubleclick.net' />
<link rel='dns-prefetch' href='//googleads.g.doubleclick.net' />
<link rel='dns-prefetch' href='//www.googletagservices.com' />
<link rel='dns-prefetch' href='//cdn.switchadhub.com' />
<link rel='dns-prefetch' href='//delivery.g.switchadhub.com' />
<link rel='dns-prefetch' href='//delivery.swid.switchadhub.com' />
<link rel='dns-prefetch' href='//a.teads.tv' />
<link rel='dns-prefetch' href='//prebid.media.net' />
<link rel='dns-prefetch' href='//adserver-us.adtech.advertising.com' />
<link rel='dns-prefetch' href='//fastlane.rubiconproject.com' />
<link rel='dns-prefetch' href='//prebid-server.rubiconproject.com' />
<link rel='dns-prefetch' href='//hb-api.omnitagjs.com' />
<link rel='dns-prefetch' href='//mtrx.go.sonobi.com' />
<link rel='dns-prefetch' href='//apex.go.sonobi.com' />
<link rel='dns-prefetch' href='//u.openx.net' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Từ coder đến developer - Tôi đi code dạo &raquo; Feed" href="https://toidicodedao.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Từ coder đến developer - Tôi đi code dạo &raquo; Comments Feed" href="https://toidicodedao.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Từ coder đến developer - Tôi đi code dạo &raquo; Không giỏi cái này, không biết cái kia thì có theo lập trình được không? Comments Feed" href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/feed/" />
	<script type="text/javascript">
		/* <![CDATA[ */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function () {
					oldonload();
					func();
				}
			}
		}
		/* ]]> */
	</script>
			<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/s0.wp.com\/wp-includes\/js\/wp-emoji-release.min.js?m=1596548281h&ver=5.5-wpcom-48929"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='all-css-0-1' href='https://s0.wp.com/_static/??-eJylkt1uwyAMhV9oBGVVp+Vi2rNAcBmt+RE2y/L2JWjTolSLIu0GYXw+69hGTkmMMTAElr6IhMW6QHJKY/SCvEOYN1E3Ej3JFaYx2l8wZqMMSYtRKzym5amm5kssmQGC+Hx+wFbOMqBiMCJF4k20h6G7AckrcFLjTbToQf6jtaWGGrKtmQzytRu6k9TFoVn8N1xnlWdJPCP8vwx/gD9SplGrJtQcCwubnTnsZFMiK3bB0h/4anxLB/XdJ8WLwoNxCrDaDryHTc5YqGuqku+7YPjaR9pf0zplIBL19K540UbUNvbu3/rzMJyHl1PfX+808Qii?cssminify=yes' type='text/css' media='all' />
<style id='wp-block-library-inline-css'>
.has-text-align-justify {
	text-align:justify;
}
</style>
<style id='global-styles-inline-css'>
:root {
	--wp--preset--color--green: #24890d;
	--wp--preset--color--black: #000;
	--wp--preset--color--dark-gray: #2b2b2b;
	--wp--preset--color--medium-gray: #767676;
	--wp--preset--color--light-gray: #f5f5f5;
	--wp--preset--color--white: #fff;
	--wp--preset--font-size--small: 13;
	--wp--preset--font-size--normal: 16;
	--wp--preset--font-size--medium: 20;
	--wp--preset--font-size--large: 36;
	--wp--preset--font-size--huge: 48;
	--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
	--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
	--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
	--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
	--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
	--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
	--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
	--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
	--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
	--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
	--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
	--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
}

</style>
<link rel='stylesheet' id='all-css-2-1' href='https://s0.wp.com/_static/??/wp-content/mu-plugins/comment-likes/css/comment-likes.css,/i/noticons/noticons.css?m=1436783281j&cssminify=yes' type='text/css' media='all' />
<link crossorigin="anonymous" rel='stylesheet' id='twentyfourteen-lato-css'  href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext' media='all' />
<link rel='stylesheet' id='all-css-4-1' href='https://s0.wp.com/_static/??-eJyVjcEKgCAQRH+oWqSCOkT/kmxm6SrtSvj3SacuHboNb94wcMVaBxIkAZ/q6JKxxGCQ8LSl+IiNZq7gtZUNPTLEtIBcBeQ1pFMQCViywx9+MWFxQR/Pyewn1XfDoFTbjfsN+2dBig==?cssminify=yes' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfourteen-ie-css'  href='https://s0.wp.com/wp-content/themes/pub/twentyfourteen/css/ie.css?m=1405358337h&#038;ver=20131205' media='all' />
<![endif]-->
<link rel='stylesheet' id='all-css-6-1' href='https://s0.wp.com/_static/??-eJyVkEsOwjAMRC+EMUUClQXiLGlwQ8CJo8ZR4PYEhARs+OzmefRmYawJrESlqKgHCpQxlQG1tsNllDIpUUSbM2a9MEFNVsK88QxfzFAgcXE+Zqx+70gzqiRIkvUh/qJQaa2cPAGbikohsVH6Y2A0loa2AOxPLZy/m44EWKxRL/ENYGTjp0/qRAOLa9Hd3/PEm7QL2261WXTr1bLvj1esjIah?cssminify=yes' type='text/css' media='all' />
<link rel='stylesheet' id='print-css-7-1' href='https://s0.wp.com/wp-content/mu-plugins/global-print/global-print.css?m=1465851035h&cssminify=yes' type='text/css' media='print' />
<link rel='stylesheet' id='all-css-8-1' href='https://s0.wp.com/wp-content/mu-plugins/actionbar/actionbar.css?m=1560469195h&cssminify=yes' type='text/css' media='all' />
<style id='jetpack-global-styles-frontend-style-inline-css'>
:root { --font-headings: unset; --font-base: unset; --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;}
</style>
<link rel='stylesheet' id='all-css-10-1' href='https://s0.wp.com/_static/??-eJxti8sKgCAQAH8oW6KHdoi+xcTUWF1pjX4/OnSIOg0DM3BmYSgVmwrEQ2Q8XEgMmbiIFXXYgb3eQ3IPa8Ncwf/FZIJGgeToLZ+peBstg+/AIS0a72COU9OPUg69atV2AWWKN+I=?cssminify=yes' type='text/css' media='all' />
<script id='jetpack_related-posts-js-extra'>
var related_posts_js_options = {"post_heading":"h4"};
</script>
<script type='text/javascript' src='https://s0.wp.com/_static/??/wp-includes/js/jquery/jquery.js,/wp-content/js/mobile-useragent-info.js,/wp-content/mu-plugins/related-posts/related-posts.js?m=1591626894j'></script>
<link rel='stylesheet' id='all-css-0-2' href='https://s0.wp.com/wp-content/mu-plugins/highlander-comments/style.css?m=1530132353h&cssminify=yes' type='text/css' media='all' />
<!--[if lt IE 8]>
<link rel='stylesheet' id='highlander-comments-ie7-css'  href='https://s0.wp.com/wp-content/mu-plugins/highlander-comments/style-ie7.css?m=1351637563h&#038;ver=20110606' media='all' />
<![endif]-->
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://toidicodedao.wordpress.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s0.wp.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Tôi đã lên cấp và tiến hoá như thế nào qua 6 năm lăn lộn trong ngành &#8211; Phần 2' href='https://toidicodedao.com/2020/08/12/developer-tien-hoa-phan-2/' />
<link rel='next' title='Lập trình web liệu có &#8220;chết&#8221; hay hết thời không?' href='https://toidicodedao.com/2020/08/25/lap-trinh-web-co-het-thoi/' />
<meta name="generator" content="WordPress.com" />
<link rel="canonical" href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" />
<link rel='shortlink' href='https://wp.me/p5xXSr-2eY' />
<link rel="alternate" type="application/json+oembed" href="https://public-api.wordpress.com/oembed/?format=json&amp;url=https%3A%2F%2Ftoidicodedao.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F&amp;for=wpcom-auto-discovery" /><link rel="alternate" type="application/xml+oembed" href="https://public-api.wordpress.com/oembed/?format=xml&amp;url=https%3A%2F%2Ftoidicodedao.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F&amp;for=wpcom-auto-discovery" />
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Không giỏi cái này, không biết cái kia thì có theo lập trình được không?" />
<meta property="og:url" content="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" />
<meta property="og:description" content="Lâu lâu, dạo quanh mấy forum và group, mình lại thấy vài câu hỏi ngộ ngộ dạng thế này: Em không giỏi tiếng Anh thì có theo lập trình được không? Em code không giỏi sau này có theo nghề được không? …" />
<meta property="article:published_time" content="2020-08-18T02:14:48+00:00" />
<meta property="article:modified_time" content="2020-08-18T02:14:48+00:00" />
<meta property="og:site_name" content="Từ coder đến developer - Tôi đi code dạo" />
<meta property="og:image" content="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg" />
<meta property="og:image:width" content="474" />
<meta property="og:image:height" content="285" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:creator" content="@conanak99" />
<meta name="twitter:site" content="@conanak99" />
<meta name="twitter:text:title" content="Không giỏi cái này, không biết cái kia thì có theo lập trình được không?" />
<meta name="twitter:image" content="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=640" />
<meta name="twitter:card" content="summary_large_image" />
<meta property="article:publisher" content="https://www.facebook.com/WordPresscom" />

<!-- End Jetpack Open Graph Tags -->
<link rel="shortcut icon" type="image/x-icon" href="https://secure.gravatar.com/blavatar/54084bfa40206518fb9e01fb53c7ccd9?s=32" sizes="16x16" />
<link rel="icon" type="image/x-icon" href="https://secure.gravatar.com/blavatar/54084bfa40206518fb9e01fb53c7ccd9?s=32" sizes="16x16" />
<link rel="apple-touch-icon" href="https://secure.gravatar.com/blavatar/54084bfa40206518fb9e01fb53c7ccd9?s=114" />
<link rel='openid.server' href='https://toidicodedao.com/?openidserver=1' />
<link rel='openid.delegate' href='https://toidicodedao.com/' />
<link rel="search" type="application/opensearchdescription+xml" href="https://toidicodedao.com/osd.xml" title="Từ coder đến developer - Tôi đi code dạo" />
<link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com" />
		<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
			}
		</style>
		<meta name="application-name" content="Từ coder đến developer - Tôi đi code dạo" /><meta name="msapplication-window" content="width=device-width;height=device-height" /><meta name="msapplication-tooltip" content="Lập trình viên giỏi không phải chỉ biết code" /><meta name="msapplication-task" content="name=Subscribe;action-uri=https://toidicodedao.com/feed/;icon-uri=https://secure.gravatar.com/blavatar/54084bfa40206518fb9e01fb53c7ccd9?s=16" /><meta name="msapplication-task" content="name=Sign up for a free blog;action-uri=http://wordpress.com/signup/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Support;action-uri=http://support.wordpress.com/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Forums;action-uri=http://forums.wordpress.com/;icon-uri=https://s0.wp.com/i/favicon.ico" /><meta name="description" content="Lâu lâu, dạo quanh mấy forum và group, mình lại thấy vài câu hỏi ngộ ngộ dạng thế này: Em không giỏi tiếng Anh thì có theo lập trình được không? Em code không giỏi sau này có theo nghề được không? Tư duy logic em không tốt chắc không vào FPT được huhu? Người&hellip;" />
		<script type="text/javascript">
		function __ATA_CC() {var v = document.cookie.match('(^|;) ?personalized-ads-consent=([^;]*)(;|$)');return v ? 1 : 0;}
		var __ATA_PP = { pt: 1, ht: 1, tn: 'twentyfourteen', amp: false, siteid: 81976675, consent: __ATA_CC() };
		var __ATA = __ATA || {};
		__ATA.cmd = __ATA.cmd || [];
		__ATA.criteo = __ATA.criteo || {};
		__ATA.criteo.cmd = __ATA.criteo.cmd || [];
		</script>
		<script type="text/javascript">
		(function(){var g=Date.now||function(){return+new Date};function h(a,b){a:{for(var c=a.length,d="string"==typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"==typeof a?a.charAt(b):a[b]};function k(a,b,c){c=null!=c?"="+encodeURIComponent(String(c)):"";if(b+=c){c=a.indexOf("#");0>c&&(c=a.length);var d=a.indexOf("?");if(0>d||d>c){d=c;var e=""}else e=a.substring(d+1,c);a=[a.substr(0,d),e,a.substr(c)];c=a[1];a[1]=b?c?c+"&"+b:b:c;a=a[0]+(a[1]?"?"+a[1]:"")+a[2]}return a};var l=0;function m(a,b){var c=document.createElement("script");c.src=a;c.onload=function(){b&&b(void 0)};c.onerror=function(){b("error")};a=document.getElementsByTagName("head");var d;a&&0!==a.length?d=a[0]:d=document.documentElement;d.appendChild(c)}function n(a){var b=void 0===b?document.cookie:b;return(b=h(b.split("; "),function(c){return-1!=c.indexOf(a+"=")}))?b.split("=")[1]:""}function p(a){return"string"==typeof a&&0<a.length}
		function r(a,b,c){b=void 0===b?"":b;c=void 0===c?".":c;var d=[];Object.keys(a).forEach(function(e){var f=a[e],q=typeof f;"object"==q&&null!=f||"function"==q?d.push(r(f,b+e+c)):null!==f&&void 0!==f&&(e=encodeURIComponent(b+e),d.push(e+"="+encodeURIComponent(f)))});return d.filter(p).join("&")}function t(a,b){a||((window.__ATA||{}).config=b.c,m(b.url))}var u=Math.floor(1E13*Math.random()),v=window.__ATA||{};window.__ATA=v;v.rid=u;v.createdAt=g();var w=window.__ATA||{},x="s.pubmine.com";
		w&&w.serverDomain&&(x=w.serverDomain);var y="//"+x+"/conf",z=window.top===window,A=window.__ATA_PP&&window.__ATA_PP.gdpr_applies,B="boolean"===typeof A?Number(A):null,C=window.__ATA_PP||null,D=z?document.referrer?document.referrer:null:null,E=z?window.location.href:document.referrer?document.referrer:null,F,G=n("__ATA_tuuid");F=G?G:null;var H=window.innerWidth+"x"+window.innerHeight,I=n("usprivacy"),J=r({gdpr:B,pp:C,rid:u,src:D,ref:E,tuuid:F,vp:H,us_privacy:I?I:null},"",".");
		(function(a){var b=void 0===b?"cb":b;l++;var c="callback__"+g().toString(36)+"_"+l.toString(36);a=k(a,b,c);window[c]=function(d){t(void 0,d)};m(a,function(d){d&&t(d)})})(y+"?"+J);}).call(this);
		</script><link rel="amphtml" href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/amp/"><style type="text/css" id="custom-colors-css">.site-description{margin-top:13px}.search-box .search-field{border-style:solid;border-width:1px}.primary-sidebar .widget input,.primary-sidebar .widget textarea,.footer-sidebar .widget input,.footer-sidebar .widget textarea{background-color:#fff;color:#2b2b2b}@media screen and (max-width:782px){.primary-navigation ul ul,.primary-navigation ul ul a:hover,.primary-navigation ul ul li.focus>a,.primary-navigation li:hover>a,.primary-navigation li.focus>a,.secondary-navigation ul ul,.secondary-navigation ul ul a:hover,.secondary-navigation ul ul li.focus>a,.secondary-navigation li:hover>a,.secondary-navigation li.focus>a{background-color:transparent !important}}.featured-content,.featured-content .entry-header,.slider-direction-nav a{background-color:#efefef}.grid .featured-content .entry-header{border-color:#efefef}.featured-content .hentry,.featured-content a,.featured-content .entry-meta,.slider-direction-nav a:before{color:#2b2b2b}.slider-control-paging a:before{background-color:#ccc}.slider-control-paging a:hover:before{background-color:#777}.slider-control-paging .slider-active:before,.slider-control-paging .slider-active:hover:before{background-color:#222}body{background-color:#000}</style>
</head>

<body class="post-template-default single single-post postid-8616 single-format-standard custom-background wp-embed-responsive customizer-styles-applied masthead-fixed singular highlander-enabled highlander-light">
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="https://toidicodedao.com/" rel="home">Từ coder đến developer &#8211; Tôi đi code dạo</a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container">Search</a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle">Primary Menu</button>
				<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
				<div class="menu-menu-container"><ul id="primary-menu" class="nav-menu"><li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-10"><a href="https://toidicodedao.com/">Home</a></li>
<li id="menu-item-2378" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2378"><a title="Những series/bài viết hay nhất trên blog" href="https://toidicodedao.com/2016/05/26/tong-hop-nhung-seriesbai-viet-hay-nhat-tren-blog/">Bài viết hay</a></li>
<li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12"><a title="Những kiến thức technical hay ho" href="https://toidicodedao.com/category/chuyen-coding/">Chuyện coding</a>
<ul class="sub-menu">
	<li id="menu-item-3739" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3739"><a title="Những kiến thức vô cùng cơ bản về bảo mật cho developer" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/series-bao-mat-nhap-mon/">Series Bảo mật nhập môn</a></li>
	<li id="menu-item-3756" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3756"><a title="Cùng viết tool nhận diện khuôn mặt JAV Idol với Microsoft Cognitive API" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/series-nhan-dien-idol/">Series Nhận diện Idol</a></li>
	<li id="menu-item-3742" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3742"><a title="Giới thiệu về các nguyên tắc SOLID, giúp bạn viết code sạch hơn, dễ mở rộng và bảo trì hơn" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/series-solid/">Seris SOLID</a></li>
	<li id="menu-item-3738" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3738"><a title="Những điều thú vị trong C#" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/c-hay-ho/">Series C# hay ho</a></li>
	<li id="menu-item-3740" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3740"><a title="Giới thiệu những điểm sida khó nhằn của JavaScript mà bao senior developer cũng sức đầu mẻ trán" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/javascript-sida/">Series JavaScript sida</a></li>
	<li id="menu-item-3749" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3749"><a title="Tìm hiểu về JavaScript với phong cách kiếm hiệp" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/js-truyen-ki/">Series JS Truyền Kì</a></li>
	<li id="menu-item-3741" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3741"><a title="Quay về với những thứ tinh túy, nền tảng của lập trình" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/phan-phac-qui-chan/">Series Phản Phác Qui Chân</a></li>
</ul>
</li>
<li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-has-children menu-item-14"><a title="Những kinh nghiệm làm việc, kĩ năng mềm mà ai cũng nên biết" href="https://toidicodedao.com/category/chuyen-nghe-nghiep/">Chuyện nghề nghiệp</a>
<ul class="sub-menu">
	<li id="menu-item-3752" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3752"><a target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/06/18/con-duong-phat-trien-su-nghiep-career-path-cho-developer/">Career Path cho Developer</a></li>
	<li id="menu-item-5016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5016"><a href="https://toidicodedao.com/2017/09/14/series-code-dao-troi-tay-phan-1-toi-da-bi-reject-sml-nhu-the-nao/">Series Code Dạo Trời Tây</a></li>
	<li id="menu-item-4492" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4492"><a href="https://toidicodedao.com/tag/series-nhap-mon-lap-trinh/">Series Nhập Môn Lập Trình Không Code</a></li>
	<li id="menu-item-5018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5018"><a href="https://toidicodedao.com/2017/08/03/buc-xuc-chuyen-nghe-phan-1-gach-da-nganh-it/">Series Bức xúc chuyện nghề</a></li>
	<li id="menu-item-3744" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3744"><a href="https://toidicodedao.com/2015/06/04/nhung-dieu-truong-dai-hoc-khong-day-ban-phan-1/">Series Những điều Đại Học không dạy bạn</a></li>
	<li id="menu-item-3743" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3743"><a target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/06/23/cach-tiep-can-1-ngon-ngucong-nghe-moi-phan-1/">Cách tiếp cận công nghệ mới</a></li>
	<li id="menu-item-3745" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3745"><a target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/07/16/muon-neo-duong-tim-viec-phan-1-viet-cv-ro-rang-va-chuyen-nghiep/">Muôn nẻo đường tìm việc</a></li>
	<li id="menu-item-3746" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3746"><a target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/11/17/mat-toi-cua-nganh-cong-nghiep-it-phan-1/">Mặt tối của ngành IT</a></li>
</ul>
</li>
<li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-has-children menu-item-13"><a title="Một số chuyện linh tinh, cái nhìn về ngành nghề" href="https://toidicodedao.com/category/chuyen-linh-tinh/">Chuyện linh tinh</a>
<ul class="sub-menu">
	<li id="menu-item-3747" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3747"><a title="Kinh nghiệm học tiếng Anh, ôn thi TOEIC, IELTS" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2016/02/25/chuyen-hoc-tieng-anh-phan-1-toi-da-hoc-tieng-anh-nhu-the-nao/">Series Chuyện học tiếng Anh</a></li>
	<li id="menu-item-3755" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3755"><a title="Review những sách hay mình đã đọc" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/review/">Review sách</a></li>
	<li id="menu-item-3748" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3748"><a title="Một số trải nghiệm thú vị của mình khi học, sinh hoạt và làm việc tại Quảng Châu, Trung Quốc" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/tag/series-chuyen-ben-khua/">Series Chuyện bên Khựa</a></li>
	<li id="menu-item-5017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5017"><a href="https://toidicodedao.com/2017/10/17/lua-chon-laptop-lap-trinh-nguoi-ban-dong-hanh-cua-moi-lap-trinh-vien/">Lựa chọn Laptop lập trình</a></li>
	<li id="menu-item-3750" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3750"><a title="Thay lời muốn nói – gởi tới những người thân yêu của mỗi lập trình viên" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2016/04/21/thay-loi-muon-noi-goi-toi-nhung-nguoi-than-yeu-cua-moi-lap-trinh-vien/">Thay lời muốn nói</a></li>
	<li id="menu-item-3751" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3751"><a title="Thực trạng học lập trình của một số thanh niên hiện nay" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/12/17/thuc-trang-hoc-lap-trinh-cua-mot-so-thanh-nien-hien-nay/">Thực trạng học lập trình của sinh viên</a></li>
	<li id="menu-item-3753" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3753"><a title="Tạo động lực học tập và làm việc – Sức mạnh của thói quen" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/08/06/tao-dong-luc-hoc-tap-va-lam-viec-suc-manh-cua-thoi-quen/">Sức mạnh của thói quen</a></li>
	<li id="menu-item-3754" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3754"><a title="C# là ngôn ngữ tuyệt vời nhất. Java, PHP, C, C++, Ruby chỉ toàn là thứ rẻ tiền" target="_blank" rel="noopener noreferrer" href="https://toidicodedao.com/2015/07/30/c-la-ngon-ngu-tuyet-voi-nhat-java-php-c-c-ruby-chi-toan-la-thu-re-tien/">C# là ngôn ngữ tuyệt vời nhất</a></li>
</ul>
</li>
<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a title="Thông tin về tác giả" href="https://toidicodedao.com/about/">About me</a></li>
</ul></div>			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<form role="search" method="get" class="search-form" action="https://toidicodedao.com/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form>			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
<article id="post-8616" class="post-8616 post type-post status-publish format-standard has-post-thumbnail hentry category-chuyen-linh-tinh category-chuyen-nghe-nghiep tag-co-nen-hoc-lap-trinh tag-chia-se tag-chuyen-hoc-lap-trinh tag-developer tag-gioi-lap-trinh tag-hoc-tieng-anh tag-kinh-nghiem tag-lap-trinh-vien tag-tieng-anh-hoc-lap-trinh">
	
		<div class="post-thumbnail">
			<img width="672" height="372" src="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=672&amp;h=372&amp;crop=1" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=672&amp;h=372&amp;crop=1 672w, https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=150&amp;h=83&amp;crop=1 150w, https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=300&amp;h=166&amp;crop=1 300w, https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=768&amp;h=425&amp;crop=1 768w, https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=1024&amp;h=567&amp;crop=1 1024w" sizes="(max-width: 672px) 100vw, 672px" data-attachment-id="8641" data-permalink="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/screenshot-2020-08-06-at-4-55-31-pm/" data-orig-file="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg" data-orig-size="1200,721" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Screenshot 2020-08-06 at 4.55.31 PM" data-image-description="" data-medium-file="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=300" data-large-file="https://toidicodedao.files.wordpress.com/2020/08/screenshot-2020-08-06-at-4.55.31-pm-e1596704153924.jpg?w=474" />		</div>

		
	<header class="entry-header">
				<div class="entry-meta">
			<span class="cat-links"><a href="https://toidicodedao.com/category/chuyen-linh-tinh/" rel="category tag">Chuyện linh tinh</a>, <a href="https://toidicodedao.com/category/chuyen-nghe-nghiep/" rel="category tag">Chuyện nghề nghiệp</a></span>
		</div>
			<h1 class="entry-title">Không giỏi cái này, không biết cái kia thì có theo lập trình được không?</h1>
		<div class="entry-meta">
			<span class="entry-date"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" rel="bookmark"><time class="entry-date" datetime="2020-08-18T09:14:48+07:00">18/08/2020</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="https://toidicodedao.com/author/huyhoang8a5/" rel="author">Phạm Huy Hoàng</a></span></span>			<span class="comments-link"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comments">11 Comments</a></span>
						</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

		
			<div id="atatags-819766751-5f59f40dcd751"></div>
			
			<script>
				__ATA.cmd.push(function() {
					__ATA.initDynamicSlot({
						id: 'atatags-819766751-5f59f40dcd751',
						location: 120,
						formFactor: '001',
						label: {
							text: 'Advertisements',
						},
						creative: {
							reportAd: {
								text: 'Report this ad',
							},
							privacySettings: {
								text: 'Privacy settings',
							}
						}
					});
				});
			</script><div id="atatags-819766755-5f59f40dcd784">
        <script type="text/javascript">
            __ATA.cmd.push(function() {
                __ATA.initVideoSlot('atatags-819766755-5f59f40dcd784', {
                    sectionId: '819766755',
                    format: 'inread'
                });
            });
        </script>
    </div><div id="jp-post-flair" class="sharedaddy sd-rating-enabled sd-like-enabled sd-sharing-enabled"><div class="sd-block sd-rating"><h3 class="sd-title">Rate this:</h3><div class="cs-rating pd-rating" id="pd_rating_holder_8005199_post_8616"></div></div><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-official sd-sharing"><div class="sd-content"><ul><li class="share-facebook"><div class="fb-share-button" data-href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" data-layout="button_count"></div></li><li class="share-linkedin"><div class="linkedin_button"><script type="in/share" data-url="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" data-counter="right"></script></div></li><li class="share-end"></li></ul></div></div></div><div class='sharedaddy sd-block sd-like jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded' id='like-post-wrapper-81976675-8616-5f59f40dcec04' data-src='//widgets.wp.com/likes/index.html?ver=20200826#blog_id=81976675&amp;post_id=8616&amp;origin=toidicodedao.wordpress.com&amp;obj_id=81976675-8616-5f59f40dcec04&amp;domain=toidicodedao.com' data-name='like-post-frame-81976675-8616-5f59f40dcec04'><h3 class='sd-title'>Like this:</h3><div class='likes-widget-placeholder post-likes-widget-placeholder' style='height: 55px;'><span class='button'><span>Like</span></span> <span class="loading">Loading...</span></div><span class='sd-text-color'></span><a class='sd-link-color'></a></div>
<div id='jp-relatedposts' class='jp-relatedposts' >
	<h3 class="jp-relatedposts-headline"><em>Related</em></h3>
</div></div>	</div><!-- .entry-content -->
	
	<footer class="entry-meta"><span class="tag-links"><a href="https://toidicodedao.com/tag/co-nen-hoc-lap-trinh/" rel="tag">có nên học lập trình</a><a href="https://toidicodedao.com/tag/chia-se/" rel="tag">chia sẻ</a><a href="https://toidicodedao.com/tag/chuyen-hoc-lap-trinh/" rel="tag">chuyện học lập trình</a><a href="https://toidicodedao.com/tag/developer/" rel="tag">developer</a><a href="https://toidicodedao.com/tag/gioi-lap-trinh/" rel="tag">giỏi lập trình</a><a href="https://toidicodedao.com/tag/hoc-tieng-anh/" rel="tag">học tiếng Anh</a><a href="https://toidicodedao.com/tag/kinh-nghiem/" rel="tag">kinh nghiệm</a><a href="https://toidicodedao.com/tag/lap-trinh-vien/" rel="tag">lập trình viên</a><a href="https://toidicodedao.com/tag/tieng-anh-hoc-lap-trinh/" rel="tag">tiếng anh học lập trình</a></span></footer></article><!-- #post-## -->
		<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text">Post navigation</h1>
		<div class="nav-links">
			<a href="https://toidicodedao.com/2020/08/12/developer-tien-hoa-phan-2/" rel="prev"><span class="meta-nav">Previous Post</span>Tôi đã lên cấp và tiến hoá như thế nào qua 6 năm lăn lộn trong ngành &#8211; Phần 2</a><a href="https://toidicodedao.com/2020/08/25/lap-trinh-web-co-het-thoi/" rel="next"><span class="meta-nav">Next Post</span>Lập trình web liệu có &#8220;chết&#8221; hay hết thời không?</a>			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		
<div id="comments" class="comments-area">

	
	<h2 class="comments-title">
		11 thoughts on &ldquo;Không giỏi cái này, không biết cái kia thì có theo lập trình được không?&rdquo;	</h2>

		
	<ol class="comment-list">
				<li id="comment-21712" class="comment even thread-even depth-1 parent highlander-comment">
			<article id="div-comment-21712" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://i0.wp.com/pbs.twimg.com/profile_images/1223431409034878977/pzxPetTr_normal.jpg?resize=34%2C34' class='avatar avatar-34' height='34' width='34' />						<b class="fn"><a href='http://twitter.com/VexPham' rel='external nofollow ugc' class='url'>Pham Thanh Tu (@VexPham)</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21712">
							<time datetime="2020-08-18T12:27:07+07:00">
								18/08/2020 at 12:27 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>em mù chữ, học code được ko ạ :))</p>
<p id="comment-like-21712" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21712&#038;_wpnonce=727f865e61" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21712" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21712#respond' data-commentid="21712" data-postid="8616" data-belowelement="div-comment-21712" data-respondelement="respond" data-replyto="Reply to Pham Thanh Tu (@VexPham)" aria-label='Reply to Pham Thanh Tu (@VexPham)'>Reply</a></div>			</article><!-- .comment-body -->
		<ol class="children">
		<li id="comment-21715" class="comment byuser comment-author-huyhoang8a5 bypostauthor odd alt depth-2 highlander-comment">
			<article id="div-comment-21715" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://1.gravatar.com/avatar/de0cdb393b4fcc100d471591994a5e0b?s=34&#038;d=https%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn"><a href='http://toidicodedao.com' rel='external nofollow ugc' class='url'>Phạm Huy Hoàng</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21715">
							<time datetime="2020-08-18T20:40:48+07:00">
								18/08/2020 at 8:40 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Mù chữ thì học chữ e</p>
<p id="comment-like-21715" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21715&#038;_wpnonce=97520241a9" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21715" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21715#respond' data-commentid="21715" data-postid="8616" data-belowelement="div-comment-21715" data-respondelement="respond" data-replyto="Reply to Phạm Huy Hoàng" aria-label='Reply to Phạm Huy Hoàng'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
</ol><!-- .children -->
</li><!-- #comment-## -->
		<li id="comment-21714" class="comment byuser comment-author-tjonjumy even thread-odd thread-alt depth-1 parent highlander-comment">
			<article id="div-comment-21714" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://1.gravatar.com/avatar/a917e8d7aadf62b97f818be0745f2cbd?s=34&#038;d=https%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn"><a href='http://gravatar.com/tjonjumy' rel='external nofollow ugc' class='url'>tjonjumy</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21714">
							<time datetime="2020-08-18T20:09:26+07:00">
								18/08/2020 at 8:09 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>&#8220;Khả năng của con người là vô hạn chỉ có bạn tự giới hạn khả năng của mình mà thôi .&#8221; Hay lắm a Hoàng, em đang bẻ lái từ cơ điện tử sang front-end và cũng đang học trên w3schools.A Hoang động viên e đi, hehe</p>
<p id="comment-like-21714" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21714&#038;_wpnonce=fb3aaa898c" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21714" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21714#respond' data-commentid="21714" data-postid="8616" data-belowelement="div-comment-21714" data-respondelement="respond" data-replyto="Reply to tjonjumy" aria-label='Reply to tjonjumy'>Reply</a></div>			</article><!-- .comment-body -->
		<ol class="children">
		<li id="comment-21716" class="comment byuser comment-author-huyhoang8a5 bypostauthor odd alt depth-2 highlander-comment">
			<article id="div-comment-21716" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://1.gravatar.com/avatar/de0cdb393b4fcc100d471591994a5e0b?s=34&#038;d=https%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn"><a href='http://toidicodedao.com' rel='external nofollow ugc' class='url'>Phạm Huy Hoàng</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21716">
							<time datetime="2020-08-18T20:40:55+07:00">
								18/08/2020 at 8:40 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Ừa cố lên e</p>
<p id="comment-like-21716" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21716&#038;_wpnonce=57779953d2" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21716" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21716#respond' data-commentid="21716" data-postid="8616" data-belowelement="div-comment-21716" data-respondelement="respond" data-replyto="Reply to Phạm Huy Hoàng" aria-label='Reply to Phạm Huy Hoàng'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
</ol><!-- .children -->
</li><!-- #comment-## -->
		<li id="comment-21718" class="comment byuser comment-author-phamtanthuan2311 even thread-even depth-1 highlander-comment">
			<article id="div-comment-21718" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://2.gravatar.com/avatar/8e1b2fc25393c5b9236adfd3524074f3?s=34&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Thuanpham2311</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21718">
							<time datetime="2020-08-18T23:10:49+07:00">
								18/08/2020 at 11:10 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Anti Social Practice Club 😀</p>
<p id="comment-like-21718" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21718&#038;_wpnonce=f60ff8341e" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21718" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21718#respond' data-commentid="21718" data-postid="8616" data-belowelement="div-comment-21718" data-respondelement="respond" data-replyto="Reply to Thuanpham2311" aria-label='Reply to Thuanpham2311'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21735" class="comment odd alt thread-odd thread-alt depth-1 highlander-comment">
			<article id="div-comment-21735" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://2.gravatar.com/avatar/2955fc387e89cfd53b87753fe5288e58?s=34&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn"><a href='http://gravatar.com/duminhngoc' rel='external nofollow ugc' class='url'>Ngọc</a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21735">
							<time datetime="2020-08-20T11:59:43+07:00">
								20/08/2020 at 11:59 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Anh ơi giữa ngành CNTT với ngành toán tin thì học ngành nào oke hơn ạ. Khả năng của e chỉ được toán tin ở Bách Khoa thôi thì theo a nên học ở đấy hay là CNTT ở các trường thấp điểm hơn ạ. E có hỏi câu này trên kênh youtube của a nhưng sợ a ko đọc được. Hy vọng a thấy và chia sẻ cho e nhé</p>
<p id="comment-like-21735" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21735&#038;_wpnonce=e73a33699a" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21735" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21735#respond' data-commentid="21735" data-postid="8616" data-belowelement="div-comment-21735" data-respondelement="respond" data-replyto="Reply to Ngọc" aria-label='Reply to Ngọc'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21745" class="comment even thread-even depth-1 highlander-comment">
			<article id="div-comment-21745" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://i1.wp.com/graph.facebook.com/v6.0/2685625005038846/picture?q=type%3Dlarge%26_md5%3D21a306bb5ce1dd1eb7dcfb68d3c40845&#038;resize=34%2C34' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Trần Trung Kiên</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21745">
							<time datetime="2020-08-21T20:17:40+07:00">
								21/08/2020 at 8:17 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>đọc blog của anh làm em mua ngay cuốn sách của anh ❤<br />
Anh sắp lấy vợ chưa ạ ? =))</p>
<p id="comment-like-21745" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21745&#038;_wpnonce=dda471443d" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21745" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21745#respond' data-commentid="21745" data-postid="8616" data-belowelement="div-comment-21745" data-respondelement="respond" data-replyto="Reply to Trần Trung Kiên" aria-label='Reply to Trần Trung Kiên'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21746" class="comment odd alt thread-odd thread-alt depth-1 highlander-comment">
			<article id="div-comment-21746" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://0.gravatar.com/avatar/3c7de4ff4cc0407047d71a89c51f00fc?s=34&#038;d=https%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Hiển Phạm</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21746">
							<time datetime="2020-08-21T20:57:28+07:00">
								21/08/2020 at 8:57 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>a ơi cho e hỏi nhu cầu thị trường c# bên nc ngoài thế nào ạ ?</p>
<p id="comment-like-21746" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21746&#038;_wpnonce=0b53796870" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21746" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21746#respond' data-commentid="21746" data-postid="8616" data-belowelement="div-comment-21746" data-respondelement="respond" data-replyto="Reply to Hiển Phạm" aria-label='Reply to Hiển Phạm'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21748" class="comment even thread-even depth-1 highlander-comment">
			<article id="div-comment-21748" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://0.gravatar.com/avatar/079ab47818e4f6883884b20777f6dabb?s=34&#038;d=https%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Con Nạy Mợ</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21748">
							<time datetime="2020-08-22T04:19:27+07:00">
								22/08/2020 at 4:19 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Cám ơn bạn Hoàng (và ông thầy chuyên Lý) về câu nói &#8220;Chưa chứ ko phải là Ko.&#8221; Giá như cô bồ cũ của mình học được câu này thì giờ đây mình đã cưới đc 1 ẻm đẹp như hoa hậu. Tuy nhiên, bây giờ ẻm cũng trên 5 bó như mình, thôi &#8220;con nạy mợ, mợ tha cho, đừng nhát ma con nhá.&#8221; </p>
<p>Tiếng Anh là chiếc xe hàng. Chiếc xe hàng chuyên chở yêu cầu của khách hàng về cho chúng ta sản xuất (coding). Trong khi sản xuất, chiếc xe hàng sẽ giúp ch/ta tìm kiếm tư liệu để làm ra thành quả. Sau khi xuất hàng, tiếng Anh giúp ch/ta mát xa lỗ tai khách hàng nếu như chẳng may bị bugs. </p>
<p>Nhưng nếu chỉ có tiếng Anh không thì người ta mướn quách người Nhật, người Sing, hay người Anh/Mỹ cho nó khoẻ, công đâu đi mướn anh Cà Ri hay nước mắm như mình? À, càng đào sâu vào mảnh đất CNTT, càng lòi ra đô la $$$. Và dĩ nhiên mảnh đất CNTT có nhiều anh đào thì khi gặp cái khó, mảnh đất khô cằn đầy sỏi đá, đấy là điểm thứ thách để loại ra mấy anh lười biếng hay bị dính chưởng tứ đổ tường. Những con đường bằng phẳng hay xuống dốc, có khối người dành nhau mà đi. Những cung đèo cong cua, leo dốc liên tục, và nếu như trên đình đèo có đô la $$$, cố lên anh em! Have a great weekend y&#8217;all!</p>
<p id="comment-like-21748" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21748&#038;_wpnonce=650dba7492" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21748" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21748#respond' data-commentid="21748" data-postid="8616" data-belowelement="div-comment-21748" data-respondelement="respond" data-replyto="Reply to Con Nạy Mợ" aria-label='Reply to Con Nạy Mợ'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21769" class="comment odd alt thread-odd thread-alt depth-1 highlander-comment">
			<article id="div-comment-21769" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://i0.wp.com/graph.facebook.com/v6.0/1470311546509997/picture?q=type%3Dlarge%26_md5%3D04d8dcd0af41bcd0856535cb644400cc&#038;resize=34%2C34' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Nhật Huy</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21769">
							<time datetime="2020-08-24T22:13:47+07:00">
								24/08/2020 at 10:13 pm							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Cảm ơn câu &#8220;chưa làm được, không phải không làm được!&#8221; của người thầy anh kể. Nhờ đó ngay lúc này, thay vì làm cho xong Task em sẽ quyết định đi ngủ. Không phải em không làm được, mà là do em buồn ngủ quá nên chưa làm được.</p>
<p id="comment-like-21769" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21769&#038;_wpnonce=5b6a5ac178" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21769" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21769#respond' data-commentid="21769" data-postid="8616" data-belowelement="div-comment-21769" data-respondelement="respond" data-replyto="Reply to Nhật Huy" aria-label='Reply to Nhật Huy'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21811" class="comment even thread-even depth-1 highlander-comment">
			<article id="div-comment-21811" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<img alt='' src='https://2.gravatar.com/avatar/2ed3226b62bf23210bf0944409728e7c?s=34&#038;d=https%3A%2F%2F2.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D34&#038;r=G' class='avatar avatar-34' height='34' width='34' />						<b class="fn">Huỳnh Hùng</b> <span class="says">says:</span>					</div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/#comment-21811">
							<time datetime="2020-08-27T11:33:47+07:00">
								27/08/2020 at 11:33 am							</time>
						</a>
											</div><!-- .comment-metadata -->

									</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>E đang định mua con macbook 13 2020 để học code liệu cấu hình lâu lâu dài có bị yếu quá không anh? . Vì e thấy tầm tiền ấy mua được máy Windows thông tin cấu hình hơn ạ.</p>
<p id="comment-like-21811" data-liked=comment-not-liked class="comment-likes comment-not-liked"><a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?like_comment=21811&#038;_wpnonce=d6c149ee23" class="comment-like-link needs-login" rel="nofollow" data-blog="81976675"><span>Like</span></a><span id="comment-like-count-21811" class="comment-like-feedback">Like</span></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/?replytocom=21811#respond' data-commentid="21811" data-postid="8616" data-belowelement="div-comment-21811" data-respondelement="respond" data-replyto="Reply to Huỳnh Hùng" aria-label='Reply to Huỳnh Hùng'>Reply</a></div>			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
	</ol><!-- .comment-list -->

		
		
	
		<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2020/08/18/khong-gioi-muon-theo-lap-trinh/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://toidicodedao.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate><input type="hidden" id="highlander_comment_nonce" name="highlander_comment_nonce" value="fe54ec2a2b" /><input type="hidden" name="_wp_http_referer" value="/2020/08/18/khong-gioi-muon-theo-lap-trinh/" />
<input type="hidden" name="hc_post_as" id="hc_post_as" value="guest" />

<div class="comment-form-field comment-textarea">
	<label for="comment">Enter your comment here...</label>
	<div id="comment-form-comment"><textarea id="comment" name="comment" title="Enter your comment here..."></textarea></div>
</div>

<div id="comment-form-identity">
	<div id="comment-form-nascar">
		<p>Fill in your details below or click an icon to log in:</p>
		<ul>
			<li class="selected" style="display:none;">
				<a href="#comment-form-guest" id="postas-guest" class="nascar-signin-link"
                   title="Login via Guest">
									</a>
			</li>
			<li>
				<a href="#comment-form-load-service:WordPress.com" id="postas-wordpress" class="nascar-signin-link"
                   title="Login via WordPress.com">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#0087be" d="M12.158 12.786l-2.698 7.84c.806.236 1.657.365 2.54.365 1.047 0 2.05-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.57zM3.008 12c0 3.56 2.07 6.634 5.068 8.092L3.788 8.342c-.5 1.117-.78 2.354-.78 3.658zm15.06-.454c0-1.112-.398-1.88-.74-2.48-.456-.74-.883-1.368-.883-2.11 0-.825.627-1.595 1.51-1.595.04 0 .078.006.116.008-1.598-1.464-3.73-2.36-6.07-2.36-3.14 0-5.904 1.613-7.512 4.053.21.008.41.012.58.012.94 0 2.395-.114 2.395-.114.484-.028.54.684.057.74 0 0-.487.058-1.03.086l3.275 9.74 1.968-5.902-1.4-3.838c-.485-.028-.944-.085-.944-.085-.486-.03-.43-.77.056-.742 0 0 1.484.114 2.368.114.94 0 2.397-.114 2.397-.114.486-.028.543.684.058.74 0 0-.488.058-1.03.086l3.25 9.665.897-2.997c.456-1.17.684-2.137.684-2.907zm1.82-3.86c.04.286.06.593.06.924 0 .912-.17 1.938-.683 3.22l-2.746 7.94c2.672-1.558 4.47-4.454 4.47-7.77 0-1.564-.4-3.033-1.1-4.314zM12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></g></svg>				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Twitter" id="postas-twitter" class="nascar-signin-link"
                   title="Login via Twitter">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#1DA1F2" d="M22.23 5.924c-.736.326-1.527.547-2.357.646.847-.508 1.498-1.312 1.804-2.27-.793.47-1.67.812-2.606.996C18.325 4.498 17.258 4 16.078 4c-2.266 0-4.103 1.837-4.103 4.103 0 .322.036.635.106.935-3.41-.17-6.433-1.804-8.457-4.287-.353.607-.556 1.312-.556 2.064 0 1.424.724 2.68 1.825 3.415-.673-.022-1.305-.207-1.86-.514v.052c0 1.988 1.415 3.647 3.293 4.023-.344.095-.707.145-1.08.145-.265 0-.522-.026-.773-.074.522 1.63 2.038 2.817 3.833 2.85-1.404 1.1-3.174 1.757-5.096 1.757-.332 0-.66-.02-.98-.057 1.816 1.164 3.973 1.843 6.29 1.843 7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.355-.012-.53.802-.578 1.497-1.3 2.047-2.124z"/></g></svg>				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Facebook" id="postas-facebook" class="nascar-signin-link"
                   title="Login via Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#3B5998" d="M20.007 3H3.993C3.445 3 3 3.445 3 3.993v16.013c0 .55.445.994.993.994h8.62v-6.97H10.27V11.31h2.346V9.31c0-2.325 1.42-3.59 3.494-3.59.993 0 1.847.073 2.096.106v2.43h-1.438c-1.128 0-1.346.537-1.346 1.324v1.734h2.69l-.35 2.717h-2.34V21h4.587c.548 0 .993-.445.993-.993V3.993c0-.548-.445-.993-.993-.993z"/></g></svg>				</a>
			</li>
		</ul>
	</div>

	<div id="comment-form-guest" class="comment-form-service selected">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
<a href="https://gravatar.com/site/signup/" target="_blank">				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Gravatar" width="25" class="no-grav" />
</a>			</div>

				<div class="comment-form-fields">
				<div class="comment-form-field comment-form-email">
					<label for="email">Email <span class="required">(required)</span> <span class="nopublish">(Address never made public)</span></label>
					<div class="comment-form-input"><input id="email" name="email" type="email" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-author">
					<label for="author">Name <span class="required">(required)</span></label>
					<div class="comment-form-input"><input id="author" name="author" type="text" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-url">
					<label for="url">Website</label>
					<div class="comment-form-input"><input id="url" name="url" type="url" value="" /></div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="comment-form-wordpress" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="WordPress.com Logo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="wp_avatar" id="wordpress-avatar" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_user_id" id="wordpress-user_id" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_access_token" id="wordpress-access_token" class="comment-meta-wordpress" value="" />
						<p class="comment-form-posting-as pa-wordpress">
			<strong></strong>
			You are commenting using your WordPress.com account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'wordpress' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#0087be" d="M12.158 12.786l-2.698 7.84c.806.236 1.657.365 2.54.365 1.047 0 2.05-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.57zM3.008 12c0 3.56 2.07 6.634 5.068 8.092L3.788 8.342c-.5 1.117-.78 2.354-.78 3.658zm15.06-.454c0-1.112-.398-1.88-.74-2.48-.456-.74-.883-1.368-.883-2.11 0-.825.627-1.595 1.51-1.595.04 0 .078.006.116.008-1.598-1.464-3.73-2.36-6.07-2.36-3.14 0-5.904 1.613-7.512 4.053.21.008.41.012.58.012.94 0 2.395-.114 2.395-.114.484-.028.54.684.057.74 0 0-.487.058-1.03.086l3.275 9.74 1.968-5.902-1.4-3.838c-.485-.028-.944-.085-.944-.085-.486-.03-.43-.77.056-.742 0 0 1.484.114 2.368.114.94 0 2.397-.114 2.397-.114.486-.028.543.684.058.74 0 0-.488.058-1.03.086l3.25 9.665.897-2.997c.456-1.17.684-2.137.684-2.907zm1.82-3.86c.04.286.06.593.06.924 0 .912-.17 1.938-.683 3.22l-2.746 7.94c2.672-1.558 4.47-4.454 4.47-7.77 0-1.564-.4-3.033-1.1-4.314zM12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-googleplus" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Google photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="googleplus_avatar" id="googleplus-avatar" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_user_id" id="googleplus-user_id" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_access_token" id="googleplus-access_token" class="comment-meta-googleplus" value="" />
						<p class="comment-form-posting-as pa-googleplus">
			<strong></strong>
			You are commenting using your Google account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'googleplus' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" x="0px" y="0px" viewBox="0 0 60 60" ><path fill="#519bf7" d="M56.3,30c0,-1.6 -0.2,-3.4 -0.6,-5h-3.1H42.2H30v10.6h14.8C44,39.3 42,42 39.1,43.9l8.8,6.8C53,46 56.3,39 56.3,30z" /><path fill="#3db366" d="M30,57.5c6.7,0 13.1,-2.4 17.9,-6.8l-8.8,-6.8c-2.5,1.6 -5.6,2.4 -9.1,2.4c-7.2,0 -13.3,-4.7 -15.4,-11.2l-9.3,7.1C9.8,51.3 19.1,57.5 30,57.5z" /><path fill="#fdc600" d="M5.3,42.2l9.3,-7.1c-0.5,-1.6 -0.8,-3.3 -0.8,-5.1s0.3,-3.5 0.8,-5.1l-9.3,-7.1C3.5,21.5 2.5,25.6 2.5,30S3.5,38.5 5.3,42.2z" /><path fill="#f15b44" d="M40.1,17.4l8,-8C43.3,5.1 37,2.5 30,2.5C19.1,2.5 9.8,8.7 5.3,17.8l9.3,7.1c2.1,-6.5 8.2,-11.1 15.4,-11.1C33.9,13.7 37.4,15.1 40.1,17.4z" /></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-twitter" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Twitter picture" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="twitter_avatar" id="twitter-avatar" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_user_id" id="twitter-user_id" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_access_token" id="twitter-access_token" class="comment-meta-twitter" value="" />
						<p class="comment-form-posting-as pa-twitter">
			<strong></strong>
			You are commenting using your Twitter account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'twitter' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#1DA1F2" d="M22.23 5.924c-.736.326-1.527.547-2.357.646.847-.508 1.498-1.312 1.804-2.27-.793.47-1.67.812-2.606.996C18.325 4.498 17.258 4 16.078 4c-2.266 0-4.103 1.837-4.103 4.103 0 .322.036.635.106.935-3.41-.17-6.433-1.804-8.457-4.287-.353.607-.556 1.312-.556 2.064 0 1.424.724 2.68 1.825 3.415-.673-.022-1.305-.207-1.86-.514v.052c0 1.988 1.415 3.647 3.293 4.023-.344.095-.707.145-1.08.145-.265 0-.522-.026-.773-.074.522 1.63 2.038 2.817 3.833 2.85-1.404 1.1-3.174 1.757-5.096 1.757-.332 0-.66-.02-.98-.057 1.816 1.164 3.973 1.843 6.29 1.843 7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.355-.012-.53.802-.578 1.497-1.3 2.047-2.124z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>

	<div id="comment-form-facebook" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25" alt="Facebook photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="fb_avatar" id="facebook-avatar" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_user_id" id="facebook-user_id" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_access_token" id="facebook-access_token" class="comment-meta-facebook" value="" />
						<p class="comment-form-posting-as pa-facebook">
			<strong></strong>
			You are commenting using your Facebook account.			<span class="comment-form-log-out">
				(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'facebook' );">Log&nbsp;Out</a>&nbsp;/&nbsp;
				<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Change</a>&nbsp;)
			</span>
			<span class="pa-icon"><svg xmlns="http://www.w3.org/2000/svg" role="presentation" viewBox="0 0 24 24" ><rect x="0" fill="none" width="24" height="24"/><g><path fill="#3B5998" d="M20.007 3H3.993C3.445 3 3 3.445 3 3.993v16.013c0 .55.445.994.993.994h8.62v-6.97H10.27V11.31h2.346V9.31c0-2.325 1.42-3.59 3.494-3.59.993 0 1.847.073 2.096.106v2.43h-1.438c-1.128 0-1.346.537-1.346 1.324v1.734h2.69l-.35 2.717h-2.34V21h4.587c.548 0 .993-.445.993-.993V3.993c0-.548-.445-.993-.993-.993z"/></g></svg></span>
		</p>
					</div>
	
		</div>
	</div>


	<div id="comment-form-load-service" class="comment-form-service">
		<div class="comment-form-posting-as-cancel"><a href="javascript:HighlanderComments.cancelExternalWindow();">Cancel</a></div>
		<p>Connecting to %s</p>
	</div>

</div>

<script type="text/javascript">
var highlander_expando_javascript = function(){
	var input = document.createElement( 'input' ),
	    comment = jQuery( '#comment' );

	if ( 'placeholder' in input ) {
		comment.attr( 'placeholder', jQuery( '.comment-textarea label' ).remove().text() );
	}

	// Expando Mode: start small, then auto-resize on first click + text length
	jQuery( '#comment-form-identity' ).hide();
	jQuery( '#comment-form-subscribe' ).hide();
	jQuery( '#commentform .form-submit' ).hide();

	comment.css( { 'height':'10px' } ).one( 'focus', function() {
		var timer = setInterval( HighlanderComments.resizeCallback, 10 )
		jQuery( this ).animate( { 'height': HighlanderComments.initialHeight } ).delay( 100 ).queue( function(n) { clearInterval( timer ); HighlanderComments.resizeCallback(); n(); } );
		jQuery( '#comment-form-identity' ).slideDown();
		jQuery( '#comment-form-subscribe' ).slideDown();
		jQuery( '#commentform .form-submit' ).slideDown();
	});
}
jQuery(document).ready( highlander_expando_javascript );
</script>

<div id="comment-form-subscribe">
	<p class="comment-subscription-form"><input type="checkbox" name="subscribe" id="subscribe" value="subscribe" style="width: auto;"/> <label class="subscribe-label" id="subscribe-label" for="subscribe" style="display: inline;">Notify me of new comments via email.</label></p><p class="post-subscription-form"><input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto;"/> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog"  style="display: inline;">Notify me of new posts via email.</label></p></div>




<p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='8616' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="ecebbbebe6" /></p>
<input type="hidden" name="genseq" value="1599730701" />
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="37"/></p></form>	</div><!-- #respond -->
	<div style="clear: both"></div>
</div><!-- #comments -->
		</div><!-- #content -->
	</div><!-- #primary -->

<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<aside id="search-5" class="widget widget_search"><form role="search" method="get" class="search-form" action="https://toidicodedao.com/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></aside><aside id="custom_html-9" class="widget_text widget widget_custom_html"><h1 class="widget-title">Kênh Youtube Tôi Đi Code Dạo</h1><div class="textwidget custom-html-widget"><!-- FB Pixel tracking -->
<img alt="pixel" height="1" width="1" style="display:none;" src="https://www.facebook.com/tr?id=598240393698367&amp;ev=PageView&amp;noscript=1" />
<div style="text-align:center;margin-bottom:-32px;margin-top:-12px;">
	<a href="https://www.youtube.com/c/toidicodedaoblog?sub_confirmation=1" target="_blank" style="display:block;width:95%;margin:-6px auto 14px;" rel="noopener noreferrer"><img src="https://toidicodedao.files.wordpress.com/2017/12/youtube-channel-toidicodedao.jpg" alt="youtube-channel-toidicodedao" /></a>
	Kênh Youtube chia sẻ về ngành lập trình dưới dạng <strong>vlog 3-4 phút</strong> rất ngắn gọn và bổ ích.

	Các bạn nhớ <a href="https://www.youtube.com/c/toidicodedaoblog?sub_confirmation=1" target="_blank" rel="noopener noreferrer"><strong>ghé thăm và subscribe</strong></a> nha!	
	
	
</div></div></aside><aside id="custom_html-3" class="widget_text widget widget_custom_html"><h1 class="widget-title">Sách do tôi viết</h1><div class="textwidget custom-html-widget"><p style="height:170px;margin-top:-10px;"><a href="http://security.toidicodedao.com?utm_source=blog_sidebar" target="_blank" rel="noopener noreferrer"><img style="width:36%;float:left;" src="https://toidicodedao.files.wordpress.com/2016/12/3dbook.png" /><span style="margin-top:3.2em;font-size:1.1em;margin-left:.5em;display:block;float:left;width:55%;"><b>[Free Ebooks]</b> Bảo mật nhập môn - Bảo mật cơ bản cho developer</span> </a></p>
<p style="height:170px;margin-top:0;margin-bottom:10px;"><a href="http://hoclaptrinh.toidicodedao.com?utm_source=blog_sidebar" target="_blank" rel="noopener noreferrer"><img style="width:40%;float:left;" src="https://toidicodedao.files.wordpress.com/2017/08/cover1.png" /><span style="margin-top:3.2em;font-size:1.1em;margin-left:.5em;display:block;float:left;width:55%;"><b>[Free Ebooks]</b> Nhập môn lập trình không code</span> </a></p>
<p style="height:120px;"><a href="http://book.toidicodedao.com?utm_source=blog_sidebar" target="_blank" rel="noopener noreferrer"><img style="width:36%;float:left;" src="https://lh4.googleusercontent.com/XpLc2VqxYIAqmplMveYAW20LMdAv_uSmLfVvBuqtumiQCG1nOn65TVMyPgEKALH2gN6n2sG5gQ=w414" /><span style="margin-top:2.8em;font-size:1.1em;display:block;margin-left:.5em;float:left;width:55%;"><b>[Sách giấy]</b> Code dạo ký sự - Lập trình viên đâu phải chỉ biết code</span> </a></p>
</div></aside><aside id="top-posts-3" class="widget widget_top-posts"><h1 class="widget-title">Top Posts &amp; Pages</h1><ul class='widgets-list-layout no-grav'>
					<li>
						<a href="https://toidicodedao.com/2020/09/08/12-yeu-to-tao-nen-1-web-app-xin-xo-luoc-dich-va-giai-thich-twelve-factor-phan-2/" title="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor - Phần 2" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2020/08/1_gjem5v5dhv8rubgk0ydlag.png?w=1200&#038;resize=40%2C40" alt="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor - Phần 2" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2020/09/08/12-yeu-to-tao-nen-1-web-app-xin-xo-luoc-dich-va-giai-thich-twelve-factor-phan-2/" title="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor - Phần 2" class="bump-view" data-bump-view="tp">12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor - Phần 2</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2015/03/24/solid-la-gi-ap-dung-cac-nguyen-ly-solid-de-tro-thanh-lap-trinh-vien-code-cung/" title="SOLID là gì - Áp dụng các nguyên lý SOLID để trở thành lập trình viên code &quot;cứng&quot;" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2015/02/keepcalm.png?resize=40%2C40" alt="SOLID là gì - Áp dụng các nguyên lý SOLID để trở thành lập trình viên code &quot;cứng&quot;" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2015/03/24/solid-la-gi-ap-dung-cac-nguyen-ly-solid-de-tro-thanh-lap-trinh-vien-code-cung/" title="SOLID là gì - Áp dụng các nguyên lý SOLID để trở thành lập trình viên code &quot;cứng&quot;" class="bump-view" data-bump-view="tp">SOLID là gì - Áp dụng các nguyên lý SOLID để trở thành lập trình viên code &quot;cứng&quot;</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2019/06/18/developer-review-chui-cong-ty/" title="Đắng lòng khi thấy anh em Developer viết review chửi bới công ty" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2019/05/7932868-3x2-940x627.jpg?resize=40%2C40" alt="Đắng lòng khi thấy anh em Developer viết review chửi bới công ty" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2019/06/18/developer-review-chui-cong-ty/" title="Đắng lòng khi thấy anh em Developer viết review chửi bới công ty" class="bump-view" data-bump-view="tp">Đắng lòng khi thấy anh em Developer viết review chửi bới công ty</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2020/09/01/12-yeu-to-tao-nen-1-web-app-xin-xo-luot-dich-va-giai-thich-twelve-factor/" title="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2020/08/screen-shot-2020-08-23-at-17.00.22.jpg?w=1200&#038;resize=40%2C40" alt="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2020/09/01/12-yeu-to-tao-nen-1-web-app-xin-xo-luot-dich-va-giai-thich-twelve-factor/" title="12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor" class="bump-view" data-bump-view="tp">12 yếu tố tạo nên 1 web app xịn xò - Lược dịch và giải thích Twelve-Factor</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2015/11/03/dependency-injection-va-inversion-of-control-phan-1-dinh-nghia/" title="Dependency Injection và Inversion of Control - Phần 1: Định nghĩa" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2015/09/ioc-and-mapper-in-c-1-638.jpg?resize=40%2C40" alt="Dependency Injection và Inversion of Control - Phần 1: Định nghĩa" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2015/11/03/dependency-injection-va-inversion-of-control-phan-1-dinh-nghia/" title="Dependency Injection và Inversion of Control - Phần 1: Định nghĩa" class="bump-view" data-bump-view="tp">Dependency Injection và Inversion of Control - Phần 1: Định nghĩa</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2018/09/04/project-luyen-tap-ki-nang-lap-trinh/" title="9 project nhỏ mà bạn có thể code để luyện tập kĩ năng lập trình" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2018/08/javascript-project-1.jpg?resize=40%2C40" alt="9 project nhỏ mà bạn có thể code để luyện tập kĩ năng lập trình" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2018/09/04/project-luyen-tap-ki-nang-lap-trinh/" title="9 project nhỏ mà bạn có thể code để luyện tập kĩ năng lập trình" class="bump-view" data-bump-view="tp">9 project nhỏ mà bạn có thể code để luyện tập kĩ năng lập trình</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2020/08/25/lap-trinh-web-co-het-thoi/" title="Lập trình web liệu có &quot;chết&quot; hay hết thời không?" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2020/07/web-dev.jpg?w=1200&#038;resize=40%2C40" alt="Lập trình web liệu có &quot;chết&quot; hay hết thời không?" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2020/08/25/lap-trinh-web-co-het-thoi/" title="Lập trình web liệu có &quot;chết&quot; hay hết thời không?" class="bump-view" data-bump-view="tp">Lập trình web liệu có &quot;chết&quot; hay hết thời không?</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2020/07/28/huong-dan-setup-visual-studio-code-nhung-extension-xin-xo-ma-dev-nao-cung-nen-dung/" title="Hướng dẫn setup Visual Studio Code - Những extension xịn xò mà dev nào cũng nên dùng" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2020/07/a4nibn44fsehd.jpg?w=1200&#038;resize=40%2C40" alt="Hướng dẫn setup Visual Studio Code - Những extension xịn xò mà dev nào cũng nên dùng" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2020/07/28/huong-dan-setup-visual-studio-code-nhung-extension-xin-xo-ma-dev-nao-cung-nen-dung/" title="Hướng dẫn setup Visual Studio Code - Những extension xịn xò mà dev nào cũng nên dùng" class="bump-view" data-bump-view="tp">Hướng dẫn setup Visual Studio Code - Những extension xịn xò mà dev nào cũng nên dùng</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2016/05/26/tong-hop-nhung-seriesbai-viet-hay-nhat-tren-blog/" title="Tổng hợp những series/bài viết hay nhất trên blog" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2016/05/12230712-best-of-the-best-rubber-stamp-stock-vector-winner.jpg?w=1200&#038;resize=40%2C40" alt="Tổng hợp những series/bài viết hay nhất trên blog" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2016/05/26/tong-hop-nhung-seriesbai-viet-hay-nhat-tren-blog/" title="Tổng hợp những series/bài viết hay nhất trên blog" class="bump-view" data-bump-view="tp">Tổng hợp những series/bài viết hay nhất trên blog</a>
							</div>
													</li>
										<li>
						<a href="https://toidicodedao.com/2015/04/09/review-sach-clean-code-a-handbook-of-agile-software-craftsmanship/" title="Review sách: Clean Code: A Handbook of Agile Software Craftsmanship" class="bump-view" data-bump-view="tp">
								<img width="40" height="40" src="https://toidicodedao.files.wordpress.com/2015/03/71ambnhelil-e1552820007165.jpg?resize=40%2C40" alt="Review sách: Clean Code: A Handbook of Agile Software Craftsmanship" data-pin-nopin="true" class="widgets-list-layout-blavatar"/>
							</a>
							<div class="widgets-list-layout-links">
								<a href="https://toidicodedao.com/2015/04/09/review-sach-clean-code-a-handbook-of-agile-software-craftsmanship/" title="Review sách: Clean Code: A Handbook of Agile Software Craftsmanship" class="bump-view" data-bump-view="tp">Review sách: Clean Code: A Handbook of Agile Software Craftsmanship</a>
							</div>
													</li>
					</ul>
</aside><aside id="facebook-likebox-3" class="widget widget_facebook_likebox"><h1 class="widget-title"><a href="https://www.facebook.com/toidicodedao/">Like ngay để không bỏ lỡ những bài viết hay nhé!</a></h1>		<div id="fb-root"></div>
		<div class="fb-page" data-href="https://www.facebook.com/toidicodedao/" data-width="500"  data-height="350" data-hide-cover="false" data-show-facepile="true" data-tabs="timeline" data-hide-cta="false" data-small-header="false">
		<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/toidicodedao/"><a href="https://www.facebook.com/toidicodedao/">Like ngay để không bỏ lỡ những bài viết hay nhé!</a></blockquote></div>
		</div>
		</aside>
		<aside id="recent-posts-5" class="widget widget_recent_entries">
		<h1 class="widget-title">Bài viết gần nhất</h1>
		<ul>
											<li>
					<a href="https://toidicodedao.com/2020/09/08/12-yeu-to-tao-nen-1-web-app-xin-xo-luoc-dich-va-giai-thich-twelve-factor-phan-2/">12 yếu tố tạo nên 1 web app xịn xò &#8211; Lược dịch và giải thích Twelve-Factor &#8211; Phần 2</a>
									</li>
											<li>
					<a href="https://toidicodedao.com/2020/09/01/12-yeu-to-tao-nen-1-web-app-xin-xo-luot-dich-va-giai-thich-twelve-factor/">12 yếu tố tạo nên 1 web app xịn xò &#8211; Lược dịch và giải thích Twelve-Factor</a>
									</li>
											<li>
					<a href="https://toidicodedao.com/2020/08/25/lap-trinh-web-co-het-thoi/">Lập trình web liệu có &#8220;chết&#8221; hay hết thời không?</a>
									</li>
											<li>
					<a href="https://toidicodedao.com/2020/08/18/khong-gioi-muon-theo-lap-trinh/" aria-current="page">Không giỏi cái này, không biết cái kia thì có theo lập trình được không?</a>
									</li>
											<li>
					<a href="https://toidicodedao.com/2020/08/12/developer-tien-hoa-phan-2/">Tôi đã lên cấp và tiến hoá như thế nào qua 6 năm lăn lộn trong ngành &#8211; Phần 2</a>
									</li>
											<li>
					<a href="https://toidicodedao.com/2020/08/04/developer-tien-hoa-phan-1/">Tôi đã lên cấp và tiến hoá như thế nào qua 6 năm lăn lộn trong ngành &#8211; Phần 1</a>
									</li>
					</ul>

		</aside><aside id="text-20" class="widget widget_text"><h1 class="widget-title">About me</h1>			<div class="textwidget"><img style="margin-bottom:15px;" width="150px" src="https://toidicodedao.files.wordpress.com/2016/08/av.jpg" />
<div style="text-align:justify;">
<p>Mình là Phạm Huy Hoàng, một developer.</p> 
<p>Thuở còn là sinh viên, mình từng có những thắc mắc, trăn trở về technical, về con đường nghề nghiệp, nhưng không có ai giải đáp.</p>
<p>
Blog này là nơi mình chia sẻ những kiến thức, kinh nghiệm mà mình đạt được trong quá trình làm việc và trải nghiệm. </p>
Mong rằng nó sẽ giải đáp phần nào những khúc mắc, trăn trở cho những bạn sinh viên như mình ngày xưa.</p>
<p style="margin-bottom:-30px;"><a href="https://toidicodedao.com/about/">Đọc thêm về tôi và blog này!</a></p></div>
</div>
		</aside><aside id="wp_tag_cloud-7" class="widget wp_widget_tag_cloud"><h1 class="widget-title">Tags</h1><div style="overflow:hidden"><ul class='wp-tag-cloud' role='list'>
	<li><a href="https://toidicodedao.com/tag/azure/" class="tag-cloud-link tag-link-335778 tag-link-position-1" style="font-size: 8.5137614678899pt;" aria-label="azure (21 items)">azure</a></li>
	<li><a href="https://toidicodedao.com/tag/blog/" class="tag-cloud-link tag-link-273 tag-link-position-2" style="font-size: 10.05504587156pt;" aria-label="blog (28 items)">blog</a></li>
	<li><a href="https://toidicodedao.com/tag/c/" class="tag-cloud-link tag-link-2426 tag-link-position-3" style="font-size: 13.522935779817pt;" aria-label="c# (53 items)">c#</a></li>
	<li><a href="https://toidicodedao.com/tag/c-net/" class="tag-cloud-link tag-link-49277 tag-link-position-4" style="font-size: 10.05504587156pt;" aria-label="c#.net (28 items)">c#.net</a></li>
	<li><a href="https://toidicodedao.com/tag/c-hay-ho/" class="tag-cloud-link tag-link-319006524 tag-link-position-5" style="font-size: 9.4128440366972pt;" aria-label="c# hay ho (25 items)">c# hay ho</a></li>
	<li><a href="https://toidicodedao.com/tag/chia-se/" class="tag-cloud-link tag-link-1183836 tag-link-position-6" style="font-size: 8.256880733945pt;" aria-label="chia sẻ (20 items)">chia sẻ</a></li>
	<li><a href="https://toidicodedao.com/tag/code/" class="tag-cloud-link tag-link-656 tag-link-position-7" style="font-size: 18.532110091743pt;" aria-label="code (132 items)">code</a></li>
	<li><a href="https://toidicodedao.com/tag/coder/" class="tag-cloud-link tag-link-10095 tag-link-position-8" style="font-size: 9.6697247706422pt;" aria-label="coder (26 items)">coder</a></li>
	<li><a href="https://toidicodedao.com/tag/coding/" class="tag-cloud-link tag-link-332 tag-link-position-9" style="font-size: 10.440366972477pt;" aria-label="coding (30 items)">coding</a></li>
	<li><a href="https://toidicodedao.com/tag/cv/" class="tag-cloud-link tag-link-10923 tag-link-position-10" style="font-size: 9.2844036697248pt;" aria-label="cv (24 items)">cv</a></li>
	<li><a href="https://toidicodedao.com/tag/cong-nghe/" class="tag-cloud-link tag-link-109747 tag-link-position-11" style="font-size: 13.009174311927pt;" aria-label="công nghệ (48 items)">công nghệ</a></li>
	<li><a href="https://toidicodedao.com/tag/database/" class="tag-cloud-link tag-link-475 tag-link-position-12" style="font-size: 8.256880733945pt;" aria-label="database (20 items)">database</a></li>
	<li><a href="https://toidicodedao.com/tag/developer/" class="tag-cloud-link tag-link-14911 tag-link-position-13" style="font-size: 21.357798165138pt;" aria-label="developer (217 items)">developer</a></li>
	<li><a href="https://toidicodedao.com/tag/du-an/" class="tag-cloud-link tag-link-12100 tag-link-position-14" style="font-size: 8.7706422018349pt;" aria-label="dự án (22 items)">dự án</a></li>
	<li><a href="https://toidicodedao.com/tag/facebook/" class="tag-cloud-link tag-link-81819 tag-link-position-15" style="font-size: 10.697247706422pt;" aria-label="facebook (31 items)">facebook</a></li>
	<li><a href="https://toidicodedao.com/tag/framework/" class="tag-cloud-link tag-link-7136 tag-link-position-16" style="font-size: 10.954128440367pt;" aria-label="framework (33 items)">framework</a></li>
	<li><a href="https://toidicodedao.com/tag/front-end/" class="tag-cloud-link tag-link-278857 tag-link-position-17" style="font-size: 12.238532110092pt;" aria-label="front-end (42 items)">front-end</a></li>
	<li><a href="https://toidicodedao.com/tag/front-end-developer/" class="tag-cloud-link tag-link-18478355 tag-link-position-18" style="font-size: 9.2844036697248pt;" aria-label="front-end developer (24 items)">front-end developer</a></li>
	<li><a href="https://toidicodedao.com/tag/google/" class="tag-cloud-link tag-link-81 tag-link-position-19" style="font-size: 8pt;" aria-label="google (19 items)">google</a></li>
	<li><a href="https://toidicodedao.com/tag/hoc-lap-trinh/" class="tag-cloud-link tag-link-67502629 tag-link-position-20" style="font-size: 8.256880733945pt;" aria-label="học lập trình (20 items)">học lập trình</a></li>
	<li><a href="https://toidicodedao.com/tag/java/" class="tag-cloud-link tag-link-1017 tag-link-position-21" style="font-size: 10.825688073394pt;" aria-label="java (32 items)">java</a></li>
	<li><a href="https://toidicodedao.com/tag/javascript/" class="tag-cloud-link tag-link-457 tag-link-position-22" style="font-size: 15.577981651376pt;" aria-label="javascript (77 items)">javascript</a></li>
	<li><a href="https://toidicodedao.com/tag/js/" class="tag-cloud-link tag-link-21291 tag-link-position-23" style="font-size: 12.238532110092pt;" aria-label="js (42 items)">js</a></li>
	<li><a href="https://toidicodedao.com/tag/junior/" class="tag-cloud-link tag-link-6584 tag-link-position-24" style="font-size: 8pt;" aria-label="junior (19 items)">junior</a></li>
	<li><a href="https://toidicodedao.com/tag/kinh-nghiem/" class="tag-cloud-link tag-link-191470 tag-link-position-25" style="font-size: 19.302752293578pt;" aria-label="kinh nghiệm (150 items)">kinh nghiệm</a></li>
	<li><a href="https://toidicodedao.com/tag/lightning-talk/" class="tag-cloud-link tag-link-3825791 tag-link-position-26" style="font-size: 9.9266055045872pt;" aria-label="lightning talk (27 items)">lightning talk</a></li>
	<li><a href="https://toidicodedao.com/tag/lap-trinh/" class="tag-cloud-link tag-link-405083 tag-link-position-27" style="font-size: 22pt;" aria-label="lập trình (247 items)">lập trình</a></li>
	<li><a href="https://toidicodedao.com/tag/lap-trinh-vien/" class="tag-cloud-link tag-link-11782263 tag-link-position-28" style="font-size: 18.917431192661pt;" aria-label="lập trình viên (140 items)">lập trình viên</a></li>
	<li><a href="https://toidicodedao.com/tag/lap-trinh-web/" class="tag-cloud-link tag-link-12309459 tag-link-position-29" style="font-size: 9.2844036697248pt;" aria-label="lập trình web (24 items)">lập trình web</a></li>
	<li><a href="https://toidicodedao.com/tag/microsoft/" class="tag-cloud-link tag-link-637 tag-link-position-30" style="font-size: 10.311926605505pt;" aria-label="microsoft (29 items)">microsoft</a></li>
	<li><a href="https://toidicodedao.com/tag/nodejs/" class="tag-cloud-link tag-link-31896918 tag-link-position-31" style="font-size: 10.954128440367pt;" aria-label="Nodejs (33 items)">Nodejs</a></li>
	<li><a href="https://toidicodedao.com/tag/phong-van/" class="tag-cloud-link tag-link-3001212 tag-link-position-32" style="font-size: 11.853211009174pt;" aria-label="phỏng vấn (39 items)">phỏng vấn</a></li>
	<li><a href="https://toidicodedao.com/tag/program/" class="tag-cloud-link tag-link-9574 tag-link-position-33" style="font-size: 11.853211009174pt;" aria-label="program (39 items)">program</a></li>
	<li><a href="https://toidicodedao.com/tag/programmer/" class="tag-cloud-link tag-link-37549 tag-link-position-34" style="font-size: 14.293577981651pt;" aria-label="programmer (61 items)">programmer</a></li>
	<li><a href="https://toidicodedao.com/tag/programming/" class="tag-cloud-link tag-link-196 tag-link-position-35" style="font-size: 18.403669724771pt;" aria-label="programming (128 items)">programming</a></li>
	<li><a href="https://toidicodedao.com/tag/review/" class="tag-cloud-link tag-link-1745 tag-link-position-36" style="font-size: 9.4128440366972pt;" aria-label="review (25 items)">review</a></li>
	<li><a href="https://toidicodedao.com/tag/review-sach/" class="tag-cloud-link tag-link-21456865 tag-link-position-37" style="font-size: 10.440366972477pt;" aria-label="review sách (30 items)">review sách</a></li>
	<li><a href="https://toidicodedao.com/tag/senior/" class="tag-cloud-link tag-link-6585 tag-link-position-38" style="font-size: 10.697247706422pt;" aria-label="senior (31 items)">senior</a></li>
	<li><a href="https://toidicodedao.com/tag/senior-developer/" class="tag-cloud-link tag-link-111972 tag-link-position-39" style="font-size: 11.339449541284pt;" aria-label="senior developer (35 items)">senior developer</a></li>
	<li><a href="https://toidicodedao.com/tag/series/" class="tag-cloud-link tag-link-2347 tag-link-position-40" style="font-size: 14.293577981651pt;" aria-label="series (60 items)">series</a></li>
	<li><a href="https://toidicodedao.com/tag/sinh-vien/" class="tag-cloud-link tag-link-1282321 tag-link-position-41" style="font-size: 12.366972477064pt;" aria-label="sinh viên (43 items)">sinh viên</a></li>
	<li><a href="https://toidicodedao.com/tag/stackoverflow/" class="tag-cloud-link tag-link-6553131 tag-link-position-42" style="font-size: 8.5137614678899pt;" aria-label="stackoverflow (21 items)">stackoverflow</a></li>
	<li><a href="https://toidicodedao.com/tag/sach/" class="tag-cloud-link tag-link-60746 tag-link-position-43" style="font-size: 10.954128440367pt;" aria-label="sách (33 items)">sách</a></li>
	<li><a href="https://toidicodedao.com/tag/technical/" class="tag-cloud-link tag-link-624 tag-link-position-44" style="font-size: 9.4128440366972pt;" aria-label="technical (25 items)">technical</a></li>
	<li><a href="https://toidicodedao.com/tag/toi-di-code-dao/" class="tag-cloud-link tag-link-415559376 tag-link-position-45" style="font-size: 9.0275229357798pt;" aria-label="tôi đi code dạo (23 items)">tôi đi code dạo</a></li>
	<li><a href="https://toidicodedao.com/tag/tu-hoc/" class="tag-cloud-link tag-link-37805049 tag-link-position-46" style="font-size: 9.2844036697248pt;" aria-label="tự học (24 items)">tự học</a></li>
	<li><a href="https://toidicodedao.com/tag/web/" class="tag-cloud-link tag-link-151 tag-link-position-47" style="font-size: 11.724770642202pt;" aria-label="web (38 items)">web</a></li>
	<li><a href="https://toidicodedao.com/tag/youtube-channel/" class="tag-cloud-link tag-link-1079725 tag-link-position-48" style="font-size: 11.339449541284pt;" aria-label="youtube channel (35 items)">youtube channel</a></li>
	<li><a href="https://toidicodedao.com/tag/dai-hoc/" class="tag-cloud-link tag-link-11213773 tag-link-position-49" style="font-size: 12.238532110092pt;" aria-label="đại học (42 items)">đại học</a></li>
	<li><a href="https://toidicodedao.com/tag/doc-sach/" class="tag-cloud-link tag-link-4108939 tag-link-position-50" style="font-size: 8pt;" aria-label="đọc sách (19 items)">đọc sách</a></li>
</ul>
</div></aside><aside id="custom_html-7" class="widget_text widget widget_custom_html"><h1 class="widget-title">Bản quyền bài viết</h1><div class="textwidget custom-html-widget">Mọi việc chia sẻ, trích dẫn từ bài viết của blog đều phải tuân theo các quy định sau:
<ul>
<li>Trích dẫn rõ nguồn</li>
<li>Không sử dụng vào mục đích thương mại</li>
<li>Không được sửa đổi hay làm thay đổi nội dung bài viết</li>
</ul>

<br />
© 2015-2019 TÔI ĐI CODE DẠO <br />
<a href="https://creativecommons.org/licenses/by-nc-nd/4.0/"><img src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" alt="Creative Commons License"></a><br />

</div></aside></div><!-- #content-sidebar -->
<div id="secondary">
			<h2 class="site-description">Lập trình viên giỏi không phải chỉ biết code</h2>
	
	
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<aside id="text-18" class="widget widget_text">			<div class="textwidget"><a target="_blank" href="https://toidicodedao.com/?random" rel="noopener noreferrer"><img src="https://toidicodedao.files.wordpress.com/2016/05/button-3.png" />
</a></div>
		</aside><aside id="nav_menu-7" class="widget widget_nav_menu"><h1 class="widget-title">Social Links</h1><div class="menu-social-link-menu-container"><ul id="menu-social-link-menu" class="menu"><li id="menu-item-796" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-796"><a href="http://conanak99.github.io/">Personal Page</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a href="http://vn.linkedin.com/in/huyhoangpham92">LinkedIn</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a href="https://github.com/conanak99">Github</a></li>
<li id="menu-item-1342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1342"><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/toidicodedao/">Facebook (Fan Page)</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a title="Facebook" href="https://www.facebook.com/huyhoang.pham.106">Facebook (Personal Page)</a></li>
</ul></div></aside><aside id="text-15" class="widget widget_text"><h1 class="widget-title">Online users</h1>			<div class="textwidget"><a target="_blank" href="http://whos.amung.us/stats/1ahu94645vpr/" rel="noopener noreferrer">
    <img src="https://whos.amung.us/cwidget/1ahu94645vpr/ffffff030001.png" width="81" height="29" border="0" title="Click to see how many people are online" />
</a></div>
		</aside><aside id="blog-stats-5" class="widget widget_blog-stats"><h1 class="widget-title">Blog Stats</h1>		<ul>
			<li>9,537,379 lượt xem</li>
		</ul>
		</aside><aside id="text-13" class="widget widget_text"><h1 class="widget-title">Liên kết</h1>			<div class="textwidget"><p><a href="https://codeaholicguy.com/">Codeaholicguy</a><br />
<a href="https://thefullsnack.com">The Full Snack Developer</a><br />
<a href="http://kysubrse.com/">Tiger Nguyễn &#8211; BrSE blog</a></p>
<p><a href="https://yellowcodebooks.com/">Yellow Code</a><a href="http://niviki.com/"><br />
Niviki.com</a><br />
<a href="https://cuongquach.com/">Blog Cường Quách</a><br />
<a href="http://www.dammio.com/">Dammio &#8211; Kiến thức CN</a><br />
<a href="https://jaredchu.com/">The Lazy Dev</a></p>
</div>
		</aside><aside id="archives-8" class="widget widget_archive"><h1 class="widget-title">Lưu trữ</h1>
			<ul>
					<li><a href='https://toidicodedao.com/2020/09/'>September 2020</a>&nbsp;(2)</li>
	<li><a href='https://toidicodedao.com/2020/08/'>August 2020</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2020/07/'>July 2020</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2020/06/'>June 2020</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2020/05/'>May 2020</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2020/04/'>April 2020</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2020/03/'>March 2020</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2020/02/'>February 2020</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2020/01/'>January 2020</a>&nbsp;(2)</li>
	<li><a href='https://toidicodedao.com/2019/12/'>December 2019</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2019/11/'>November 2019</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2019/10/'>October 2019</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2019/09/'>September 2019</a>&nbsp;(3)</li>
	<li><a href='https://toidicodedao.com/2019/08/'>August 2019</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2019/07/'>July 2019</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2019/06/'>June 2019</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2019/05/'>May 2019</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2019/04/'>April 2019</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2019/03/'>March 2019</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2019/02/'>February 2019</a>&nbsp;(5)</li>
	<li><a href='https://toidicodedao.com/2019/01/'>January 2019</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2018/12/'>December 2018</a>&nbsp;(7)</li>
	<li><a href='https://toidicodedao.com/2018/11/'>November 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2018/10/'>October 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2018/09/'>September 2018</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2018/08/'>August 2018</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2018/07/'>July 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2018/06/'>June 2018</a>&nbsp;(7)</li>
	<li><a href='https://toidicodedao.com/2018/05/'>May 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2018/04/'>April 2018</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2018/03/'>March 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2018/02/'>February 2018</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2018/01/'>January 2018</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2017/12/'>December 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/11/'>November 2017</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2017/10/'>October 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/09/'>September 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/08/'>August 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/07/'>July 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/06/'>June 2017</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2017/05/'>May 2017</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2017/04/'>April 2017</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2017/03/'>March 2017</a>&nbsp;(10)</li>
	<li><a href='https://toidicodedao.com/2017/02/'>February 2017</a>&nbsp;(7)</li>
	<li><a href='https://toidicodedao.com/2017/01/'>January 2017</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2016/12/'>December 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/11/'>November 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/10/'>October 2016</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2016/09/'>September 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/08/'>August 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/07/'>July 2016</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2016/06/'>June 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/05/'>May 2016</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2016/04/'>April 2016</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2016/03/'>March 2016</a>&nbsp;(10)</li>
	<li><a href='https://toidicodedao.com/2016/02/'>February 2016</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2016/01/'>January 2016</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2015/12/'>December 2015</a>&nbsp;(10)</li>
	<li><a href='https://toidicodedao.com/2015/11/'>November 2015</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2015/10/'>October 2015</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2015/09/'>September 2015</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2015/08/'>August 2015</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2015/07/'>July 2015</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2015/06/'>June 2015</a>&nbsp;(9)</li>
	<li><a href='https://toidicodedao.com/2015/05/'>May 2015</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2015/04/'>April 2015</a>&nbsp;(7)</li>
	<li><a href='https://toidicodedao.com/2015/03/'>March 2015</a>&nbsp;(8)</li>
	<li><a href='https://toidicodedao.com/2015/02/'>February 2015</a>&nbsp;(4)</li>
	<li><a href='https://toidicodedao.com/2015/01/'>January 2015</a>&nbsp;(6)</li>
	<li><a href='https://toidicodedao.com/2014/12/'>December 2014</a>&nbsp;(1)</li>
			</ul>

			</aside>	</div><!-- #primary-sidebar -->
	</div><!-- #secondary -->

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			
			<div class="site-info">
												<a href="https://wordpress.com/?ref=footer_blog" rel="nofollow">Blog at WordPress.com.</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<!--  -->
<script src='//0.gravatar.com/js/gprofiles.js?ver=202037y' id='grofiles-cards-js'></script>
<script id='wpgroho-js-extra'>
var WPGroHo = {"my_hash":""};
</script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1380573781h'></script>

	<script>
		//initialize and attach hovercards to all gravatars
		jQuery( document ).ready( function( $ ) {

			if (typeof Gravatar === "undefined"){
				return;
			}

			if ( typeof Gravatar.init !== "function" ) {
				return;
			}			

			Gravatar.profile_cb = function( hash, id ) {
				WPGroHo.syncProfileData( hash, id );
			};
			Gravatar.my_hash = WPGroHo.my_hash;
			Gravatar.init( 'body', '#wp-admin-bar-my-account' );
		});
	</script>

		<div style="display:none">
	<div class="grofile-hash-map-ff0b006872214c8ef83fe4dcd1f96b48">
	</div>
	<div class="grofile-hash-map-de0cdb393b4fcc100d471591994a5e0b">
	</div>
	<div class="grofile-hash-map-a917e8d7aadf62b97f818be0745f2cbd">
	</div>
	<div class="grofile-hash-map-8e1b2fc25393c5b9236adfd3524074f3">
	</div>
	<div class="grofile-hash-map-2955fc387e89cfd53b87753fe5288e58">
	</div>
	<div class="grofile-hash-map-54b9f7842dadc947a91b7363a9f1c8e3">
	</div>
	<div class="grofile-hash-map-3c7de4ff4cc0407047d71a89c51f00fc">
	</div>
	<div class="grofile-hash-map-079ab47818e4f6883884b20777f6dabb">
	</div>
	<div class="grofile-hash-map-4a79fca869c0c6806ad8d08be6b30b3c">
	</div>
	<div class="grofile-hash-map-2ed3226b62bf23210bf0944409728e7c">
	</div>
	</div>
<script id='highlander-comments-js-extra'>
var HighlanderComments = {"loggingInText":"Logging In\u2026","submittingText":"Posting Comment\u2026","postCommentText":"Post Comment","connectingToText":"Connecting to %s","commentingAsText":"%1$s: You are commenting using your %2$s account.","logoutText":"Log Out","loginText":"Log In","connectURL":"https:\/\/toidicodedao.wordpress.com\/public.api\/connect\/?action=request&domain=toidicodedao.com","logoutURL":"https:\/\/toidicodedao.wordpress.com\/wp-login.php?action=logout&_wpnonce=6b5a752b45","homeURL":"https:\/\/toidicodedao.com\/","postID":"8616","gravDefault":"mystery","enterACommentError":"Please enter a comment","enterEmailError":"Please enter your email address here","invalidEmailError":"Invalid email address","enterAuthorError":"Please enter your name here","gravatarFromEmail":"This picture will show whenever you leave a comment. Click to customize it.","logInToExternalAccount":"Log in to use details from one of these accounts.","change":"Change","changeAccount":"Change Account","comment_registration":"","userIsLoggedIn":"","isJetpack":"","text_direction":"ltr"};
</script>
<script type='text/javascript' src='https://s0.wp.com/_static/??/wp-content/js/jquery/jquery.autoresize.js,/wp-content/mu-plugins/highlander-comments/script.js?m=1573483029j'></script>
			<script type="text/javascript">
			( function( $ ) {
				$( document.body ).on( 'post-load', function () {
					if ( typeof __ATA.insertInlineAds === 'function' ) {
						__ATA.insertInlineAds();
					}
				} );
			} )( jQuery );
			</script>
	<div id="carousel-reblog-box">
		<form action="#" name="carousel-reblog">
			<textarea id="carousel-reblog-content" name="carousel-reblog-content" placeholder="Add your thoughts here... (optional)"></textarea>
			<label for="carousel-reblog-to-blog-id" id="carousel-reblog-lblogid">Post to</label>
			<select name="carousel-reblog-to-blog-id" id="carousel-reblog-to-blog-id">
						</select>

			<div class="submit">
				<span class="canceltext"><a href="#" class="cancel">Cancel</a></span>
				<input type="submit" name="carousel-reblog-submit" class="button" id="carousel-reblog-submit" value="Reblog Post" />
				<input type="hidden" id="carousel-reblog-blog-id" value="81976675" />
				<input type="hidden" id="carousel-reblog-blog-url" value="https://toidicodedao.com" />
				<input type="hidden" id="carousel-reblog-blog-title" value="Từ coder đến developer - Tôi đi code dạo" />
				<input type="hidden" id="carousel-reblog-post-url" value="" />
				<input type="hidden" id="carousel-reblog-post-title" value="" />
			</div>

			<input type="hidden" id="_wpnonce" name="_wpnonce" value="c2cbf0dbf5" /><input type="hidden" name="_wp_http_referer" value="/2020/08/18/khong-gioi-muon-theo-lap-trinh/" />		</form>

		<div class="arrow"></div>
	</div>

	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\/\/toidicodedao.com\/2020\/08\/18\/khong-gioi-muon-theo-lap-trinh\/":8616};
	</script>
				<div id="fb-root"></div>
			<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=249643311490&version=v2.3'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
			<script>
			document.body.addEventListener( 'post-load', function() {
				if ( 'undefined' !== typeof FB ) {
					FB.XFBML.parse();
				}
			} );
			</script>
			<script type="text/javascript">
			jQuery( document ).ready( function() {
				jQuery.getScript( 'https://platform.linkedin.com/in.js?async=true', function success() {
					IN.init();
				});
			});
			jQuery( document.body ).on( 'post-load', function() {
				if ( typeof IN != 'undefined' )
					IN.parse();
			});
			</script><link rel='stylesheet' id='all-css-0-3' href='https://s0.wp.com/wp-content/mu-plugins/carousel/jetpack-carousel.css?m=1592560282h&cssminify=yes' type='text/css' media='all' />
<script id='comment-like-js-extra'>
var comment_like_text = {"loading":"Loading..."};
</script>
<script id='jetpack-facebook-embed-js-extra'>
var jpfbembed = {"appid":"249643311490","locale":"en_US"};
</script>
<script id='wpcom-actionbar-bar-js-extra'>
var actionbardata = {"siteID":"81976675","siteName":"T\u1eeb coder \u0111\u1ebfn developer - T\u00f4i \u0111i code d\u1ea1o","siteURL":"https:\/\/toidicodedao.com","icon":"<img alt='' src='https:\/\/secure.gravatar.com\/blavatar\/54084bfa40206518fb9e01fb53c7ccd9?s=50&d=https%3A%2F%2Fs0.wp.com%2Fi%2Flogo%2Fwpcom-gray-white.png' class='avatar avatar-50' height='50' width='50' \/>","canManageOptions":"","canCustomizeSite":"","isFollowing":"","themeSlug":"pub\/twentyfourteen","signupURL":"https:\/\/wordpress.com\/start\/","loginURL":"https:\/\/wordpress.com\/log-in?redirect_to=https%3A%2F%2Ftoidicodedao.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F&signup_flow=account&domain=toidicodedao.com","themeURL":"https:\/\/wordpress.com\/theme\/twentyfourteen\/","xhrURL":"https:\/\/toidicodedao.com\/wp-admin\/admin-ajax.php","nonce":"b51a5359a2","isSingular":"1","isFolded":"","isLoggedIn":"","isMobile":"","subscribeNonce":"<input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"8431555c48\" \/>","referer":"https:\/\/toidicodedao.com\/2020\/08\/18\/khong-gioi-muon-theo-lap-trinh\/","canFollow":"1","feedID":"46755908","statusMessage":"","customizeLink":"https:\/\/toidicodedao.wordpress.com\/wp-admin\/customize.php?url=https%3A%2F%2Ftoidicodedao.wordpress.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F","postID":"8616","shortlink":"https:\/\/wp.me\/p5xXSr-2eY","canEditPost":"","editLink":"https:\/\/wordpress.com\/block-editor\/post\/toidicodedao.com\/8616","statsLink":"https:\/\/wordpress.com\/stats\/post\/8616\/toidicodedao.com","i18n":{"view":"View site","follow":"Follow","following":"Following","edit":"Edit","login":"Log in","signup":"Sign up","customize":"Customize","report":"Report this content","themeInfo":"Get theme: Twenty Fourteen","shortlink":"Copy shortlink","copied":"Copied","followedText":"New posts from this site will now appear in your <a href=\"https:\/\/wordpress.com\/read\">Reader<\/a>","foldBar":"Collapse this bar","unfoldBar":"Expand this bar","editSubs":"Manage subscriptions","viewReader":"View site in Reader","viewReadPost":"View post in Reader","subscribe":"Sign me up","enterEmail":"Enter your email address","followers":"Join 2,682 other followers","alreadyUser":"Already have a WordPress.com account? <a href=\"https:\/\/wordpress.com\/log-in?redirect_to=https%3A%2F%2Ftoidicodedao.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F&signup_flow=account&domain=toidicodedao.com\">Log in now.<\/a>","stats":"Stats"}};
</script>
<script id='jetpack-carousel-js-extra'>
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"en","ajaxurl":"https:\/\/toidicodedao.com\/wp-admin\/admin-ajax.php","nonce":"8b5ca6f2a5","display_exif":"1","display_comments":"1","display_geo":"1","single_image_gallery":"1","single_image_gallery_media_file":"","background_color":"black","comment":"Comment","post_comment":"Post Comment","write_comment":"Write a Comment...","loading_comments":"Loading Comments...","download_original":"View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Please be sure to submit some text with your comment.","no_comment_email":"Please provide an email address to comment.","no_comment_author":"Please provide your name to comment.","comment_post_error":"Sorry, but there was an error posting your comment. Please try again later.","comment_approved":"Your comment was approved.","comment_unapproved":"Your comment is in moderation.","camera":"Camera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","copyright":"Copyright","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/toidicodedao.wordpress.com\/wp-login.php?redirect_to=https%3A%2F%2Ftoidicodedao.com%2F2020%2F08%2F18%2Fkhong-gioi-muon-theo-lap-trinh%2F","blog_id":"81976675","meta_data":["camera","aperture","shutter_speed","focal_length","copyright"],"local_comments_commenting_as":"<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>","reblog":"Reblog","reblogged":"Reblogged","reblog_add_thoughts":"Add your thoughts here... (optional)","reblogging":"Reblogging...","post_reblog":"Post Reblog","stats_query_args":"blog=81976675&v=wpcom&tz=7&user_id=0&subd=toidicodedao","is_public":"1","reblog_enabled":""};
</script>
<script type='text/javascript' src='https://s0.wp.com/_static/??-eJyVketOwzAMhV+I1EMDxH4gHgWl7dnmNjcSp2U8PSlsk7ahIH7FOvbnywnNQXXeCZzQkKjHxB3CRzOkO7pMBZ/EIiW9wy/Z4T0jHo5Pw25izH+WDZCgu1FFJP686WqzCibv2CUyPCJRgTL22vUGsVLceWuLpH6gYaFbSjOH2oQb6EI4gew6k/vLgohgDo1ld91d9ih+UcgtyVyEw9bnKIBb6G12nbB3qbLTzP0Okgi5ZP3IUEbPJLDBaMGVXulztJneyvq01R3aQinYFn2F0n25SbU6ktVJEEuk/IQYeTHgrP2zg8SySe1o/W3LAp2j2rfp6HOCOd2oTkJtwsjJQtS6WR0t8dGW+lf7cv+4ed48PaxXm+ELtjkp0A=='></script>
<script id='crowdsignal-rating-js-before'>
<!--//--><![CDATA[//><!--
PDRTJS_settings_8005199_post_8616={"id":8005199,"unique_id":"wp-post-8616","title":"Kh%C3%B4ng%20gi%E1%BB%8Fi%20c%C3%A1i%20n%C3%A0y%2C%20kh%C3%B4ng%20bi%E1%BA%BFt%20c%C3%A1i%20kia%20th%C3%AC%20c%C3%B3%20theo%20l%E1%BA%ADp%20tr%C3%ACnh%20%C4%91%C6%B0%E1%BB%A3c%20kh%C3%B4ng%3F","permalink":"https:\/\/toidicodedao.com\/2020\/08\/18\/khong-gioi-muon-theo-lap-trinh\/","item_id":"_post_8616"}; if ( typeof PDRTJS_RATING !== 'undefined' ){if ( typeof PDRTJS_8005199_post_8616 == 'undefined' ){PDRTJS_8005199_post_8616 = new PDRTJS_RATING( PDRTJS_settings_8005199_post_8616 );}}
//--><!]]>
</script>
<script src='https://polldaddy.com/js/rating/rating.js?ver=wpcom' id='crowdsignal-rating-js'></script>
<script id='sharing-js-js-extra'>
var sharing_js_options = {"lang":"en","counts":"1","is_stats_active":"1"};
</script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/post-flair/sharing/sharing.js?m=1595340102h'></script>
<script type='text/javascript'>
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-facebook', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=600,height=400' );
				return false;
			});
</script>
<script type="text/javascript">
// <![CDATA[
(function() {
try{
  if ( window.external &&'msIsSiteMode' in window.external) {
    if (window.external.msIsSiteMode()) {
      var jl = document.createElement('script');
      jl.type='text/javascript';
      jl.async=true;
      jl.src='/wp-content/plugins/ie-sitemode/custom-jumplist.php';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(jl, s);
    }
  }
}catch(e){}
})();
// ]]>
</script>		<iframe src='https://widgets.wp.com/likes/master.html?ver=20200826#ver=20200826' scrolling='no' id='likes-master' name='likes-master' style='display:none;'></iframe>
		<div id='likes-other-gravatars'><div class="likes-text"><span>%d</span> bloggers like this:</div><ul class="wpl-avatars sd-like-gravatars"></ul></div>
<script src="//stats.wp.com/w.js?61" type="text/javascript" async defer></script>
<script type="text/javascript">
_tkq = window._tkq || [];
_stq = window._stq || [];
_tkq.push(['storeContext', {'blog_id':'81976675','blog_tz':'7','user_lang':'en','blog_lang':'en','user_id':'0'}]);
_stq.push(['view', {'blog':'81976675','v':'wpcom','tz':'7','user_id':'0','post':'8616','subd':'toidicodedao'}]);
_stq.push(['extra', {'crypt':'UE5tW3cvZGQ/JUs1UEpqTEJUUE5JaFo0OVtmenYtJnY5WnxkNjJtLlZURGQvOTgrbVouTmJ8RjRpR0tENFh3VHU/N2NWVlFQRGFaTXpRZmkwL1M9MVJNbnF3Ry5xclhIK1ZlSmJQSWYvZVJZY2R5Z3EsfCxmZm0mS005OHxaLmg0cmMsTFIxUEMxdERXUC9FUFFPPT1QTSZuX29nLUtxRGt2LTl1aXwuR2R5d3JMVWRWK2JhSWxDcSZpVHdfa3cmRnUuQlhfdGJbW0lEWnhSNVRoOSVRMmlFdGo2OH5fZVBOZ3QmcjZpOUhtM0lyX1N2WWtJW1U0SzEvN3FtK3g3bDQ5cWU3LzRiRA=='}]);
_stq.push([ 'clickTrackerInit', '81976675', '8616' ]);
	</script>
<noscript><img src="https://pixel.wp.com/b.gif?v=noscript" style="height:0px;width:0px;overflow:hidden" alt="" /></noscript>
<script>
if ( 'object' === typeof wpcom_mobile_user_agent_info ) {

	wpcom_mobile_user_agent_info.init();
	var mobileStatsQueryString = "";
	
	if( false !== wpcom_mobile_user_agent_info.matchedPlatformName )
		mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;
	
	if( false !== wpcom_mobile_user_agent_info.matchedUserAgentName )
		mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;
	
	if( wpcom_mobile_user_agent_info.isIPad() )
		mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

	if( "" != mobileStatsQueryString ) {
		new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
	}
	
}
</script></body>
</html>
