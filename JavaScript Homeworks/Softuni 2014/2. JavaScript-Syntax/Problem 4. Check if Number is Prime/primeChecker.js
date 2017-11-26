let number = 587;
let counter=0;
for(let i = 1;  i <= number; i++){
    let check =number/i;
    if (Number.isInteger(check) == true){
        counter++;
    }
}
if (counter==2){
    console.log(true);
}
else {
    console.log(false);
}
