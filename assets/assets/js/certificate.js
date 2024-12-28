const galleryItems = document.querySelectorAll('.gallery-item');  
const modal = document.querySelector('.modal');  
const modalImage = document.getElementById('modal-image');  
const closeButton = document.querySelector('.close-button');  

galleryItems.forEach(item => {  
  item.addEventListener('click', () => {  
    const fullImageUrl = item.getAttribute('data-full');  
    modalImage.src = fullImageUrl;  
    modal.style.display = 'block';  
  });  
});  

closeButton.addEventListener('click', () => {  
  modal.style.display = 'none';  
});  

window.addEventListener('click', (event) => {  
  if (event.target == modal) {  
    modal.style.display = 'none';  
  }  
});