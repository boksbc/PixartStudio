const URI = 'ajax' + location.search;

$('#contact-submit').click(function (e) {
    e.preventDefault();

    let csrf = $('#csrf').val();
    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    let company = $('#company').val();
    let email = $('#email').val();
    let textarea = $('#textarea').val();
    let privacy = $('#privacy').is(":checked");

    $.ajax({
        url: URI,
        type: 'POST',
        dataType: 'JSON',
        data: {
            csrf: csrf,
            firstname: firstname,
            lastname: lastname,
            company: company,
            email: email,
            textarea: textarea,
            privacy: privacy,
        },
        beforeSend: function () {
            LoadingDots();
        },
        success: function (response) {
            LoadingDots();
            removeErrorMessage();
            RemoveCheckboxErrorMessage();
            let data = response['data'];

            $('#csrf').attr('value', data['csrf'])

            if(data['fail']) {
                notifyBox(data['fail']);
            } else  {
                if(data['complete']) {
                    $('#form')[0].reset();
                    submitsuccess();
                } else {
                    let error = data['error'];
                    let checkbox = data['privacy'];
                    addErrorMessage(error, 'firstname');
                    addErrorMessage(error, 'lastname');
                    addErrorMessage(error, 'email');
                    addErrorMessage(error, 'textarea');
                    CheckboxErrorMessage(checkbox, 'privacy');
                }
            }
        }
    })
})