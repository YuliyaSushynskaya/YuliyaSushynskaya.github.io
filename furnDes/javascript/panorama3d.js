var camera, scene, renderer;
var texture_placeholder,
isUserInteracting = false,
onMouseDownMouseX = 0, onMouseDownMouseY = 0,
lon = 90, onMouseDownLon = 0,
lat = 0, onMouseDownLat = 0,
phi = 0, theta = 0,
target = new THREE.Vector3();


init();

animate();

/*панорама в блоке(маленькая). Применили опирование функции, объяснение внизу */
function init() {
	
	document.getElementById( 'menu' ).style.display="block";
	
	document.getElementById( 'container1' ).style.display="none";
	 document.getElementById('container1').innerHTML = ''; //удаляем предыдущие варианты, т к функция создаем новые контейнеры
	document.getElementById( 'panapamaButton' ).style.display="none";
	document.getElementById( 'container' ).style.display="block";
	//document.getElementById( 'svgPanorama' ).style.opacity="1";
	var container, mesh;
	container = document.getElementById( 'container' );
	camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 1100 );
	scene = new THREE.Scene();
	texture_placeholder = document.createElement( 'canvas' );
	texture_placeholder.width = 128;
	texture_placeholder.height = 128;
	var context = texture_placeholder.getContext( '2d' );
	context.fillStyle = 'rgb( 200, 200, 200 )';
	context.fillRect( 0, 0, texture_placeholder.width, texture_placeholder.height );
	var materials = [
		loadTexture( 'img/px.jpg' ), // right
		loadTexture( 'img/nx.jpg' ), // left
		loadTexture( 'img/py.jpg' ), // top
		loadTexture( 'img/ny.jpg' ), // bottom
		loadTexture( 'img/pz.jpg' ), // back
		loadTexture( 'img/nz.jpg' )  // front
	];
	
	var geometry = new THREE.BoxGeometry( 300, 300, 300, 7, 7, 7 );
	geometry.scale( - 1, 1, 1 );
	mesh = new THREE.Mesh( geometry, materials );
	scene.add( mesh );
	
	renderer = new THREE.CanvasRenderer();
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth/2, window.innerHeight/2 );
	container.appendChild( renderer.domElement );
	document.addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'mouseup', onDocumentMouseUp, false );
	document.addEventListener( 'wheel', onDocumentMouseWheel, false );
	document.addEventListener( 'touchstart', onDocumentTouchStart, false );
	document.addEventListener( 'touchmove', onDocumentTouchMove, false );
	window.addEventListener( 'resize', onWindowResize, false );
	
}


/*панорама на весь экран*/
function paralaks3d1() {
	
	document.getElementById( 'container' ).style.display="none";
	
	document.getElementById( 'menu' ).style.display="none";
	document.getElementById('container').innerHTML = '';
	document.getElementById( 'container1' ).style.display="block";
	document.getElementById( 'container1' ).style.zIndex="1";
	document.getElementById( 'container1' ).style.overflow="hidden";
	document.getElementById( 'container1' ).style.position="fixed";
	document.getElementById( 'container1' ).style.left="0";
	document.getElementById( 'container1' ).style.top="0";
	document.getElementById( 'panapamaButton' ).style.display="block";
	document.getElementById( 'panapamaButton' ).style.top="0";
	document.getElementById( 'panapamaButton' ).style.left="0";
	document.getElementById( 'panapamaButton' ).style.position="fixed";
	document.getElementById( 'panapamaButton' ).style.zIndex="2";
	//document.getElementById( 'svgPanorama' ).style.opacity="0";
	var container, mesh;
	container = document.getElementById( 'container1' );
	camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 1100 );
	scene = new THREE.Scene();
	texture_placeholder = document.createElement( 'canvas' );
	texture_placeholder.width = 128;
	texture_placeholder.height = 128;
	var context = texture_placeholder.getContext( '2d' );
	
	context.fillStyle = 'rgb( 200, 200, 200 )';
	context.fillRect( 0, 0, texture_placeholder.width, texture_placeholder.height );
	var materials = [
		loadTexture( 'img/px.jpg' ), // right
		loadTexture( 'img/nx.jpg' ), // left
		loadTexture( 'img/py.jpg' ), // top
		loadTexture( 'img/ny.jpg' ), // bottom
		loadTexture( 'img/pz.jpg' ), // back
		loadTexture( 'img/nz.jpg' )  // front
	];
	
	var geometry = new THREE.BoxGeometry( 300, 300, 300, 7, 7, 7 );
	geometry.scale( - 1, 1, 1 );
	mesh = new THREE.Mesh( geometry, materials );
	scene.add( mesh );
	renderer = new THREE.CanvasRenderer();
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight );
	container.appendChild( renderer.domElement );
	document.addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'mouseup', onDocumentMouseUp, false );
	document.addEventListener( 'wheel', onDocumentMouseWheel, false );
	document.addEventListener( 'touchstart', onDocumentTouchStart, false );
	document.addEventListener( 'touchmove', onDocumentTouchMove, false );
	window.addEventListener( 'resize', onWindowResize, false );
}

