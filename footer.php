   <!-- Bootstrap Js -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
<script>
function confirmDelete() {
    // Display a confirmation dialog
    var confirmed = confirm('Are you sure you want to Logout?');

    // If the user confirms the delete action
    if (confirmed) {
     
        // alert('Logout Successfully.');
    } else {
       
        alert('Logout error.');
    }
}

</script>