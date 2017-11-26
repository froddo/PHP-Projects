
let filter=['12','Ivan','15','Asen','9'];


filterByAge([filter[0],filter[1],filter[2],filter[3],filter[4]]);

function filterByAge([minimum,nameA,ageA,nameB,ageB]) {
   let min=Number(minimum);
   let nameAgeA={name:nameA, age:Number(ageA)};
   let nameAgeB={name:nameB, age:Number(ageB)};
   if(min<nameAgeA.age){
       console.log(nameAgeA);
   }
   else if (min<nameAgeB.age){
       console.log(nameAgeB);
   }
}


