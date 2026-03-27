class BookingConfig {

    //Method for create Bookings
    createBooking() {
        alert("this is create booking method");
        $.ajax({
            url: "config.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
                alert("inside success of ajax");
                alert(response);
                //window.location.href = "dashboard.php"; // Change to your dashboard page
            }
        });

    }

    getLoading() {
        $.ajax({
            url: "config.php",
            type: "POST",
            data: {
                vehical_number: $("#vehical_number option:selected").text(),
                CheckLoadingStatus: true
            },
            success: function(response) {
                $("#check_loading_status").val(response);
                alert("this is response: " + response);
                console.log(response);
                //return response;

            }
        });
    }

    test() {
        alert("testing config.js file...");
    }
};