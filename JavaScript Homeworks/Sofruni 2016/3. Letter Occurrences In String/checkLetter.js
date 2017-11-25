let number=['hello','l'];
checkLetters(number[0],number[1]);

function checkLetters(str,check) {
    let count=0;
    for(let i = 0;  i <str.length; i++){
        if (str[i] === check){
            count++;
        }
    }
    console.log(count);
}


