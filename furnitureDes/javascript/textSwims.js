(function () 
{
	var j=1;
    var arr = " Творческий коллектив проффессионалов и единомышленников сделает качественную и надежную мебель.Советы опытного дизайнера помогут выбрать именно Ваш интерьер. Наше стремление делать добро заложено в надежной и качественной мебели. ".split(''),
    elem = document.getElementById( 'textSwims' ), i = -1;
    return function()
	{
		if ( ++i < arr.length ) 
		{
			elem.innerHTML = elem.innerHTML+'<span class="textSwimsClass" style="animation-delay:'+(j=j+0.05)+'s">'+arr[ i ]+'</span>';
			setTimeout( arguments.callee, .1 );
		}
	}();
})();