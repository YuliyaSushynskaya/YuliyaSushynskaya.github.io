var $leftSecond, $leftFirst, $leftCenter ;
	$leftFirst = parseFloat((getComputedStyle(document.getElementById('first'))).left);
	$leftCenter = parseFloat((getComputedStyle(document.getElementById('center'))).right);
	$leftSecond = parseFloat((getComputedStyle(document.getElementById('second'))).left);
function cursorXY(e) 
{
	document.getElementById('first').style.left = $leftFirst + e.pageX/150 + 'px';	
	document.getElementById('center').style.left = $leftCenter + e.pageX/90 + 'px';	
	document.getElementById('second').style.left = $leftSecond + e.pageX/15 + 'px';	
}