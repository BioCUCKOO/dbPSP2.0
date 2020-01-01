<?php
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>dbPSP2.0: Database of Phosphorylation Sites in Prokaryotes</title>
		<link rel="icon" href= "images/GPS.png" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<script type="text/javascript" src="js/jquery-3.3.1-min.js"></script>
	<script type="text/javascript">
		$(function(){
			//
			$("#browser > li").addClass("expandable");
			$('.expandable').click(function(){
				var span$ = $(this).closest('.expandable').find('.folder');
				var list$ = $(this).closest('.expandable').find('ul');
				if(list$.is(':hidden')){
					list$.show();
					span$.css({background:'url(images/left_manu_main2.png) 0 0 no-repeat'});
				}else{
					list$.hide();
					span$.css({background:'url(images/left_manu_main_close2.png) 0 0 no-repeat'});
				}
			});
			//
			var php=window.location.pathname;
			var file=php.split("/");
			var current=file[file.length-1];
			if(current==''){
				current="index.php";
			}
			//var navli=$("a[href^='"+current+"']").parent();
			var navli=$("a[href^='"+current+"']").parent("li");
			navli.css({background:'url(images/manu_main11.png) 0 0 no-repeat'});
			//
			$(".current").css({background:'url(images/manu_main11.png) 0 0 no-repeat'});
			$("#gbnav li").mouseover(function(){
				navli.css({background:''});
				$(this).css({background:'url(images/manu_main11.png) 0 0 no-repeat'});
			});
			$("#gbnav li").mouseout(function(){
				$(this).css({background:''});
				navli.css({background:'url(images/manu_main11.png) 0 0 no-repeat'});
			});
		});
	</script>
	<script type="text/javascript">
		function wsug(e, str){
			var oThis = arguments.callee;
			if(!str) {
				oThis.sug.style.visibility = 'hidden';
				document.onmousemove = null;
				return;
			}
			if(!oThis.sug){
				var div = document.createElement('div'), css = 'top:0; left:0; position:absolute; z-index:100; visibility:hidden';
				div.style.cssText = css;
				div.setAttribute('style',css);
				var sug = document.createElement('div'), css= 'font:normal 12px/16px "宋体";font-family:Arial; white-space:nowrap; color:#666; padding:3px; position:absolute; left:0; top:0; z-index:10; background:#f9fdfd; border:1px solid #0aa';
				sug.style.cssText = css;
				sug.setAttribute('style',css);
				var dr = document.createElement('div'), css = 'position:absolute; top:3px; left:3px; background:#333; filter:alpha(opacity=50); opacity:0.5; z-index:9';
				dr.style.cssText = css;
				dr.setAttribute('style',css);
				var ifr = document.createElement('iframe'), css='position:absolute; left:0; top:0; z-index:8; filter:alpha(opacity=0); opacity:0';
				ifr.style.cssText = css;
				ifr.setAttribute('style',css);
				div.appendChild(ifr);
				div.appendChild(dr);
				div.appendChild(sug);
				div.sug = sug;
				document.body.appendChild(div);
				oThis.sug = div;
				oThis.dr = dr;
				oThis.ifr = ifr;
				div = dr = ifr = sug = null;
			}
			var e = e || window.event, obj = oThis.sug, dr = oThis.dr, ifr = oThis.ifr;
			obj.sug.innerHTML = str;
			var w = obj.sug.offsetWidth, h = obj.sug.offsetHeight, dw = document.documentElement.clientWidth||document.body.clientWidth; dh = document.documentElement.clientHeight || document.body.clientHeight;
			var st = document.documentElement.scrollTop || document.body.scrollTop, sl = document.documentElement.scrollLeft || document.body.scrollLeft;
			var left = e.clientX +sl +17 + w < dw + sl  &&  e.clientX + sl + 15 || e.clientX +sl-8 - w, top = e.clientY + st + 17;
			obj.style.left = left+ 10 + 'px';
			obj.style.top = top + 10 + 'px';
			dr.style.width = w + 'px';
			dr.style.height = h + 'px';
			ifr.style.width = w + 3 + 'px';
			ifr.style.height = h + 3 + 'px';
			obj.style.visibility = 'visible';
			document.onmousemove = function(e){
				var e = e || window.event, st = document.documentElement.scrollTop || document.body.scrollTop, sl = document.documentElement.scrollLeft || document.body.scrollLeft;
				var left = e.clientX +sl +17 + w < dw + sl  &&  e.clientX + sl + 15 || e.clientX +sl-8 - w, top = e.clientY + st +17 + h < dh + st  &&  e.clientY + st + 17 || e.clientY + st - 5 - h;
				obj.style.left = left + 'px';
				obj.style.top = top + 'px';
			}
		}
	</script>
	</head>
	<!-- The structure of this file is exactly the same as 2col_rightNav.html;
	the only difference between the two is the stylesheet they use -->