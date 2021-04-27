document.querySelectorAll('th').forEach(el => el.setAttribute('title', el.innerText))
const formInput = document.getElementById('formInput'),
    the_day = document.querySelector('[data-id=the_day]'),
    result = document.querySelector('[data-id=result]'),
    formSelect = document.querySelector('[data-id=formSelect]'),
    qualification = document.querySelector('[data-id=qualification]'),
    city = document.querySelector('[data-id=city]'),
    colomnsElemnt = document.getElementById('colomns');

var colomns = [
    { a: 'id', b: '#' },

    { a: 'the_day', b: 'اليوم ' },
    { a: 'registr_date', b: 'تاريخ التسجيل' },

    { a: 'person_name', b: 'اسم العامل' },
    { a: 'qualification', b: 'المؤهل' },
    { a: 'phone', b: 'التليفون' },
    { a: 'city', b: 'محافظه' },
    { a: 'age', b: 'السن' },

    { a: 'result', b: 'النتيجه' },
    { a: 'nots', b: 'ملاحظات' },
    { a: 'next_continue_date', b: 'تاريخ المتابعه المستقبليه' },
    { a: 'final_call', b: 'تاريخ اخر اتصال' },

    { a: 'get_from', b: 'مصدر المكالمه' },
    { a: 'job_title', b: 'المهنه او الحرفه' },

    { a: 'continue1', b: 'نتيجه اول متابعه' },
    { a: 'continue1_date', b: 'تاريخ اول متابعه' },

    { a: 'continue2', b: 'نتيجه ثان متابعه' },
    { a: 'continue2_date', b: 'تاريخ ثان متابعه' },

    { a: 'continue3', b: 'نتيجه ثالث متابعه' },
    { a: 'continue3_date', b: 'تاريخ ثالث متابعه' },

    { a: 'factory', b: 'المصنع' },
    { a: 'added_by', b: 'اضيف عبر' }
]

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

    reset()

    switch (this.value) {
        case "id":
            formInput.setAttribute('name', '');
            break;

        case 'registr_date':
            toDate(this.value)
            viaMonth()
            break;

        case 'next_continue_date':
            toDate(this.value)
            break;

        case 'final_call':
            toDate(this.value)
            break;

        case 'continue1_date':
            toDate(this.value)
            break;

        case 'continue2_date':
            toDate(this.value)
            break;

        case 'continue3_date':
            toDate(this.value)
            break;

        case 'the_day':
            the_day.classList.remove('d-none')
            the_day.setAttribute('name', this.value)
            break;

        case 'qualification':
            qualification.classList.remove('d-none')
            qualification.setAttribute('name', this.value)
            break;

        case 'city':
            city.classList.remove('d-none')
            city.setAttribute('name', this.value)
            break;

        case 'result':
            result.classList.remove('d-none')
            result.setAttribute('name', this.value)
            break;

        case 'added_by':
            formSelect.classList.remove('d-none')
            formSelect.setAttribute('name', this.value)
            break;

        default:
            reset()
            formInput.classList.remove('d-none')
            formInput.setAttribute('name', this.value)
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