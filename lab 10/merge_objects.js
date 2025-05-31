function mergeObjects(obj1, obj2) {
    let object = {};
    for (let key in obj1) {
        object[key] = obj1[key];
    }
    for (let key in obj2) {
        object[key] = obj2[key];
    }
    return object;
}
console.log(mergeObjects({a: 1, b: 2}, {b: 3, c: 5}));