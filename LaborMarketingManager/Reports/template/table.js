document.querySelectorAll('th').forEach(el => el.setAttribute('title', el.innerText))
let formInput = document.getElementById('formInput'),
    formSelect = document.getElementById('formSelect')

// search By 
document.querySelector('#by').oninput = function () {

    switch (this.value) {
        case "id":
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('name', '');
            break;

        case "registr_date":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'registr_date');
            break;

        case "next_continue_date":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'next_continue_date');
            break;

        case "final_call":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'final_call');
            break;

        case "continue1_date":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'continue1_date');
            break;

        case "continue2_date":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'continue2_date');
            break;

        case "continue3_date":
            formInput.setAttribute('type', "date");
            formInput.setAttribute('name', 'continue3_date');
            break;

        case "addedBy":
            formSelect.classList.remove('d-none');
            formSelect.setAttribute('name', 'added_by')
            formInput.setAttribute('name', '')
            formInput.classList.add('d-none')
            break;

        default:
            formSelect.classList.add('d-none');
            formSelect.setAttribute('name', '')
            formInput.classList.remove('d-none')
            formInput.setAttribute('type', "text");
            formInput.setAttribute('name', this.value);

    }
}
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
    { a: 'addedBy', b: 'اضيف عبر' }
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