const users = [
  { id: 1, name: "Alice" },
  { id: 2, name: "Bob" },
  { id: 3, name: "Charlie" }
];



const names = users.map(function getName(obj) {
    for (let key in obj) {
        if (key == 'name') {
            return obj[key];
        }
    }
});
console.log(names);