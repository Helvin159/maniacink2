import $ from "jquery";

// Create new message
class newMessage {
  constructor() {
    this.events();
  }

  events() {
    $("#confirmEmail").on("keyup", this.showSubmitButton);
    $("#submit").on("click", this.messageDispatcher);
  }

  // methods
  messageDispatcher() {
    var newMessage = {
      message: {
        title: $("#name").val(),
        phone: $("#pNumber").val(),
        email: $("#address").val(),
        explanation: $("#explanation").val(),
        concept: $("#concept").val(),
        covid: $("#covid").val(),
        status: "private",
      },
    };

    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader("X-WP-Nonce", maniacData.nonce);
      },
      url: maniacData.root_url + "/wp-json/maniac/v1/new-message",
      type: "POST",
      data: newMessage,
      dataType: "json",
      success: (response) => {
        console.log(response);
        console.log("good");
        setTimeout(function () {
          $("#contactForm").addClass("d-none");
          $("#thankYou").removeClass("d-none");
        }, 850);
      },
      error: (response) => {
        console.log("sorry");
        console.log(response);
        setTimeout(function () {
          $("#contactForm").addClass("d-none");
          $("#thankYou").removeClass("d-none");
        }, 850);
      },
    });
  }

  showSubmitButton() {
    if ($("#address").val() == $("#confirmEmail").val()) {
      $("#submit").removeClass("d-none");
      $("#reConfirm").addClass("d-none");
    } else if ($("#address") != $("#confirmEmail")) {
      $("#reConfirm").removeClass("d-none");
      $("#submit").addClass("d-none");
    }
  }
}

export default newMessage;
