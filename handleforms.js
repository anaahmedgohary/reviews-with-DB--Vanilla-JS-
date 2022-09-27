$("#formStyle").on("submit", function (e) {
  e.preventDefault(); //prevent default form submition
  var FormData = $("#formStyle").serialize();

  $.ajax({
    type: "post",
    url: "postzreveiw.php",
    data: FormData,
    dataTYpe: "json",
    encode: true,
    beforeSend: function () {
      $("#reviewSubmission").html("Sending");
    },
    success: function (response) {
      response = JSON.parse(response);

      if (response == "ok") {
        $("#reviewSubmission").html("Your message has been sent successfully.");
      } else {
        $("errormessage").html(response);
      }
    },
  });

  $("#reviewSubmission").attr("disabled", true);
  alert(`Thank you for your review ✅.\nCheckout New Reviews.`);
});
