// vanilla JS isotope filtering: https://codepen.io/desandro/pen/BgcCD?editors=1010

// init Isotope
var gallery = document.querySelector('.gallery');

var iso = new Isotope( gallery, {
  itemSelector: '.gallery-item',
  percentPosition: true,
  masonry: {
    gutter: 12
  }
});

imagesLoaded( gallery ).on( 'progress', function() {
  // layout Isotope after each image loads
  iso.layout();
});

// bind filter button click
var filtersElem = document.querySelector('.filter-button-group');
filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
    return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  iso.arrange({ filter: filterValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.filter-button-group');
for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
}

function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
    // only work with buttons
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}
