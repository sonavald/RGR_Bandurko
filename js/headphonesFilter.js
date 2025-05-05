let brandFilters = document.querySelectorAll('.block-filtr .brand-list input');
let microphoneFilters = document.querySelectorAll('.block-filtr .microphone-list input');
let connectionFilters = document.querySelectorAll('.block-filtr .connection-list input');
let headphoneTypeFilters = document.querySelectorAll('.block-filtr .headphone-type-list input');
let colorFilters = document.querySelectorAll('.block-filtr .color-list input');
let goodsBlocks = document.querySelectorAll('.goods-block-inner');

function updateFilters() {
    const checkedBrandFilters = getFilters(brandFilters);
    const checkedMicrophoneFilters = getFilters(microphoneFilters);
    const checkedConnectionFilters = getFilters(connectionFilters);
    const checkedHeadphoneTypeFilters = getFilters(headphoneTypeFilters);
    const checkedColorFilters = getFilters(colorFilters);

    goodsBlocks.forEach(goods => {
        const parent = goods.parentElement;
        const describe = goods.querySelector('.describe');
        const text = describe ? describe.textContent.toLowerCase() : '';
        const brand = parseBrand(text);
        const microphone = parseMicrophone(text);
        const connection = parseConnection(text);
        const headphoneType = parseHeadphoneType(text);
        const color = parseColor(text);

        const matchesBrand = checkFilterMatch(checkedBrandFilters, brand);
        const matchesMicrophone = checkFilterMatch(checkedMicrophoneFilters, microphone);
        const matchesConnection = checkFilterMatch(checkedConnectionFilters, connection);
        const matchesHeadphoneType = checkFilterMatch(checkedHeadphoneTypeFilters, headphoneType);
        const matchesColor = checkFilterMatch(checkedColorFilters, color);

        if (matchesBrand && matchesMicrophone && matchesConnection && matchesHeadphoneType && matchesColor) {
            parent.classList.remove('hidden');
        } else {
            parent.classList.add('hidden');
        }

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

brandFilters.forEach(element => element.addEventListener('click', updateFilters));
microphoneFilters.forEach(element => element.addEventListener('click', updateFilters));
connectionFilters.forEach(element => element.addEventListener('click', updateFilters));
headphoneTypeFilters.forEach(element => element.addEventListener('click', updateFilters));
colorFilters.forEach(element => element.addEventListener('click', updateFilters));

updateFilters();