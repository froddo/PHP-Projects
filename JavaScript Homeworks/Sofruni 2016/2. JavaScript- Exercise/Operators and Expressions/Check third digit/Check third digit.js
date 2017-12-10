let number=9999799;
let reverse=number.toString().split('').reverse().join('');

let digit=reverse.toString()[2];

if (digit==7){
    console.log(true);
}
else {
    console.log(false);
}
