$(document).on('click', '#logout-form', function (e) {
    e.preventDefault();
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'GET',
        url: '/logout',
        success:function(){
            $("#logout-form").submit();
        }
    });
    alert("logout");
})
