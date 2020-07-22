<html>

<body>

<script>

var data = [{
  name : "Peter",
  age : "18",
  profession : "nurse",
  children : [],
 },
 { 
   name: "Jack",
   age: "98" ,
   profession: "doctor",
   children: [ {
                 name : "Peter",
                 age : "18",
                 profession : "nurse",
                children : [{
                 name : "amar",
                 age : "19",
                 profession : "doctor",
                 children : [],
               }],
               }]
}
];
let inc = 1;
for(var i=0;i<data.length; i++){
  	
    //console.log(children[i]);
  	
  	data[i].id = inc;
  	
    //debugger;
  
  if(data[i].children.length>0){
  	//console.log("children length is: "+data[i].children.length);
    loopChildren(data[i].children, inc);
  }else{
   //continue;
  }
    inc++;
}

console.log( data );
//var incc = 111;
function loopChildren(children, incc){
	//console.log(children);
	//return '';
  
  let i = 0;
  if(children){
  	for(i=0;i<children.length; i++){

          //console.log("children of i is: ",children[i]);
          children[i].id = incc;
        if(children[i].children.length>0){
        	//console.log("children no");
        	incc++;
        	loopChildren(children[i].children, incc);
        }
         
          
      }
  }
  
}



</script>
</body>
</html>
