function uniqueElements(arr) {
    let obj = {};
    for (let value1 of arr) {
        let counter = 0;
        for (let value2 of arr) {
            if (value1.toString() == value2.toString()) {
                counter++;
            }
        }
        obj[value1] = counter;
    }
    console.log(obj);
}
uniqueElements(['1', 1, '1', '4', 'jsjhsd']);