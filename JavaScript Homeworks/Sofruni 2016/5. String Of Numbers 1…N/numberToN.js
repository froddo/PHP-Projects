
let number=['11'];
printNumber([number[0]]);

function printNumber([n]) {
    let num = Number(n);
    let strNum='';
    for(let i = 1;  i <= num; i++){
            strNum+=i;
    }
    console.log(strNum);
    console.log(typeof strNum);
}


