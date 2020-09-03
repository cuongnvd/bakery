   

$(".deleteCategory").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
        title: "Delete?",
        text: "Please ensure and then confirm!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    }).then(function (e) {

        if (e.value === true) {
             $.ajax({
                url: "/category/delete/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Done!", results.message, "success");
                        }
                location.reload();
                    }
            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
   
});







$(".deleteUser").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
        title: "Delete?",
        text: "Please ensure and then confirm!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    }).then(function (e) {

        if (e.value === true) {
             $.ajax({
                url: "/user/delete/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Done!", results.message, "success");
                        }
                location.reload();
                    }
            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
   
});


$(".deleteProduct").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
        title: "Delete?",
        text: "Please ensure and then confirm!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    }).then(function (e) {

        if (e.value === true) {
             $.ajax({
                url: "/product/delete/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                             swal("Done!", results.message, "success");
                        }
                location.reload();
                    }
            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
   
});



$(".deleteNews").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
        title: "Delete?",
        text: "Please ensure and then confirm!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    }).then(function (e) {

        if (e.value === true) {
             $.ajax({
                url: "/news/delete/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                             swal("Done!", results.message, "success");
                        }
                location.reload();
                    }            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
   
});