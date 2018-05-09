<<<<<<< HEAD
(function() {
	var pre = document.getElementsByTagName('pre'),
	pl = pre.length;
	for (var i = 0; i < pl; i++) {
		pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
    		var num = pre[i].innerHTML.split(/\n/).length;
   		 for (var j = 0; j < (num - 1); j++) {
      			var line_num = pre[i].getElementsByTagName('span')[0];
    			  line_num.innerHTML += '<span>' + (j + 1) + '</span>';	
		}
	}
=======
(function() {
	var pre = document.getElementsByTagName('pre'),
	pl = pre.length;
	for (var i = 0; i < pl; i++) {
		pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
    		var num = pre[i].innerHTML.split(/\n/).length;
   		 for (var j = 0; j < (num - 1); j++) {
      			var line_num = pre[i].getElementsByTagName('span')[0];
    			  line_num.innerHTML += '<span>' + (j + 1) + '</span>';	
		}
	}
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
}) ();