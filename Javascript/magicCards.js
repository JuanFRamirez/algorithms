const cards = [
  [1, 2, 3, 4, 5, 4],
  [5, 5, 4, 4, 3, 4, 3],
  [2, 2, 1],
];

let uniques = new Array()

cards.map((decks)=>{
    decks.forEach((card,idx)=>{
        if(card!==decks[idx+1] && card !==decks[idx-1])
        uniques.push(card)
    })
})
console.log(Math.max(...uniques));
