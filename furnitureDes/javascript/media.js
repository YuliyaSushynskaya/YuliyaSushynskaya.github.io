function playAudio()
{
	var imgAudio=document.getElementById("audioButtom");
	var myaudio = document.getElementById("audioVolu");
	myaudio.paused ? myaudio.play() : myaudio.pause();
	imgAudio.className = (imgAudio.className == 'square' ? 'square-new' : 'square')
}

