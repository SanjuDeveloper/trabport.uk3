</body>
</html>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="config.js"></script>
<script>
    $("#createBookingForm").on("submit", function(e) {
        e.preventDefault();
        const obj = new BookingConfig();
        obj.createBooking(e);
    });

    $("#vehical_number").on("change", function() {
        alert("getting status");
        const obj = new BookingConfig();
        obj.getLoading();
    });
</script>   
</body>
</html>