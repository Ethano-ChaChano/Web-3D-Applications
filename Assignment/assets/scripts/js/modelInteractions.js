
function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;
function toggleSpin()
{
	spinning = !spinning;
	document.getElementById('Cokemodel__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('Peppermodel__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('Spritemodel__RotationTimer').setAttribute('enabled', spinning.toString());
}

function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;
function toggleLight()
{
	lightOn = !lightOn;
	document.getElementById('Cokemodel__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('Cokemodel__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('Cokemodel__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('Cokemodel__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('Cokemodel__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('Cokemodel__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('Cokemodel__CameraBottom').setAttribute('bind', 'true');
}