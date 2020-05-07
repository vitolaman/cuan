	Email.send({
	Host: "smtp.gmail.com",
	Username : "michaelwidap@gmail.com",
	Password : "michaelwp2807",
	To : '<recipient’s email address>',
	From : "<sender’s email address>",
	Subject : "<email subject>",
	Body : "<email body>",
	}).then(
		message => alert("mail sent successfully")
	);
