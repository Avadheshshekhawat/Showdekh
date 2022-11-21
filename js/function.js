// ======================================
// ======================================
// ======================================
// ======================================
// Movie Thumbnial Page start




// =====================================
// =====================================
//Theatre Model Box start


// carnival modal start
var carnival = document.getElementById('carnival')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = carnival.querySelector('.modal-title')
  var modalBodyInput = carnival.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// carnival modal end


// funstar modal start
var funstar = document.getElementById('funstar')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = funstar.querySelector('.modal-title')
  var modalBodyInput = funstar.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// funstar modal end



// Triton modal start
var triton = document.getElementById('triton')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = triton.querySelector('.modal-title')
  var modalBodyInput = triton.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// Triton modal end



// WTP modal start
var wtp = document.getElementById('wtp')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = wtp.querySelector('.modal-title')
  var modalBodyInput = wtp.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// WTP modal end



// Golcha modal start
var golcha = document.getElementById('golcha')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = golcha.querySelector('.modal-title')
  var modalBodyInput = golcha.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// Golcha modal end


// Theatre Model Box end
// =====================================
// =====================================





// T & C Modal box start
var carnival_tnc = document.getElementById('carnival_tnc')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = carnival_tnc.querySelector('.modal-title')
  var modalBodyInput = carnival_tnc.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
// T & C modal box end






// Theater select seat start
function toggleClass(el){
  if(el.className == "seat"){
    el.className = "selected-seat";
  }
  else {
    el.className = "seat";
  }
}

// Theater select seat end 




        
   