var calcCartTotal = function () {
    var total = 0.0;
    var totalFb = 0.0;
    $.each($(".cartItem"), function (index, item) {
        var id = $(item).attr("data-id");
        var idQuantity = "#quantity-" + id;
        var idPrice = "#product-price-" + id;
        var price = parseInt($(idPrice).attr("data-price"));
        var isinst = $(idPrice).attr("data-IsInstallments");
        var fb = 1000;
        if (isinst != "True") {
            fb = price;
        }
        var qty = parseInt($(idQuantity).val());

        total = total + (price * qty);
        totalFb = totalFb + (fb * qty);
    });
    $("#cartTotal").text(parseInt(total));
    $("#FirstPayment").val(parseInt(totalFb));

    var fp = parseFloat($("#FirstPayment").val());
    var InstallmentBy = parseInt($("#InstallmentBy").val());
    var total = parseFloat($("#cartTotal").text());

    if (InstallmentBy > 0) {
        $("#MonthlyPaymentLi").slideDown("slow");
        var remind = total - fp;
        var payment = parseInt(remind / InstallmentBy);
        $("#MonthlyPayment").val(payment);
    } else {
        $("#MonthlyPaymentLi").slideUp("slow");
        $("#MonthlyPayment").val(0);
        $("#FirstPayment").val(total);
    }
}

var cartQuantityOperation = function (id, operation) {
    var idItem = "#item-" + id;
    var productId = $(idItem).attr("data-productid");
    var currency = $("#Currency").val();
    //alert("done")
    showLoading();
    if (operation) {
        setTimeout(function () {

            $.ajax({
                type: "post",
                url: '/Store/AddItemToBasket/',
                data: { 'productId': productId, "quantity": 1 },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.message);
                        var idName = "#itemTotal-" + id;
                        var idQuantity = "#quantity-" + id;
                        var idPrice = "#product-price-" + id;
                        var price = parseFloat($(idPrice).attr("data-price"));
                        var qty = parseFloat($(idQuantity).val());
                        $(idName).text((price * qty).toFixed(2) + " " + currency);
                        calcCartTotal();
                        $(".cart_badge").text(data.count);
                        $("#cart_badge_total_price").text(data.total);
                        $("#FirstPayment").change();
                        hideLoading();
                    }
                    else {
                        toastr.error(data.message);
                        hideLoading();
                    }
                }
            });
        }, 10);
    }
    else {

        setTimeout(function () {

            $.ajax({
                type: "delete",
                url: '/Store/RemoveCartItem/',
                data: { 'productId': productId, "quantity": 1 },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.message);
                        var idName = "#itemTotal-" + id;
                        var idQuantity = "#quantity-" + id;
                        var idPrice = "#product-price-" + id;
                        var price = parseFloat($(idPrice).attr("data-price"));
                        var qty = parseFloat($(idQuantity).val());
                        $(idName).text((price * qty).toFixed(2) + " " + currency);
                        calcCartTotal();
                        $(".cart_badge").text(data.count);
                        $("#cart_badge_total_price").text(data.total);
                        $("#FirstPayment").change();
                        hideLoading();
                    }
                    else {
                        toastr.error(data.message);
                        hideLoading();
                    }
                }
            });
        }, 10);
    }
}

$(document).ready(function () {

    $(".delete-button").off("click").click(function () {
        var id = $(this).attr("data-item-id");
        var productId = $(this).attr("data-product-id");
        var item = $(this).closest(".cartItem");
        var idQuantity = "#quantity-" + id;
        var qty = $(item).find(idQuantity).val();
        showLoading();
        setTimeout(function () {
            $.ajax({
                type: "delete",
                url: '/Store/RemoveCartItem/',
                data: { 'productId': productId, "quantity": qty },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.message);
                        $(".cart_badge").text(data.count);
                        $("#cart_badge_total_price").text(data.total);
                        $(item).remove();
                        if ($(".cartItem").length == 0) {
                            window.location.reload();
                        } else {
                            calcCartTotal();
                            hideLoading();
                        }
                    }
                    else {
                        toastr.error(data.message);
                        hideLoading();
                    }
                }
            });
        }, 10);
    });

    $("#FirstPayment").off("change").change(function () {
        var fp = parseInt($("#FirstPayment").val());
        var minFb = 0.0;
        $.each($(".cartItem"), function (index, item) {
            var id = $(item).attr("data-id");
            var idQuantity = "#quantity-" + id;
            var fb = 1000;
            var qty = parseInt($(idQuantity).val());

            minFb = minFb + (fb * qty);
        });
        if (fp < minFb) {
            $("#FirstPayment").val(minFb);
        }
        var InstallmentBy = parseInt($("#InstallmentBy").val());
        var total = parseFloat($("#cartTotal").text());

        if (InstallmentBy > 0) {
            $("#MonthlyPaymentLi").slideDown("slow");
            var remind = total - fp;
            var payment = parseInt(remind / InstallmentBy);
            $("#MonthlyPayment").val(payment);
        } else {
            $("#MonthlyPaymentLi").slideUp("slow");
            $("#MonthlyPayment").val(0);
            $("#FirstPayment").val(total);
        }
        fp = parseInt($("#FirstPayment").val());
        showLoading();
        setTimeout(function () {
            $.ajax({
                type: "post",
                url: '/Store/updateCart/',
                data: { 'firstPayment': fp, "installmentBy": InstallmentBy },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.message);
                            hideLoading();
                    }
                    else {
                        toastr.error(data.message);
                        hideLoading();
                    }
                }
            });
        }, 10);
    });
    $("#InstallmentBy").off("change").change(function () {
        calcCartTotal();
        var id = parseInt($(this).val());
        var fp = parseFloat($("#FirstPayment").val());
        var total = parseFloat($("#cartTotal").text());

        if (id > 0) {
            $("#MonthlyPaymentLi").slideDown("slow");
            var remind = total - fp;
            var payment = parseInt(remind / id);
            $("#MonthlyPayment").val(payment);
        } else {
            $("#MonthlyPaymentLi").slideUp("slow");
            $("#MonthlyPayment").val(0);
            $("#FirstPayment").val(total);
        }
        fp = parseInt($("#FirstPayment").val());
        showLoading();
        setTimeout(function () {
            $.ajax({
                type: "post",
                url: '/Store/updateCart/',
                data: { 'firstPayment': fp, "installmentBy": id },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.message);
                        hideLoading();
                    }
                    else {
                        toastr.error(data.message);
                        hideLoading();
                    }
                }
            });
        }, 10);
    });

    $("#submit_cart").off("click").click(function () {

        window.location.href = "/store/checkout";
    });

});