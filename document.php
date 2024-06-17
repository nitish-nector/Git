<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
 
 .card-container {
   position : relative ;
 }
 .profile-card {
   width: 400px;
   height: 400px;
   margin : 1rem ;
   
   
    
    
   
 }
 
 
 .profile-card .card-title {
   background : #0276FF ;
   font-size: 1.4rem;
   font-weight: 400;
   color: white;
   padding: 1rem 1.5rem;
   text-align: left;
    border-radius : 3px ;
     font-family: "Rubik", sans-serif;
   
 }
 img {
   width : 100% ;
   
 }
 
 .profile-card .card-img {
  
   height : 270px ;
   overflow : hidden ;
   position : relative ;
   z-index :   2 ;
   margin-top : 1rem;
   border-radius : 8px ;
 }
 
  
 
 .profile-card .card-img::after {
             content: '';
             position: absolute;  
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             z-index: 1;  
             background: rgba(0, 0, 0, 0);  
   transition : all 0.2s ease ; 
   cursor : pointer ;
    
   
 }
 
 .profile-card .card-img:hover::after {
   background: rgba(0, 0, 0, 0.5);
 }
 
 
 .profile-card .card-img .view-img-btn {
   position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     background: rgba(0, 0, 0, 0.6);  
     color: white;
     padding: 10px 20px;
     border-radius: 5px;
     text-align: center;
     cursor: pointer;
   z-index : 100; 
   visibility : hidden ;
 }
 
 .profile-card .card-img:hover .view-img-btn {
  visibility : visible;
 }
 
 
 .profile-card .card-img:hover img {
   transition : all 0.2s ease ;
 }
 
 .profile-card .card-img:hover img {
  width : 105% ;
 
 }
 
 .profile-card .card-img .view-img-btn:hover {
   font-weight : bold ;
 }
 
 
 .profile-card .submit-sec {
   display: flex;
   align-items: center;
   justify-content: center;
   padding: 10px 20px;
   max-width: 150px;
   width: 100%;
   outline: none;
   border-radius: 6px;
   border: 1px solid #ff4742;
   color: #ff4742;
   background: white;   
   transition: border 0.3s linear;
   cursor: pointer;
   font-size: 1rem;
   font-weight: bold;
}
.profile-card .submit-sec:hover {
     color: #fff;
    background-color: #ff4742;
   border: 1px solid transparent;
   border-radius: 5px;
 }
 
 .profile-card .custom-file-upload {
   position: relative;
   display: inline-block;
 }
 
 .profile-card .custom-file-upload button {
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 5px;
   cursor: pointer;
   overflow: hidden;
   text-align: left;
   transition: background-color 0.2s ease-in-out;
   box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
   font-family: "Roboto", sans-serif;
 }
 
 
 
 .profile-card .custom-file-upload button::before {
   content: "\f0e4";
   font-family: FontAwesome;
   margin-right: 5px;
 }
 .profile-card .custom-file-upload input[type="file"] {
   width: 100%;
   height: 100%;
   cursor : pointer ;
 }
 .profile-card .custom-file-upload input[type="file"]:hover ~ button {
  background-color: #388e3c;
   color: white;
 }
 
 .profile-card .custom-file-upload input[type="file"] ::-webkit-file-name-text {
   color: black;
 }
 
 .profile-card #fileInput {
   position: absolute;
 }
 
 .profile-card .form form {
   display: flex;
   align-items: center;
 
   gap: 1rem;
   margin-top: 1rem;
 }
 
 .card-container {
   width : 100% ;
   height : 100%  ;
 }
 .card-container  {
   position : absolute ;
     width : 100% ;
   height : 100%  ;
 }
 
 .img-modal {
   position : absolute ;
   top :0 ;
   left : 0 ;
   width : 100% ;
   
   display : flex;
   justify-content :  center; 
   align-items : center;
   transform : rotate(-90deg);
 }
 
  
 .img-modal::after{
             content : "" ;
             position: absolute;  
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             z-index: 1;  
             background: rgba(0, 0, 0, 0.7);  
   transition : all 0.2s ease ; 
   cursor : pointer ;
 }
 
 
 /* -===========================================  */
 
 /* Modal styles */
 .modal {
     display: none; /* Hidden by default */
     position: fixed;
     z-index: 5;
     padding-top: 60px;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
 }
 
 /* Modal Content (Image) */
 .modal-content {
     margin: auto;
     display: block;
     width: 80%;
     max-width: 700px;
 }
 .img-section {
   display:grid;
   place-content :center;
       transform: translate(10px, 10px);
    
 }
 .document img {
   transition : all 0.2s ease ;
 }
 
 /* Caption of Modal Image */
 #caption {    
     display: block;
     width: 80%;
     max-width: 700px;
     text-align: center;
     color: #ccc;
     padding: 10px 0;
     height: 150px;
 }
 
 /* Add Animation - Zoom in the Modal */
 .modal-content, #caption { 
     animation-name: zoom;
     animation-duration: 0.6s;
 }
 
 @keyframes zoom {
     from {transform: scale(0)} 
     to {transform: scale(1)}
 }
 
 /* The Close Button */
 .action-container {
     position: absolute;
     top: 15px;
     right: 35px;
     color: #f1f1f1;
     font-size: 40px;
     font-weight: bold;
     transition: 0.3s;
   display : flex ;
   align-items : center ;
   gap : 1rem ;
 }
 
 .close , .rotate {
   display : grid ; 
   place-content : center ;
   font-size : 2rem ;
 } 
 .close {
   font-size : 2.6rem ;
 }
 
 .close:hover,.rotate :hover ,.rotate:focus ,
 .close:focus {
     color: #bbb;
     text-decoration: none;
     cursor: pointer;
 }
 
 
