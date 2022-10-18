$(".editProduct").click(function () {
    let id = $(this).data("id");
    $("#editProduct").modal("show");

    axios.get("editPreview/"+id) .then(function (response) {
            let data = response.data;
            console.log(data);
            $("#name").val(data[0].name);
            $("#title").val(data[0].title);
            $("#description").val(data[0].description);
            $("#editId").val(data[0].id);
        })
        .catch(function (error) {
            console.log(error);
        });
});


$(".editCustomer").click(function () {
    let id = $(this).data("id");
    $("#editCustomer").modal("show");

    axios.get("editPreview/"+id) .then(function (response) {
            let data = response.data;
            console.log(data);
            $("#name").val(data[0].name);
            $("#email").val(data[0].email);
            $("#mobile_number").val(data[0].mobile_number);
            $('#address').val(data[0].address);
            $("#editId").val(data[0].id);
        })
        .catch(function (error) {
            console.log(error);
        });
});
$(".editOrder").click(function () {
    let id = $(this).data("id");
    $("#editOrder").modal("show");

    axios.get("editPreview/"+id) .then(function (response) {
            let data = response.data;
            console.log(data);
            $("#name").val(data[0].name);
            $("#price").val(data[0].price);
            $("#quantity").val(data[0].quantity);
            $('#stock').val(data[0].stock);
            $("#editId").val(data[0].id);
        })
        .catch(function (error) {
            console.log(error);
        });
});
