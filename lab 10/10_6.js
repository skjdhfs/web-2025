function mapObject(obj, callback) {
    let newObj = {}
    for (let key in obj) {
        newObj[key] = callback(obj[key])
    }
    return newObj;
}

const nums = { a: 1, b: 2, c: 3 };
console.log(mapObject(nums, x => x * 2)) 