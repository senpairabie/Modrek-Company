
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting normally

    // Collect form data
    const project_name = document.getElementById('project_name').value;
    const product_url = document.getElementById('product_url').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Create the data object to send
    const data = {
      project_name: project_name,
      product_url: product_url,
      phone: phone,
      email: email,
      message: message
    };

    // Send data using Fetch API
    fetch('https://mudrk.net/be/send_email', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(responseData => {
      if (responseData.status === 'success') {
        alert('تم إرسال الرسالة بنجاح');
      } else {
        alert('حدث خطأ في إرسال الرسالة');
      }
    })
    .catch(error => {
      alert('حدث خطأ: ' + error.message);
    });
  });
