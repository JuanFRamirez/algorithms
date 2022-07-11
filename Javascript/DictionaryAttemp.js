let words=[];
let inputElement = document.getElementById('input-field');
inputElement.addEventListener('keyup',function(e){
  if(e.keyCode == 32 && /\s/g.test(e.target.value) && e.target.value.trim().length>0)
    {
      words.push(e.target.value.trim());
      if(words.length > 0)
    {
      words.forEach((word,index)=>{
        if(word==="aaa")
          {
           words[index] ='KLK';
          }
      })
        console.log(words)
    }
   
    }

})