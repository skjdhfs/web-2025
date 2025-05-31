function countVowels(str) {
    let counter = 0;
    const vowels = ["а", "е", "ё", "и", "о", "у", "ы", "э", "ю", "я", "А", "Е", "Ё", "И", "О", "У", "Ы", "Э", "Ю", "Я"];
    let i = 0;
    while (i < str.length) {
        if (vowels.includes(str[i])) {
            counter++;
        }
        i++;
    }
    return counter;
}
console.log(countVowels('Привет, мир!'));