// description: Common functions used across multiple pages

// this is used in index file for cards
function toggleDescription(id, button) {
  const element = document.getElementById(id);
  // const card = button.closest('.card-a');
  const idd = document.getElementById('#desc4');

  // Check the current state of the description and toggle
  if (element.style.whiteSpace === 'nowrap') {
    element.style.whiteSpace = 'normal';
    element.style.overflow = 'visible';
    idd.style.height = 'auto'; // Allow height to adjust for this specific card
    button.textContent = 'Collapse';
  } else {
    element.style.whiteSpace = 'nowrap';
    element.style.overflow = 'hidden';
    card.style.height = ''; // Reset height to default
    button.textContent = 'Info';
  }
}
