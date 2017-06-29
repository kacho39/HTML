//由頭畫到尾 即上面畫係底 下面畫係面

// shapes
ellipse(200, 100, 200, 100); // count from center(X: position from left, Y: position from top, width, height)
rect(100,100,100,100); // count from left corner(x,y,width,height)

line(100,200,300,200); // (StartX, StartY, EndX, EndY)
//other shape: https://www.khanacademy.org/computing/computer-programming/programming/drawing-basics/p/challenge-waving-snowman

// coloring
background(255,0,0); //rgb
fill(0,0,0); // will fill all below it //(000係黑)
stroke(0,255,0); //for line
strokeWeight(20); //粗幼
noStroke(); //take out stroke for items below it

// image
img: getImage("avatars/leaf-green") // 呢舊係object係面

// variable
var name = 22
name = 30

// animation
// example from khan academy
// position of the car
var x = 10;
    
draw = function() {
    
    // all lines of code inside here will be run repeatedly
    background(151, 244, 247);
    
    // draw the car body
    fill(255, 0, 115);
    rect(x, 200, 100, 20);
    rect(x + 15, 178, 70, 40);
    
    // draw the wheels
    fill(77, 66, 66);
    ellipse(x + 25, 221, 24, 24);
    ellipse(x + 75, 221, 24, 24);
    
    x = x + 1;
};

mouseMoved = function() { // 淨係mouse 郁時先會畫
    fill(mouseX, mouseY, mouseY);
    ellipse(mouseX, mouseY, 10, 10);
};  //mouseClicked  // 係function

// mouse interaction
// 2 pre-declaired variables: mouseX & mouseY
// mouseIsPressed 用係if statement   //係情況

//text and strings
textSize(30);
text("hello", 30, 40); //default: white count from 字嘅lower left(, X, Y)
text("textbox", 30, 40, 200, 100) //(,,, width, height)

//Functions
var sayHi = function() { //同Java 一樣可以加parameter
	var redColor = random(0,300);  //random number
	fill(redColor, 0, 0);
}
sayHi();
//
var calcTotalDonuts = function(numYears) {
	return 3 * 365 * numberYears
}
text(calcTotalDonuts(2), 10, 10);

// If statement
if (x > 400) {
        speed = -5;
}
//仲有if else

//Debugging
println("clicked!") // print句野出黎睇下run唔run到果度
println(mouseX) // check畫得岩唔岩位
println(mouseX > 100 && mouseX < 250); // 睇下係咪true
// tips https://www.khanacademy.org/computing/computer-programming/programming/debugging-programs/a/more-debugging-tips//

// for loop 
/*    think first
 1. What do I want to repeat? 
 the text() command
 2. What do I want to change each time? 
 the friend num, and the y position
 3. How long should we repeat?
 until there are no more friends left
*/
// example
var friendNum = 0;
while(friendNum < myFriends.length) {
    text(myFriends[friendNum], 10, 30+friendNum*30);
    friendNum++;
}

// Array
var myFriends = ["John", "Alvin", "Hazel"];
println(myFriends.length)
myFriends.push("Mike"); //Java嘅append

// Objects
// example
var winston = {
  age: 19,
  eyes: "black",
  likes: ["programming", "being programmed"],
  isCool: true,
  birthplace: {
      city: "Mountain View",
      state: "California"
  }
text("Winston is " + winston.age + " years old", 10, 50);
text("Winston likes " + winston.likes[0] + " and " +  winston.likes[1], 10, 90); // call "programming"
text("Winston was born in " + winston.birthplace.city + ", " + winston.birthplace.state, 10, 110); //call Mountain View
winston.age = 20; // 改
// arrays of objects
var positions = [
  {x: 99, y: 117},
  {x: 294, y: 117},
  {x: 101, y: 316},
  {x: 294, y: 316}  
];
for (var i = 0; i < positions.length; i++) {
    drawWinston(positions[i].x, positions[i].y);
}

//object-oriented design -- constructor  //用黎整object
var Winston = function(nickname, age, x, y) {
    this.nickname = nickname;
    this.age = age;
    this.x = x;
    this.y = y;
};
var winstonTeen = new Winston("Winsteen", 15, 20, 50);
var winstonAdult = new Winston("Mr. Winst-a-lot", 30, 229, 50);
//example to change object to constructor
var bigRainbow = {
    x: 200,
    y: 200,
    radius: 300
};
var drawRainbow = function(rainbow) {
    noFill();
    strokeWeight(5);
    stroke(255, 0, 0);
    arc(rainbow.x, rainbow.y, rainbow.radius, rainbow.radius, 180, 360);
    stroke(250, 200, 0);
    arc(rainbow.x, rainbow.y, rainbow.radius-10, rainbow.radius-10, 180, 360);
    stroke(240, 255, 102);
    arc(rainbow.x, rainbow.y, rainbow.radius-20, rainbow.radius-20, 180, 360);
    stroke(29, 255, 13);
    arc(rainbow.x, rainbow.y, rainbow.radius-30, rainbow.radius-30, 180, 360);
    stroke(122, 155, 255);
    arc(rainbow.x, rainbow.y, rainbow.radius-40, rainbow.radius-40, 180, 360);
};
drawRainbow(bigRainbow);
//to make change
var Rainbow = function(x, y, radius) {
    this.x = x;
    this.y = y;
    this.radius = radius;
};
var rainbow = new Rainbow(200, 200, 300); //將個object換成呢個
// attach method to constructor
Winston.prototype.draw = function() {
	};
// inheritance
Hopper.prototype = Object.create(Creature.prototype); // inherit creature 嘅prototype
//用黎inherit
var Tulip = function(, , ) {
    Flower.call(this, , , );
};

Tulip.prototype = Object.create(Flower.prototype);

//Planning project
//https://www.khanacademy.org/computing/computer-programming/programming/good-practices/a/planning-a-programming-project
// lots of project
//https://www.khanacademy.org/computing/computer-programming/browse
// what to learn next
//https://www.khanacademy.org/computing/computer-programming/programming/good-practices/a/good-practices-what-to-learn-next



// I love this 
//like a note
background(255, 255, 247);
stroke(173, 222, 237);
/*
var i = 0;
while (i < 20) {
    var lineY = 20 + (i * 20);
    line(0, lineY, 400, lineY);
    i++;
}
*/
for (var i = 0; i<20; i++) {
    var lineY = 20 + (i * 20);
    line(0, lineY, 400, lineY);
} // 用for 好d



