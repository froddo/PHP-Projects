
let figureArea=['13','2','5','8'];
figArea(figureArea);
function figArea(figureArea) {
    let s1=Number(figureArea[0])* Number(figureArea[1]);
    let s2=Number(figureArea[2]) * Number(figureArea[3]);

    let s3= Math.min(figureArea[0],figureArea[2]) * Math.min(figureArea[1],figureArea[3]);
    let result= s1+s2-s3;
    console.log(result);
}



