let input=['3.12','5','18','19.24','1953.2262','0.001564','1.1445'];
 sumNumbers(input);
function sumNumbers(input) {
    let number=0;
    for(let i = 0;  i <input.length; i++){
        number+=Number(input[i]);
    }

    let vat= number * 0.20;
    let total=number + vat;
    console.log(total);
}


