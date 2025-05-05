function parseBrand(text) {
    const match = text.match(/бренд:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseFrequency(text) {
    const match = text.match(/(\d+\.?\d*)\s*гц/i);
    return match ? parseFloat(match[1]) : 0;
}

function parseMaxDpi(text) {
    const match = text.match(/(\d+\.?\d*)\s*dpi/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseMatrix(text) {
    const match = text.match(/тип матриці:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseResolution(text) {
    const match = text.match(/роздільна здатність:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseHeadphoneType(text) {
    const match = text.match(/тип:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseMicrophone(text) {
    const match = text.match(/мікрофон:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseColor(text) {
    const match = text.match(/колір:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseFormFactor(text) {
    const match = text.match(/форм-фактор:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseConnection(text) {
    const match = text.match(/тип підключення:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseKeyType(text) {
    const match = text.match(/тип клавіш:\s*([^\n]*)/i);
    return match ? match[1].trim().toLowerCase() : '';
}

function parseKeyCount(text) {
    const match = text.match(/(\d+\.?\d*)\s*шт./i);
    return match ? match[1].trim().toLowerCase() : '';
}

function isInKeyRange(keyCount, range) {
    const [min, max] = range === '13'
        ? [13, Infinity]
        : range.split('-').map(part => {
            const num = parseInt(part.replace(' шт.', '').trim(), 10);
            return isNaN(num) ? 0 : num;
        });
    const keyValue = parseInt(keyCount.replace(' шт.', '').trim(), 10) || 0;
    return keyValue >= min && keyValue <= (max || Infinity);
}

function isInDpiRange(dpi, range) {
    const [min, max] = range === '200001+'
        ? [20001, Infinity]
        : range.split('-').map(Number);
    return dpi >= min && dpi <= (max || Infinity);
}

function isInRange(frequency, range) {
    const [min, max] = range === '240+'
        ? [240, Infinity]
        : range.split('-').map(Number);
    return frequency >= min && frequency <= (max || Infinity);
}

function getFilters(filters) {
    return Array.from(filters)
        .filter(input => input.checked)
        .map(input => input.value.toLowerCase());
}

function checkFilterMatch(filters, value) {
    if (!filters || filters.length === 0) {
        return true;
    }
    
    return filters.some(filterValue => value.includes(filterValue));
}