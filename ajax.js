$('.list-shirts').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "list/list-shirt.php",
        success: function (response) {
            $('.product-display').html(response);
            deleteRecord()
        }
    });
});

$('.list-pent').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "list/list-pent.php",
        success: function (response) {
            $('.product-display').html(response);
            deleteRecord()
        }
    });
});

$('.list-tshirt').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "list/list-tshirt.php",
        success: function (response) {
            $('.product-display').html(response);
            deleteRecord()
        }
    });
});

$('.list-user').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "list/list-user.php",
        success: function (response) {
            $('.product-display').html(response);
            deleteRecord()
        }
    });
});

$('.list-feedback').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "list/list-feedback.php",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            $('.product-display').html(response);
            deleteRecord()
        }
    });
});

$('.shirt-form').submit(function (e) { 
    e.preventDefault();
    var formData = new FormData(this);
    var shirtImage = $('#shirt-img')[0].files;
    formData.append('image', shirtImage[0]);

    $.ajax({
        type: "POST",
        url: "./addition/add-shirt.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (response) {
            if (response['success']) {
                alert ('record inserted');
            } else {
                alert('SQL Error');
            }
        }
    });
});

$('.pent-form').submit(function (e) { 
    e.preventDefault();
    var formData = new FormData(this);
    var pentImage = $('#pent-img')[0].files;
    formData.append('image', pentImage[0]);

    $.ajax({
        type: "POST",
        url: "./addition/add-pent.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (response) {
            if (response['success']) {
                alert ('record inserted');
            } else {
                alert('SQL Error');
            }
        }
    });
});

$('.tshirt-form').submit(function (e) { 
    e.preventDefault();
    var formData = new FormData(this);
    var tshirtImage = $('#tshirt-img')[0].files;
    formData.append('image', tshirtImage[0]);

    $.ajax({
        type: "POST",
        url: "./addition/add-tshirt.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (response) {
            if (response['success']) {
                alert ('record inserted');
            } else {
                alert('Error see the log');
                console.log(response);
            }
        }
    });
});

function deleteRecord () {
    $('.delete-btn').click(function (e) { 
        e.preventDefault();
        var recordId = e.target.closest('.record').getAttribute('data-record-id')
        var recordType = e.target.closest('.record').getAttribute('data-record-type')
        
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: {
                recordId: recordId,
                recordType: recordType
            },
            dataType: "JSON",
            success: function (response) {
                if (response['success']) {
                    alert('Are you sure Deleted')
                    $(`.record[data-record-id="${recordId}"]`).remove();
                }
                else {
                    alert('no')
                    console.log(response);
                }
            }
        });
    });
}