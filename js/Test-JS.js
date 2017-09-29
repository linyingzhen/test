/*语句和声明*/
// 控制流程
/* 块 块级作用域 var let const
{
  statement_1;
  statement_2;
  ...
  statement_n;
}
*/
var x20170928164325 = 1;
{
	var x20170928164325=2;
}
console.log(x20170928164325);

let x20170928164428=1;
{
	let x20170928164428=2;
}
console.log(x20170928164428);

const x20170928164521=1;
{
	const x20170928164521=2;
}
console.log(x20170928164521);

// break break [label];
function testBreak(x) {
  var i = 0;

  while (i < 6) {
    if (i == 3) {
      break;
    }
    i += 1;
  }

  return i * x;
}

console.log(testBreak(6));

outer_block:{

  inner_block:{
    console.log ('1');
    break outer_block;      // breaks out of both inner_block and outer_block
    console.log (':-(');    // skipped
  }

  console.log ('2');        // skipped
}

// continue continue [ label ];
var i20170928165707 = 0;
var n20170928165720 = 0;
while (i20170928165707 < 5) {
   i20170928165707++;
   if (i20170928165707 === 3) {
      continue;
   }
   n20170928165720 += i20170928165707;
}
console.log(n20170928165720);

var i20170928170649 = 0, 
    j20170928170726 = 8;

checkiandj: while (i20170928170649 < 4) {
   console.log("i: " + i20170928170649);
   i20170928170649 += 1;

   checkj: while (j20170928170726 > 4) {
      console.log("j: "+ j20170928170726);
      j20170928170726 -= 1;
      if ((j20170928170726 % 2) == 0)
         continue checkj;
      console.log(j20170928170726 + " is odd.");
   }
   console.log("i20170928170649 = " + i20170928170649);
   console.log("j20170928170726 = " + j20170928170726);
}