</style>
<body>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 


<div class="card-container">
  <div class="profile-card">

  <div class="card-title">Adhaar Card</div>

  <div class="card-img">
    
    <img src="http://localhost/Management/files/WhatsApp%20Image%202023-11-19%20at%2021.58.51.jpeg" alt="">
    <span class="view-img-btn">View Full Image</span>
  </div>
  <div class="form">
    <form action="#" method="post" enctype="multipart/form-data">

      
      
        <div class="custom-file-upload">
    <input style="opacity: 0;" type="file" id="fileInput" name="NewAadhaarCard" class="browse" accept=".jpg,.jpeg,.png,.gif,.pdf">
    <button for="fileInput">Choose File</button>
</div>
      <input type="submit" class="submit-sec" name="submitAadhaarCard" value="Upload">

    </form>
  </div>
  
 
</div>

<div id="image-modal" class="modal">
        <div class="action-container">
          <span class="rotate"><i class='bx bx-rotate-left'></i></span>
          <span class="close"><i class='bx bx-x' ></i></span>
        </div>
        <div class="img-section">
          <div class="document">
            <img class="modal-content" id="modal-image" src="http://localhost/Management/files/WhatsApp%20Image%202023-11-19%20at%2021.58.51.jpeg" alt="Image Description">
          </div>
        </div>
    </div>
 

</div>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script>
    // Get the modal
var modal = document.getElementById("image-modal");

// Get the input checkbox
var profileCardViewButton  = document.querySelector(".view-img-btn");

profileCardViewButton.onclick = function () {
  console.log("hello")
  modal.style.display = "block"
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var rotationAngle = 0;

// When the checkbox is clicked, open the modal
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
  rotationAngle = 0;
     
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
 
    }
}


const documetImage = document.querySelector(".document img");

const rotateButton = document.querySelector(".rotate");

rotateButton.onclick = function () {
    rotationAngle = (rotationAngle + 90) % 360; // Increment the angle by 90 degrees
    documetImage.style.transform = `rotate(${rotationAngle}deg)`;
 
   
}

</script>
    
</body>
</html>