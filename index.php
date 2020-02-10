<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My first three.js app</title>
	<style>
		body { margin: 0; }
		canvas { display: block; }
	</style>
</head>
<body>
<h1><a href="https://threejs.org/docs/index.html#manual/en/introduction/Creating-a-scene" title="Creating a scene">Creating a scene</a></h1>
<script src="https://threejs.org/build/three.js"></script>
<script>
	// // Creating a scene
	// //
	// var scene = new THREE.Scene();
	// var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
	//
	// // Adding a cube
	// var renderer = new THREE.WebGLRenderer();
	// renderer.setSize( window.innerWidth, window.innerHeight );
	// document.body.appendChild( renderer.domElement );
	//
	// var geometry = new THREE.BoxGeometry();
	// var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
	// var cube = new THREE.Mesh( geometry, material );
	// scene.add( cube );
	//
	// camera.position.z = 5;
	//
	// // Rendering scene
	// var animate = function () {
	// 	requestAnimationFrame( animate );
	//
	// 	// Animate Cube
	// 	cube.rotation.x += 0.01;
	// 	cube.rotation.y += 0.01;
	//
	// 	renderer.render( scene, camera );
	// };
	//
	// animate();




	import * as THREE from 'js/three.module.js';

	var camera, scene, renderer;
	var geometry, material, mesh;

	init();
	animate();

	function init() {

		camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.01, 10 );
		camera.position.z = 1;

		scene = new THREE.Scene();

		geometry = new THREE.BoxGeometry( 0.2, 0.2, 0.2 );
		material = new THREE.MeshNormalMaterial();

		mesh = new THREE.Mesh( geometry, material );
		scene.add( mesh );

		renderer = new THREE.WebGLRenderer( { antialias: true } );
		renderer.setSize( window.innerWidth, window.innerHeight );
		document.body.appendChild( renderer.domElement );

	}

	function animate() {

		requestAnimationFrame( animate );

		mesh.rotation.x += 0.01;
		mesh.rotation.y += 0.02;

		renderer.render( scene, camera );

	}


</script>
</body>
</html>