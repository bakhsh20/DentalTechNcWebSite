$(document).ready(function () {
  // Ajax function that when the user submits the form it gets the response to provide from the form.json file and displays a thank you message to the user. 
  $(".contact-form").submit(function (e) {
    $.ajax({
      type: "get",
      url: "form.json",
      dataType: "json",
      beforeSend: function () {
        $("#changeContactForm").html("Loading...");
      },
      timeout: 10000,
      error: function (xhr, status, error) {
        alert("Error: " + xhr.status + " - " + error);
      },
      dataType: "json",
      success: function (data) {
        $("#changeContactForm").html("");
        $.getJSON("form.json", function (data) {
          $.each(data, function () {
            $.each(this, function (key, value) {
              $("#changeContactForm").append(
                "<h2>" + value.title + "</h2>" +
                "<p>" + value.response + "</p>"
              );
            });
          });
        });
      }
    });
    e.preventDefault();
  });
});
