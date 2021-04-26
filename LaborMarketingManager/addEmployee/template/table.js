
document.querySelectorAll('th').forEach(el => el.setAttribute('title', el.innerText))
let formInput = document.getElementById('formInput')

document.querySelector('#by').oninput = function () {
    formInput.setAttribute('type', this.value);
    switch (this.value) {
        case "text":
            formInput.setAttribute('name', 'person_name');
            break;

        case "date":
            formInput.setAttribute('name', 'registr_date');
            break;

        default:
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('name', '');
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
    { a: 'continue1', b: 'متابعه 1' },
    { a: 'continue2', b: 'متابعه 2' },
    { a: 'continue3', b: 'متابعه 3' },
    { a: 'factory', b: 'المصنع' },
    { a: 'added_by', b: 'اضيف عبر' },
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