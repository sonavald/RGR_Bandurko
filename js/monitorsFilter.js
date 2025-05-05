function updateFilters() {
    const checkedBrandFilters = getFilters(brandFilters);
    const checkedFrequencyFilters = getFilters(frequencyFilters);
    const checkedMatrixFilters = getFilters(matrixFilters);
    const checkedResolutionFilters = getFilters(resolutionFilters);
    const checkedColorFilters = getFilters(colorFilters);

    goodsBlocks.forEach(goods => {
        const parent = goods.parentElement;
        const describe = goods.querySelector('.describe');
        const text = describe ? describe.textContent.toLowerCase() : '';
        const brand = parseBrand(text);
        const frequency = parseFrequency(text);
        const matrix = parseMatrix(text);
        const resolution = parseResolution(text);
        const color = parseColor(text);

        const matchesBrand = checkFilterMatch(checkedBrandFilters, brand);
        const matchesMatrix = checkFilterMatch(checkedMatrixFilters, matrix);
        const matchesResolution = checkFilterMatch(checkedResolutionFilters, resolution);
        const matchesColor = checkFilterMatch(checkedColorFilters, color);
        const matchesFrequency = checkedFrequencyFilters.length === 0 || 
            checkedFrequencyFilters.some(filterRange => isInRange(frequency, filterRange));

        if (matchesBrand && matchesFrequency && matchesMatrix && matchesResolution && matchesColor) {
            parent.classList.remove('hidden');
        } else {
            parent.classList.add('hidden');
        }
    });
    window.scrollTo({ top: 0, behavior: 'smooth' })
}


let goodsBlocks = document.querySelectorAll('.goods-block-inner');

let brandFilters = document.querySelectorAll('.block-filtr .brend-list input');
let frequencyFilters = document.querySelectorAll('.block-filtr .frequency-list input');
let matrixFilters = document.querySelectorAll('.block-filtr .matrix-list input');
let resolutionFilters = document.querySelectorAll('.block-filtr .resolution-list input');
let colorFilters = document.querySelectorAll('.block-filtr .color-list input');

brandFilters.forEach(element => element.addEventListener('click', updateFilters));
frequencyFilters.forEach(element => element.addEventListener('click', updateFilters));
matrixFilters.forEach(element => element.addEventListener('click', updateFilters));
resolutionFilters.forEach(element => element.addEventListener('click', updateFilters));
colorFilters.forEach(element => element.addEventListener('click', updateFilters));

updateFilters();
