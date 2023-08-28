jQuery(document).ready(function ($) {
  $("#payment_input").click(function () {
    var checkbox = $(this);
    var link = $(".start_wr_item_btn");

    if (checkbox.is(":checked")) {
      link.attr("href", "product yearly payment");

      $(".start_wr_item_cost_professional .plan_cost").html("1779");
      $(".start_wr_item_cost_basic .plan_cost").html("559");
      $(".start_wr_item_cost_starter .plan_cost").html("229");

      $(".save-month").css("display", "none");
      $(".save-cost").html("20");

      $(".save-year").css("display", "block");

      $(".start_wr_item_cost_professional .save-cost").html("120");
      $(".start_wr_item_cost_basic .save-cost").html("50");
      $(".start_wr_item_cost_starter .save-cost").html("20");

      $(".plan_data").html("سنوي");
    } else {
      link.attr("href", "product monthly payment");

      $(".start_wr_item_cost_professional .plan_cost").html("999");
      $(".start_wr_item_cost_basic .plan_cost").html("340");
      $(".start_wr_item_cost_starter .plan_cost").html("159");

      $(".save-year").css("display", "none");
      $(".save-month").css("display", "block");

      $(".save-cost").html("0");

      $(".plan_data").html("شهري");
    }
  });
});
