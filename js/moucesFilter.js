let brandFilters = document.querySelectorAll('.block-filtr .brand-list input');
let dpiFilters = document.querySelectorAll('.block-filtr .dpi-list input');
let connectionFilters = document.querySelectorAll('.block-filtr .connection-list input');
let keyCountFilters = document.querySelectorAll('.block-filtr .key-count-list input');
let colorFilters = document.querySelectorAll('.block-filtr .color-list input');
let goodsBlocks = document.querySelectorAll('.goods-block-inner');

function updateFilters() {
    const checkedBrandFilters = getFilters(brandFilters);
    const checkedDpiFilters = getFilters(dpiFilters);
    const checkedConnectionFilters = getFilters(connectionFilters);
    const checkedKeyCountFilters = getFilters(keyCountFilters);
    const checkedColorFilters = getFilters(colorFilters);

    goodsBlocks.forEach(goods => {
        const parent = goods.parentElement;
        const describe = goods.querySelector('.describe');
        const text = describe ? describe.textContent.toLowerCase() : '';
        const brand = parseBrand(text);
        const maxDpi = parseMaxDpi(text);
        const connection = parseConnection(text);
        const keyCount = parseKeyCount(text);
        const color = parseColor(text);

        const matchesBrand = checkFilterMatch(checkedBrandFilters, brand);
        const matchesDpi = checkedDpiFilters.length === 0 ||
            checkedDpiFilters.some(dpiRange => isInDpiRange(maxDpi, dpiRange));
        const matchesConnection = checkFilterMatch(checkedConnectionFilters, connection);
        const matchesKeyCount = checkedKeyCountFilters.length === 0 ||
            checkedKeyCountFilters.some(keyRange => isInKeyRange(keyCount, keyRange));
        const matchesColor = checkFilterMatch(checkedColorFilters, color);

        if (matchesBrand && matchesDpi && matchesConnection && matchesKeyCount && matchesColor) {
            parent.classList.remove('hidden');
        } else {
            parent.classList.add('hidden');
        }

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

brandFilters.forEach(element => element.addEventListener('click', updateFilters));
dpiFilters.forEach(element => element.addEventListener('click', updateFilters));
connectionFilters.forEach(element => element.addEventListener('click', updateFilters));
keyCountFilters.forEach(element => element.addEventListener('click', updateFilters));
colorFilters.forEach(element => element.addEventListener('click', updateFilters));

updateFilters();