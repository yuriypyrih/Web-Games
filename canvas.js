var context, rectagnle, loop;

context = document.getElementById("display").getContext("2d");

context.canvas.width = 900;
context.canvas.height = (context.canvas.width / 12) * 9;

rectangle = {
  height: 32,
  width: 32,
  x: 0,
  y: 72
};

loop = function() {
  /*
  rectangle.x++;

  context.fillStyle = "#202020";
  // By putting this grey background fillRect() you're erasing the previous frames so only the new frames remaines
  context.fillRect(0, 0, 320, 180);
  context.fillStyle = "#ff0000";
  context.beginPath(); //The cube initiate
  context.rect(rectangle.x, rectangle.y, rectangle.width, rectangle.height); // The cube itself
  context.fill(); //Filling the cube

  if (rectangle.x > 320) {
    // if rectangle goes past right boundary
    rectangle.x = -rectangle.width;
  }

  //call update when the browser is ready to draw again
  window.requestAnimationFrame(loop);
  */
};

//Request the fuction on each frame
//window.requestAnimationFrame(loop);
