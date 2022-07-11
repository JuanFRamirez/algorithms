
let randomNumber = Math.floor(Math.random()*10);
let call1 = new Promise((resolve)=>{
    resolve(randomNumber,1000);
})
let call2 = new Promise((resolve)=>{
    resolve(randomNumber + Math.floor((Math.random()*10)),3000)   
})

let parallelSum=()=>{
    Promise.all([call1,call2]).then(([number1,number2])=>{
        console.log(`${number1} +plus ${number2} is ${number1+number2}`)
    })
}

parallelSum()