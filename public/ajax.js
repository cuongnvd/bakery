   

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
                url: "/admin/category/delete/"+id,
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
                url: "/admin/users/delete/"+id,
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
                url: "/admin/product/delete/"+id,
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
                url: "/admin/news/delete/"+id,
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


// --cart--

$(document).ready(function(){
  $('.add-to-cart').click(function(){
      var id = $(this).data('id');
      var cart_product_id = $('.cart_product_id_' + id).val
      ();
      var cart_product_name = $('.cart_product_name_' + id).val();
      var cart_product_images = $('.cart_product_images_' + id).val();
      var cart_product_cost = $('.cart_product_cost_' + id).val();
      var cart_product_qty = $('.cart_product_qty_' + id).val();
      var _token = $('input[name="_token"]').val();

      $.ajax({
            url: '/add-cart-ajax',
            method: 'POST',
            data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,
                cart_product_images:cart_product_images,cart_product_cost:cart_product_cost,
                cart_product_qty:cart_product_qty,_token:_token},
            success:function(data){
           swal("Hello world!");
            }
      });
  });
});


$(document).ready(function(){
        $('.feelbackbutton').click(function(){
            swal("Thông báo!", "Bạn đã viết cảm nhận thành công!", "success");

        });
    });


$(document).ready(function(){
        $('.contactbutton').click(function(){
            swal("Thông báo!", "Bạn đã gửi ý kiến thành công!","success");

        });
    });


$(document).ready(function(){
        $('.registerbutton').click(function(){
            swal("Thông báo!", "Bạn đã đăng ký tài khoản thành công!", "success");

        });
    });