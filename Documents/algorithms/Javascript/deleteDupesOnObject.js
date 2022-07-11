let list = [
  { id: 1, name: "Jhon Doe" },
  { id: 2, name: "Mary Doe" },
  { id: 3, name: "Jhon Doe" },
  { id: 2, name: "Mary Doe", address: "klk" },
  { id: 3, name: "Jhon Doe", tel: "123456" }
];

let map1 = new Map();

list.map((el) => {
  if (map1.has(el.id)) {
    if (Object.values(map1.get(el.id)).length != Object.values(el).length) {
  
      console.log('merging')
      let otherObj = Object.assign(map1.get(el.id),el)
      map1.set(el.id,otherObj)
    }
  } else {
    map1.set(el.id, el);
  }

});
console.log(map1);