function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth/2, window.innerHeight/2);
}

function loadTexture( path ) {
	var texture = new THREE.Texture( texture_placeholder );
	var material = new THREE.MeshBasicMaterial( { map: texture, overdraw: 0.5 } );
	var image = new Image();
	
	image.onload = function () {
		texture.image = this;
		texture.needsUpdate = true;
	};
	
	image.src = path;
	return material;
}

function onDocumentMouseDown( event ) {
	event.preventDefault();
	isUserInteracting = true;
	onPointerDownPointerX = event.clientX;
	onPointerDownPointerY = event.clientY;
	onPointerDownLon = lon;
	onPointerDownLat = lat;
}

function onDocumentMouseMove( event ) {
	if ( isUserInteracting === true ) {
		lon = ( onPointerDownPointerX - event.clientX ) * 0.1 + onPointerDownLon;
		lat = ( event.clientY - onPointerDownPointerY ) * 0.1 + onPointerDownLat;
	}
}

function onDocumentMouseUp( event ) {
	isUserInteracting = false;
}

function onDocumentMouseWheel( event ) {
	var fov = camera.fov + event.deltaY * 0.05;
	camera.fov = THREE.Math.clamp( fov, 10, 75 );
	camera.updateProjectionMatrix();
}

function onDocumentTouchStart( event ) {
	if ( event.touches.length == 1 ) {
		event.preventDefault();
		onPointerDownPointerX = event.touches[ 0 ].pageX;
		onPointerDownPointerY = event.touches[ 0 ].pageY;
		onPointerDownLon = lon;
		onPointerDownLat = lat;
	}
}

function onDocumentTouchMove( event ) {
	if ( event.touches.length == 1 ) {
		event.preventDefault();
		lon = ( onPointerDownPointerX - event.touches[0].pageX ) * 0.1 + onPointerDownLon;
		lat = ( event.touches[0].pageY - onPointerDownPointerY ) * 0.1 + onPointerDownLat;
	}
}

function animate() {
	requestAnimationFrame( animate );
	update();
}

function update() 
{
	if ( isUserInteracting === false ) {
		lon += 0.1;
	}
	lat = Math.max( - 85, Math.min( 85, lat ) );
	phi = THREE.Math.degToRad( 90 - lat );
	theta = THREE.Math.degToRad( lon );
	target.x = 500 * Math.sin( phi ) * Math.cos( theta );
	target.y = 500 * Math.cos( phi );
	target.z = 500 * Math.sin( phi ) * Math.sin( theta );
	camera.lookAt( target );
	renderer.render( scene, camera );
}

// FullScreen() - 2й вариант работет некорректно, при возвращении обратнно на страницу, не уменьшает блок - это связанно с  function onWindowResize() строкой renderer.setSize( window.innerWidth, window.innerHeight) она отвечает за маштаб
/*function errorHandler() {
    alert('mozfullscreenerror');
}
document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);

function toggleFullScreen() {
	var elem = document.getElementsByTagName("canvas")[0];
   if (!elem.fullscreenElement && !elem.mozFullScreenElement && !elem.webkitFullscreenElement) {
       if ( elem.requestFullscreen) {
            elem.requestFullscreen();
			erer.setSize( window.innerWidth, window.innerHeight);
		renderer.setSize( window.innerWidth, window.innerHeight);	
        } else if (elem.mozRequestFullScreen) {
           elem.mozRequestFullScreen();
		   renderer.setSize( window.innerWidth, window.innerHeight);	
        } else if (elem.webkitRequestFullscreen) {
    		elem.webkitRequestFullscreen();
			renderer.setSize( window.innerWidth, window.innerHeight);
		}
    } else {
        if (elem.cancelFullScreen) {
            elem.cancelFullScreen();
        } else if (elem.mozCancelFullScreen) {
            elem.mozCancelFullScreen();
        } else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen();
		}
    }
}
document.addEventListener('keydown', function (e) {
    if (e.keyCode == 13 || e.keyCode == 70) {
        toggleFullScreen();
}
}, false);
*/

