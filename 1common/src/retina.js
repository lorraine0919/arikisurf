$(function() {

  if (window.devicePixelRatio == 2) {

    var images = $("img.retina");

    // loop through the images and make them hi-res
    for (var i = 0; i < images.length; i++) {

      // create new image name
      var imageType = images[i].src.substr(-4);
      var imageName = images[i].src.substr(0, images[i].src.length - 4);
      imageName += "@2x" + imageType;

      //rename image
      images[i].src = imageName;
    }
  }

  // for (var i = 0; i < 9; i++) {
  //   console.log(i);
  //   // more statements
  // }

});
