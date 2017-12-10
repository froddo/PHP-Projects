let a= 100;
let b= 200;
let h= 300;

let result= trapezoid(a,b,h);
console.log(result);
function trapezoid(a,b,h) {
    let area=((a + b) / 2) * h;
    return area;
}