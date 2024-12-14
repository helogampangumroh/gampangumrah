tail.select('.select1');
tail.select('.select2', {
    multiTags: true,
});
let tailLocationMulti = tail.select('.select3');
tail.select('.select4');
tail.select('#car-brands', {
    descriptions: true,
    hideSelected: true,
    hideDisabled: true,
    multiLimit: 10,
    multiShowCount: false,
    multiContainer: true,
});
const selectElement = document.getElementById('car-brands');
selectElement.addEventListener('change', function () {
    const selectedValues = Array.from(selectElement.selectedOptions, (option) => option.value);
    document.getElementById('car_brands_list').value = selectedValues.join(', ');
});
