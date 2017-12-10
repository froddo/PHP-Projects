let a=-2;
let b=-22;
let c=1;
let d=0;
let e=0;
let check=0;
let result=biggest(a,b,c,d,e,check);
console.log(result);
function biggest(a,b,c,d,e,check) {
   check=Math.max(a,b,c,d,e);
   return check;
}