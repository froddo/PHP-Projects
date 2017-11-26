
let points = ['2','4','5','0'];

let x={x1:Number(points[0]),x2:Number(points[2])};
let y={y1:Number(points[1]),y2:Number(points[3])};
let ax =x.x1-x.x2;
let by =y.y1-y.y2;

let distance= Math.sqrt(Math.pow((ax),2)+ Math.pow((by),2));
console.log(distance);



