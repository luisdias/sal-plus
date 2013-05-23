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

	With the following code, EasyBox will activate itself automatically on all links pointing to images,
	or more specifically all links having URLs ending with: ".jpg" or ".png" or ".gif".

	Replace the default autoload code block with this one.
*/
if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry|msie 6/i.test(navigator.userAgent)) {
	jQuery(function($) {
		$("a[href]").filter(function() { return /\.(jpg|png|gif)$/i.test(this.href); }).easybox({/* custom options here */}, null, function(el) {
			return (this == el) || (this.parentNode && (this.parentNode == el.parentNode));
		});
	});
}
