/*
	Easybox v1.3 - Lightweight easy to use lightbox clone for jQuery
	Based on Slimbox2 by Christophe Beyls <http://www.digitalia.be>

	Copyright (C) 2011 by Vincent Wochnik

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.

	This code automatically integrates Picasa Web Albums thumbnails with EasyBpx.
	It will scan for all links around thumbnail images pointing to Picasa Web Albums photo PAGES.
	Note that you don't need to add rel="lightbox" to these links.
	When clicking on a Picasa Web Albums thumbnail, EasyBox will open and display the medium-sized image.
	The title attribute of the link (or the alt attribute of the thumbnail if not available) will be used
	as description text, and a link to the Picasa Web Albums photo page will be added under the description.

	Add the following code to the autoload code block.
*/
if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry|msie 6/i.test(navigator.userAgent)) {
	jQuery(function($) {
		$("a[href^='http://picasaweb.google.'] > img:first-child[src]").parent().easybox({/* custom options here */}, function(el) {
			return {url: el.firstChild.src.replace(/\/s\d+(?:\-c)?\/([^\/]+)$/, "/s512/$1"),
				caption: (el.title || el.firstChild.alt) + '<br /><a href="' + el.href + '">Picasa Web Albums page</a>'};
		});
	});
}
