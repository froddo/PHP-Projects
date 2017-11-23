let first=circleArea(7);
let second=circleArea(1.5);
let third=circleArea(20);

function circleArea(r) {
  let area= r * r * Math.PI;
  return area;
}
document.write("r=7;" + "\n" + "area=" + "\n" + first);
document.write("<br>");
document.write("r=1.5;" + "\n" + "area=" + "\n" + second);
document.write("<br>");
document.write("r=20;" + "\n" + "area=" + "\n" + third);