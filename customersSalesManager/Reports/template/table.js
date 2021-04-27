document.querySelectorAll('th').forEach(el => el.setAttribute('title', el.innerText))
let formInput = document.getElementById('formInput'),
    formSelect = document.getElementById('formSelect')

var colomns = [
    { a: 'id', b: '#' },
    { a: 'init_date', b: 'تاريخ التسجيل' },
    { a: 'cumpany_name', b: 'اسم العميل' },
    { a: 'company_type', b: 'نوع القطاع الصناعي' },
    { a: 'city', b: 'المدينه' },
    { a: 'area', b: ' المنطقه' },
    { a: 'responsible_name', b: 'اسم المسؤول' },
    { a: 'job', b: 'الوظيفه' },
    { a: 'phone', b: 'التلفون' },
    { a: 'email', b: 'الايميل' },
    { a: 'service_type', b: 'الخدمه المطلوبه' },
    { a: 'res1_called', b: 'تم الاتصال' },
    { a: 'res1_offer', b: 'طلب عرض' },
    { a: 'res1_vist', b: 'طلب زياره' },
    // { a: 'res1_continue_date', b: 'تاريخ المتابعه' },
    { a: 'next_continue_date', b: 'تاريخ المتابعه المستقبليه' },
    { a: 'res2_sent', b: 'تم ارسال العرض' },
    { a: 'res2_vist', b: 'تم الزياره' },
    { a: 'res2_reject', b: 'تم رفض العرض' },
    { a: 'res2_accept', b: 'تم قبول العرض' },
    // { a: 'res2_continue_date', b: 'تاريخ المتابعه' },
    { a: 'nots', b: 'ملاحظات' },
    { a: 'LastCallDate', b: 'تاريخ اخر اتصال' },
    { a: 'added_by', b: 'اضيف بواسطه' },
],
    colomnsElemnt = document.getElementById('colomns');

colomns.forEach(el => {
    let input = document.createElement('input')
        , label = document.createElement('label')
        , div = document.createElement('div')

    input.checked = true;
    input.setAttribute('type', 'checkbox');
    input.setAttribute('id', el.a);

    label.setAttribute('for', el.a);
    label.innerHTML = el.b;

    input.oninput = function () {
        let to = this.getAttribute('id');

        document.querySelectorAll('.' + to).forEach(s => s.classList.toggle('d-none'))
    }

    div.appendChild(label)
    div.appendChild(input)
    colomnsElemnt.appendChild(div)
})

// search By 
document.querySelector('#by').oninput = function () {

    switch (this.value) {
        case "id":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('name', '');
            break;

        case "init_date":
            toDate(this.value)
            viaMonth()
            break;

        case "next_continue_date":
            toDate(this.value)
            break;

        case "res1_called":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res1_called');
            break;

        case "res1_offer":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res1_offer');
            break;

        case "res1_vist":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res1_vist');
            break;

        case "res2_sent":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res2_sent');
            break;

        case "res2_vist":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res2_vist');
            break;

        case "res2_reject":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res2_reject');
            break;

        case "res2_accept":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('value', "1");
            formInput.setAttribute('name', 'res2_accept');
            break;

        case "LastCallDate":
            toDate(this.value)
            break;

        case "added_by":
            formSelect.classList.remove('d-none');
            formSelect.setAttribute('name', 'added_by')
            formInput.setAttribute('name', '')
            formInput.classList.add('d-none')
            break;

        default:
            reset()

            formInput.classList.remove('d-none')
            formInput.setAttribute('name', this.value);
    }
}

function reset() {
    restInput()

    month.remove()

    formInput.setAttribute('type', 'text');

    formSelect.classList.add('d-none');
    result.classList.add('d-none');
    the_day.classList.add('d-none');

    formSelect.setAttribute('name', '');
    result.setAttribute('name', '');
    the_day.setAttribute('name', '');
    city.setAttribute('name', '');
    qualification.setAttribute('name', '');
}

function restInput() {
    formInput.setAttribute('name', '');
    formInput.classList.add('d-none')
}

function toDate(value) {
    formInput.classList.remove('d-none')
    formInput.setAttribute('type', 'date');
    formInput.setAttribute('name', value)
}

let month = document.createElement('input'), x;
month.setAttribute('type', 'checkbox')
month.setAttribute('title', 'بحث عبر الشهر')

function viaMonth() {
    insertAfter(formInput, month)

    // change the value
    month.onchange = function () {
        if (month.checked) {
            formInput.setAttribute('type', 'month')
        } else {
            formInput.setAttribute('type', 'date')
        }
    }
}

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}