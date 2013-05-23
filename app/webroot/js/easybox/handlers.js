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
*/
(function($) {
	$(function() {
		// iframe resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				return (r.url) ? true : false;
			},
			postLoad: function(r) {
				r.obj = $("<iframe width=\""+r.width+"\" height=\""+r.height+"\" src=\""+r.url+"\" frameborder=\"0\"></iframe>")[0];
			}		});
		
		// html resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				return (r.html) ? true : false;
			},
			postLoad: function(r) {
				r.obj = $('<div style="width:'+r.width+'px;height:'+r.height+'px">'+r.html+'</div>')[0];
			}
		});
		
		// inline resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				var res = /^(.*)\#([A-Za-z0-9\-_]*)$/i.exec(r.url);
				if ((res != null) && ($('#'+res[2]).length)) {
					r.id = res[2];
					return true;
				}
				return false;
			},
			preLoad: function(r, loaded) {
				var o = $('#'+r.id)[0];
				if (o) {
				      r.width = r.width || $(o).width();
				      r.height = r.height || $(o).height();
				      r.obj = o;
				} else {
				      r.error = true;
				}
				loaded();
			},
			postLoad: function(r) {
				r.parent = $(r.obj).parent()[0];
				r.display = $(r.obj).css('display');
			},
			show: function(r) {
				$(r.obj).css('display', 'block');
			},
			hide: function(r) {
				$(r.parent).append($(r.obj).css('display', r.display));
			}
		});
		
		// image resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				return /(\.jpg|\.jpeg|\.png|\.gif)$/i.test(r.url);
			},
			preLoad: function(r, loaded) {
				var obj = new Image();
				obj.onload = function() {
					r.width = r.width || this.width;
					r.height = r.height || this.height;
					loaded();
				};
				obj.onerror = function() {
					r.error = true;
					loaded();
				}
				obj.src = r.url;
			},
			postLoad: function(r) {
				r.obj = $("<img src=\""+r.url+"\" style=\"display:block;width:"+r.width+"px;height:"+r.height+"px\" alt=\""+r.caption+"\" />")[0];
			}
		});
		
		// video resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				return /(\.mpg|\.mpeg|\.mp4|\.ogv|\.webm|\.flv)$/i.test(r.url);
			},
			postLoad: function(r) {
				r.obj = $('<div style="overflow:hidden;width:'+r.width+'px;height:'+r.height+'px" />')[0];
			},

			show: function(r) {
				// check for flowplayer
				var p = (!!$.fn.flowplayer);

				$(r.obj).append($("<video src=\""+r.url+"\" width=\""+r.width+"\" height=\""+r.height+"\""+(!p ? " controls=\"controls\"" : "")+" />"));

				if (p)
					$(r.obj).flowplayer();
			}
		});
		
		// youtube video resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				var res = /^http\:\/\/www\.youtube\.com\/watch\?v=([A-Za-z0-9\-_]*)(&(.*))?$/i.exec(r.url);
				if (res != null) {
					r.id = res[1];
					return true;
				}
				return false;
			},
			preLoad: function(r, loaded) {
				var params = {
					type: 'GET',
					dataType: 'jsonp',
					timeout: 2000,
					error: function(x, t) {
						if (t != "abort") {
							r.error = true;
							loaded();
						}
					},
					success: function(s) {
						if ((!s.error) && (s.data) && (s.data.accessControl.embed == "allowed")) {
							var w = (s.data.aspectRatio == "widescreen");
							r.height = r.height || 720;
							r.width = Math.round(r.height*((w) ? (16.0/9.0) : (4.0/3.0)));
						} else
							r.error = true;
						loaded();
					}};
				$.ajax('http://gdata.youtube.com/feeds/api/videos/'+r.id+'?v=2&alt=jsonc', params);
			},
			postLoad: function(r) {
				var p = '?version=3&autohide=1&autoplay=1&rel=0'; // params
				//if ((options.ytPlayerTheme) && ((t = /^([a-z]*),([a-z]*)$/.exec(options.ytPlayerTheme)) != null))
				//	p += '&theme='+t[1]+'&color='+t[2];
				r.obj = $("<iframe src=\"http://www.youtube.com/embed/"+r.id+p+"\" width=\""+r.width+"\" height=\""+r.height+"\" frameborder=\"0\"></iframe>")[0];
			}
		});
		
		// vimeo video resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				var res =  /^http\:\/\/vimeo\.com\/([0-9]*)(.*)?$/i.exec(r.url);
				if (res != null) {
					r.id = res[1];
					return true;
				}
				return false;
			},
			preLoad: function(r, loaded) {
				var params = {
					type: 'GET',
					dataType: 'jsonp',
					timeout: 2000,
					error: function(x, t) {
						if (t != "abort") {
							r.error = true;
							loaded();
						}
					},
					success: function(s) {
						if (s.length) {
							if ((s[0].embed_privacy == 'anywhere') || (s[0].embed_privacy == 'approved')) {
								if ((s[0].width) && (s[0].height)) {
									r.width = s[0].width;
									r.height = s[0].height;
								}
							} else {
								r.error = true;
							}
						}
						loaded();
					}};
				$.ajax('http://vimeo.com/api/v2/video/'+r.id+'.json', params);
			},
			postLoad: function(r) {
				var p = '?title=0&byline=0&portrait=0&autoplay=true';
				r.obj = $("<iframe src=\"http://player.vimeo.com/video/"+r.id+p+"\" width=\""+r.width+"\" height=\""+r.height+"\" frameborder=\"0\"></iframe>")[0];
			}
		});
		
		// dailymotion video resource handler
		$.easybox.resourceHandler({
			identify: function(r) {
				if (!r.url) return false;
				var res =  /^http\:\/\/www\.dailymotion\.com\/video\/([A-Za-z0-9]*)(.*)?$/i.exec(r.url);
				if (res != null) {
					r.id = res[1];
					return true;
				}
				return false;
			},
			preLoad: function(r, loaded) {
				var params = {
					type: 'GET',
					dataType: 'jsonp',
					timeout: 2000,
					error: function(x, t) {
						if (t != "abort") {
							r.error = true;
							loaded();
						}
					},
					success: function(s) {
						if (s.allow_embed) {
							var q = s.aspect_ratio;
							r.height = r.height || 720;
							r.width = Math.round(r.height*q);
						} else {
							r.error = true;
						}
						loaded();
					}};
				$.ajax('https://api.dailymotion.com/video/'+r.id+'?fields=allow_embed,aspect_ratio', params);
			},
			postLoad: function(r) {
				var p = '?autoplay=1';
				r.obj = $("<iframe src=\"http://www.dailymotion.com/embed/video/"+r.id+p+"\" width=\""+r.width+"\" height=\""+r.height+"\" frameborder=\"0\"></iframe>")[0];
			}
		});
	});
})(jQuery);
