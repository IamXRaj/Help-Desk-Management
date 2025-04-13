<script>
  $(document).ready(function() {
    $('#appointmentForm').submit(function(event) {
      // Prevent the default form submission
      event.preventDefault();

      // Get the form data
      var formData = $(this).serialize();

      // Send the AJAX request
      $.ajax({
        type: 'POST',
        url: 'inquiry.php', // Replace 'process.php' with the URL of your PHP script
        data: formData,
        success: function(response) {
          // Handle the response from the server
          $('#appointmentDetails').html(response); // Update the HTML content with the response
        },
        error: function(xhr, status, error) {
          // Handle errors here
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>