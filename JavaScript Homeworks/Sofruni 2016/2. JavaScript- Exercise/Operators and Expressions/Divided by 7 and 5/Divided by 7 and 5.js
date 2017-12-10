let check=140;
let number = check / 5;
let num=check / 7;

let five=Number.isInteger(number);
let seven=Number.isInteger(num);

if (five == true && seven==true){
    console.log(true);
}
else {
    console.log(false);
}