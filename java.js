$('#comment-form').submit(function(event) {
  event.preventDefault();

  var formData = $(this).serialize();

  $.ajax({
    type: 'POST',
    url: 'process-comment.php',
    data: formData,
    success: function(response) {
      // Display a success message
      $('#comment-form').html('<p>Thank you for your comment!</p>');
    },
    error: function() {
      // Display an error message
      $('#comment-form').html('<p>Sorry, there was an error submitting your comment. Please try again later.</p>');
    }
  });
});
