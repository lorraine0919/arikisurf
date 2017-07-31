window.addEventListener('load',doFirst,false);

function doFirst() {

    //先跟HTML畫面產生關連，再建事件聆聽的功能
    document.getElementById('file').onchange = fileChange;
}
function fileChange(){
    var file = document.getElementById('file').files[0];
    var content = '';

    // content += 'File Name: '+file.name+'\n';
    // content += 'File Size: '+file.size+' byte(s)\n';
    // content += 'File Type: '+file.type+'\n';
    // content += 'Last Modified: '+file.lastModifiedDate.toDateString()+'\n';
    // document.getElementById('fileInfo').innerHTML = content;

    var readFile = new FileReader();
    readFile.readAsDataURL(file);
    readFile.addEventListener('load',function(){
        var image = document.getElementById('image');
        image.src = readFile.result;
        image.style.maxWidth = '150px';
        image.style.maxHeight = '100px';
    },false);

}
