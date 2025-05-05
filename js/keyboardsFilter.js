let brandFilters = document.querySelectorAll('.block-filtr .brand-list input');
let formFactorFilters = document.querySelectorAll('.block-filtr .form-factor-list input');
let connectionFilters = document.querySelectorAll('.block-filtr .connection-list input');
let keyTypeFilters = document.querySelectorAll('.block-filtr .key-type-list input');
let colorFilters = document.querySelectorAll('.block-filtr .color-list input');
let goodsBlocks = document.querySelectorAll('.goods-block-inner');

function updateFilters() {

    const checkedBrandFilters = getFilters(brandFilters);
    const checkedFormFactorFilters = getFilters(formFactorFilters);
    const checkedConnectionFilters = getFilters(connectionFilters);
    const checkedKeyTypeFilters = getFilters(keyTypeFilters);
    const checkedColorFilters = getFilters(colorFilters);

    goodsBlocks.forEach(goods => {
        const parent = goods.parentElement;
        const describe = goods.querySelector('.describe');
        const text = describe ? describe.textContent.toLowerCase() : '';
        const brand = parseBrand(text);
        const formFactor = parseFormFactor(text);
        const connection = parseConnection(text);
        const keyType = parseKeyType(text);
        const color = parseColor(text);

        const matchesBrand = checkFilterMatch(checkedBrandFilters, brand);
        const matchesFormFactor = checkFilterMatch(checkedFormFactorFilters, formFactor);
        const matchesConnection = checkFilterMatch(checkedConnectionFilters, connection);
        const matchesKeyType = checkFilterMatch(checkedKeyTypeFilters, keyType);
        const matchesColor = checkFilterMatch(checkedColorFilters, color);

        if (matchesBrand && matchesFormFactor && matchesConnection && matchesKeyType && matchesColor) {
            parent.classList.remove('hidden');
        } else {
            parent.classList.add('hidden');
        }
    });

    window.scrollTo({ top: 0, behavior: 'smooth' })
}

brandFilters.forEach(element => element.addEventListener('click', updateFilters));
formFactorFilters.forEach(element => element.addEventListener('click', updateFilters));
connectionFilters.forEach(element => element.addEventListener('click', updateFilters));
keyTypeFilters.forEach(element => element.addEventListener('click', updateFilters));
colorFilters.forEach(element => element.addEventListener('click', updateFilters));

updateFilters();
