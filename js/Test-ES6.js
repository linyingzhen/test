var dic={x:2,z:1,y:3};//输出  {x:2，y:3，z:1}
 var sdic=Object.keys(dic).sort();
 for(let ki in sdic){                     
    console.log(sdic[ki]+":"+dic[sdic[ki]]+",");
 }