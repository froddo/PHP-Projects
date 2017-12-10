let counter=0;
let n=9;

for(let i = 1;  i <=n; i++){

    let check=n / i;
    if (Number.isInteger(check)){
        counter++;
    }
}
if (counter==2){
    console.log(true);
}
else {
    console.log(false);
}