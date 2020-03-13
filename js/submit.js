function SubmitFormData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var number = $("#number").val();
    var subject = $("#subject").val();
    var date = $("#where").val();
    var message = $("#message").val();
    $.post("includes/submit.php", { name: name, email: email, number: number, subject: subject, where: where, message: message },
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
}
