$(document).ready(function () {
    $("#product-data").DataTable().ajax.reload();

    $("#submit").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('products.store') }}",
            type: "POST",
            dataType: "json",
            // contentType: "application/x-www-form-urlencoded;charset=utf-8",
            data: $("#myForm").serialize(),
            success: function (response) {
                $("#myForm")[0].reset();
                // console.log(response);
                location.reload();
            },
        });
    });

    new DataTable("#product-data", {
        ajax: "{{ route('products.page')}}",
        columns: [
            { data: "name" },
            { data: "description" },
            { data: "price" },
            { data: "image" },
        ],
    });
});
