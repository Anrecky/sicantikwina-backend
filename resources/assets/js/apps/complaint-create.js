
var wbDOB = flatpickr(document.getElementById('wbDOB'), {

    defaultDate: document.getElementById('wbDOB').attributes['value'].value ? document.getElementById('wbDOB').attributes['value'].value : null
});
var brideDOB = flatpickr(document.getElementById('brideDOB'), {
    defaultDate: document.getElementById('brideDOB').attributes['value'].value ? document.getElementById('brideDOB').attributes['value'].value : null
});
var groomDOB = flatpickr(document.getElementById('groomDOB'), {
    defaultDate: document.getElementById('groomDOB').attributes['value'].value ? document.getElementById('groomDOB').attributes['value'].value : null
});

function showWBDOB(event) {
    if (event.target.value == 0) {
        document.getElementById('wbDOB').classList.remove('d-none')
        document.getElementById('wbYear').classList.add('d-none')
    } else {
        document.getElementById('wbDOB').classList.add('d-none')
        document.getElementById('wbYear').classList.remove('d-none')

    }
}
document.querySelectorAll("input[name='wb_is_year']").forEach((input) => {
    input.addEventListener('change', showWBDOB);
});

$("#wbYear").inputmask("9999");

function showBrideDOB(event) {
    if (event.target.value == 0) {
        document.getElementById('brideDOB').classList.remove('d-none')
        document.getElementById('brideYear').classList.add('d-none')
    } else {
        document.getElementById('brideDOB').classList.add('d-none')
        document.getElementById('brideYear').classList.remove('d-none')

    }
}
document.querySelectorAll("input[name='bride_is_year']").forEach((input) => {
    input.addEventListener('change', showBrideDOB);
});

$("#brideYear").inputmask("9999");

function showGroomDOB(event) {
    if (event.target.value == 0) {
        document.getElementById('groomDOB').classList.remove('d-none')
        document.getElementById('groomYear').classList.add('d-none')
    } else {
        document.getElementById('groomDOB').classList.add('d-none')
        document.getElementById('groomYear').classList.remove('d-none')

    }
}
document.querySelectorAll("input[name='groom_is_year']").forEach((input) => {
    input.addEventListener('change', showGroomDOB);
});

$("#groomYear").inputmask("9999");
