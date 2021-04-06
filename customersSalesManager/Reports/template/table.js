
document.querySelectorAll('th').forEach(el => el.setAttribute('title', el.innerText))
let formInput = document.getElementById('formInput')

document.querySelector('#by').oninput = function () {
    formInput.setAttribute('type', this.value);
    switch (this.value) {
        case "text":
            formInput.setAttribute('name', 'cumpany_name');
            break;

        case "date":
            formInput.setAttribute('name', 'init_date');
            break;

        default:
            formInput.setAttribute('type', "hidden");
            formInput.setAttribute('name', '');
    }
}
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
    { a: 'res1_continue_date', b: 'تاريخ المتابعه' },
    { a: 'res1_next_continue_date', b: 'تاريخ المتابعه المستقبليه' },
    { a: 'res2_sent', b: 'تم ارسال العرض' },
    { a: 'res2_vist', b: 'تم الزياره' },
    { a: 'res2_reject', b: 'تم رفض العرض' },
    { a: 'res2_accept', b: 'تم قبول العرض' },
    { a: 'res2_continue_date', b: 'تاريخ المتابعه' },
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