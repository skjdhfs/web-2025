function isPrime(number) {
    let n = number;
    let isPrime = true;
    for (let i = 2; i < n; i++) {
        if (n % i == 0) {
            isPrime = false;
            break;
        }
    }
    return isPrime;
}

function isPrime2(arr) {
    let primes = [];
    for (let value of arr) {
        if (typeof(value) == 'number') {
            if (isPrime(value)) {
                primes.push(value)
            }
        } else {
            let numbers = false;
            return numbers;
        }    
    }
    return primes;       
}

function isPrimeNumber(param) {
    if (typeof(param) == 'number') {
        if (isPrime(param)) {
            console.log(param, 'простое число')
        } else {
            console.log(param, 'не простое число')
        }
    } else if (typeof(param) == 'object') {
        if (isPrime2(param)) {
            let primeNumbers = isPrime2(param);
            for (let num of primeNumbers) {
                console.log(num, ' простое число\n')
            }
        } else {
            console.log('Элемент массива не является числом')
        }
    } else {
        console.log('Введенное значение не является числом или массивом')
    }
}
isPrimeNumber(1);