document.onkeydown = function(event) {
  keycode = event.keyCode

  console.log(keycode)

  if(keycode == 39) { //Right
    console.log("pushed right")
  } else if(keycode == 37) { // Left
    console.log("pushed left")
  } else if(keycode == 38) { // Up
    console.log("pushed up")
  } else if(keycode == 40) { // Down
    console.log("pushed up")
  } else {
    console.log("do nothing")
  }
}
