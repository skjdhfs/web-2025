const numbers = [2, 5, 8, 10, 3];

const numbers2 = numbers.map(function (num) {
    return num * 3;
});

const numbers3 = numbers2.filter(function (num) {
    const remainder = num > 10;
    return remainder;
});

console.log(numbers3);
