$(document).on('click', '.save-house-btn', function (e) {
    e.preventDefault();
    const form = new FormData();
    const name = $('.name');
    const email = $('.email');
    const address = $('.address');
    const region = $('.region');
    form.append('name', name.val())
    form.append('email', email.val())
    form.append('address', address.val())
    form.append('region', region.val())
    const url = $(this).data('url')
    $.ajax({
        url: url,
        method: 'POST',
        data: form,
        dataType: 'JSON',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            if (response.success) {
                if (response.data?.redirect) {
                    window.location.href = response.data.redirect;
                }
                // else if (response.message) {
                //     Toast.fire({
                //         icon: "success",
                //         title: response.message,
                //     });
                // }
            }
            // else {
            //     swal.fire("Error!", response.message, "error");
            // }
        },
        error: function (response) {
            const errors = response.responseJSON.errors;
            Object.keys(errors).forEach(function (key) {
                $(`.error-${key.replaceAll('.','-')}`).text(errors[key][0])
            })
        }
    });

});
