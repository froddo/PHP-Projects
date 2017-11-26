let number=591;
let div=3;
divide(number,div);

function divide(number,div) {
    let check=number / div;
    let result=Number.isInteger(check);
    if (result == true){
        console.log('the number is divided by 3 without remainder');
    }
    else{
        console.log('the number is not divided by 3 without remainder');
    }
}