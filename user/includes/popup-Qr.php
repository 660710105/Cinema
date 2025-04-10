<style>
   #popup-container {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  #popup-content {
    display: flex;
    flex-direction: column;
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 20%; /* Could be more or less, depending on screen size */
    text-align: center;
    position: relative; /* To position the close button */
  }
  #popup-img{
    margin: auto;
    width: 200px;
  }
  .close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close-button:hover,
  .close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  #upload-label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  #file-upload {
    margin-bottom: 15px;
  }

  #preview-image {
    max-width: 100%;
    height: auto;
    display: none; /* Hidden initially */
    margin-bottom: 10px;
  }

  .submit-button ,#pop {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
  }

  .submit-button:hover ,#pop:hover{
    opacity: 0.8;
  }

  #upload-message {
    color: red;
    margin-top: 10px;
  }
</style>
<body>

<button id="pop" onclick=showPopup()>Payment_QR</button>
<div id="popup-container">
  <div id="popup-content">
    <span class="close-button" onclick="closePopup()">&times;</span>
    <label for="file-upload" id="upload-label">Upload an Receipt (jpg):</label>
    <img src ="./includes/qr_payment.jpg" id="popup-img">
    <input type="file" id="file-upload" onchange="previewFile()">
    <img id="preview-image" src="#" alt="Uploaded Image Preview">
    <p id="upload-message" style="display:none;">Please upload a receipt image before submitting.</p>
    <button class="submit-button" onclick="validateAndSubmit()" disabled>Submit</button>
  </div>
</div>

<script>
let fileUploaded = false;
const submitButton = document.querySelector('.submit-button');
const uploadMessage = document.getElementById('upload-message');
const previewImage = document.getElementById('preview-image');

function showPopup() {
  document.getElementById("popup-container").style.display = "block";
  fileUploaded = false;
  submitButton.disabled = true;
  uploadMessage.style.display = "none";
  previewImage.style.display = "none";
  document.getElementById('file-upload').value = ''; // Clear any previously selected file
}

function closePopup() {
  document.getElementById("popup-container").style.display = "none";
}

function previewFile() {
  const fileInput = document.getElementById('file-upload');
  const file = fileInput.files[0];

  if (file && file.type === 'image/jpeg') {
    const reader = new FileReader();

    reader.onload = function(e) {
      previewImage.src = e.target.result;
      previewImage.style.display = "block";
      fileUploaded = true;
      submitButton.disabled = false;
      uploadMessage.style.display = "none";
    }

    reader.readAsDataURL(file);
  } else if (file) {
    // If a file is selected but not a JPG
    previewImage.style.display = "none";
    fileUploaded = false;
    submitButton.disabled = true;
    uploadMessage.textContent = "Please upload a valid JPG image.";
    uploadMessage.style.display = "block";
  } else {
    // No file selected
    previewImage.style.display = "none";
    fileUploaded = false;
    submitButton.disabled = true;
    uploadMessage.style.display = "none";
  }
}

function validateAndSubmit() {
  if (fileUploaded) {
    alert("Image uploaded and submitted!"); // Replace with your actual submit logic
    closePopup(); // Optionally close the popup after submitting
  } else {
    uploadMessage.textContent = "Please upload a JPG image before submitting.";
    uploadMessage.style.display = "block";
  }
}

// Close the popup if the user clicks outside of it
window.onclick = function(event) {
  var modal = document.getElementById("popup-container");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
