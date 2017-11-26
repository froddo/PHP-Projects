let dates=['2016','9','30'];
date(dates);

function date(dates) {

    let date=new Date(Number(dates[0]),Number(dates[1])-1,Number(dates[2])+1);
    let myDate = new Date(date);
    let nextDay= myDate.setDate(myDate.getDate() + 1);
    let current = new Date(nextDay);

    console.log(current);
}