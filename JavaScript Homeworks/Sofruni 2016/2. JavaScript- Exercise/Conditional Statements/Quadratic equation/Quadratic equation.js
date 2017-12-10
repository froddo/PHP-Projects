let a=-0.5;
let b=4;
let c=-8;

let result=x1(a,b,c);
let result1=x2(a,b,c);
function x1(a,b,c) {
    let x=-(b)+Math.sqrt((b*b)-(4*(a)*(c)));
    let xSecond=2*a;

    let result = x / xSecond;
    return result;
}
function x2(a,b,c) {
    let x=-(b)-Math.sqrt((b*b)-(4*(a)*(c)));
    let xSecond=2*a;

    let result = x / xSecond;
    return result;
}

if (isNaN(result)){
    console.log("no real roots");
}
else if(isNaN(result1)){
    console.log("no real roots");
}
else {
    console.log("x1=", result1);
    console.log("x2=", result);
}
