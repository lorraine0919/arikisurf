
function doFirst(){
	document.getElementById('backstage_news_img').onchange = filechange;
	// console.log('1');
}
function filechange(){
	var file = document.getElementById('backstage_news_img').files[0];
	var content = '';
	// console.log('1');
	var readFile = new FileReader();
	readFile.readAsDataURL(file);
	readFile.addEventListener('load',function(){
		var image = document.getElementById('preview-image');
		image.src = readFile.result;
		image.style.maxWidth = '100px';
		image.style.maxHeight = '150px';
	},false);
}

window.addEventListener('load',doFirst,false);

function doFirst2(){
	document.getElementById('backstage_newsedit_img').onchange = fileChange;
	// console.log('1');
}
function fileChange(){
	var editfile = document.getElementById('backstage_newsedit_img').files[0];
	var content = '';
	// console.log('1');
	var readFile = new FileReader();
	readFile.readAsDataURL(editfile);
	readFile.addEventListener('load',function(){
		var images = document.getElementById('preview-edit-image');
		images.src = readFile.result;
		images.style.maxWidth = '100px';
		images.style.maxHeight = '150px';
	},false);
}

window.addEventListener('load',doFirst2,false);