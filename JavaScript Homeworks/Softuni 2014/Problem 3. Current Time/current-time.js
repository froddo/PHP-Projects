let time= new Date();
let hours=time.getHours();
let minutes=time.getMinutes();

if (minutes < 10){
    minutes="0" + minutes;
}
console.log(hours + ":" + minutes);