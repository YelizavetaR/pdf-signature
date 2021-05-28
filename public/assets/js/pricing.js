  // Accordion logic.
  (function() {
      var accordion = document.querySelector('.accordion');
      var itemsArray = accordion.querySelectorAll('.accordion__item');
      var titlesArray = accordion.querySelectorAll('.accordion__title');
      titlesArray.forEach(function(title) {
          title.addEventListener('click', function(event) {
              // Close items.
              itemsArray.forEach(function(item) {
                  item.classList.remove('open');
              });
              // Open item.
              event.currentTarget.parentElement.classList.add('open');
          })
      });
  })();

  var dropdowns = document.getElementsByClassName('list__dropdown');
  var clickListListener = function(e) {
      var related = e.target.dataset.rel;
      var lists = document.querySelectorAll('[data-rel="' + related + '"]');

      for (var k = 0; k < lists.length; k++) {
          lists[k].nextElementSibling.style.display = lists[k].nextElementSibling.style.display == 'block' ?
              'none' : 'block';
      }
  }
  var toogleListRelated = function(rel) {

  }
  for (var i = 0; i < dropdowns.length; i++) {
      dropdowns[i].addEventListener('click', clickListListener, false);
  }

  var periodSelect = document.querySelectorAll('.payment-period__payments__item');
  var periodSelectAction = function(e) {
      var period = e.currentTarget.dataset.periodRel;
      periodSelect.forEach(function(item) {
          item.classList.remove('payment-period__payments__item--active');
      });
      e.currentTarget.classList.add('payment-period__payments__item--active');
      var prices = document.querySelectorAll('[data-period-selected]');
      prices.forEach(function(item) {
          item.classList.add('hidden');
      });
      var pricesSelected = document.querySelectorAll('[data-period-selected="' + period + '"]');
      pricesSelected.forEach(function(item) {
          item.classList.remove('hidden');
      });
  }
  for (var i = 0; i < periodSelect.length; i++) {
      periodSelect[i].addEventListener('click', periodSelectAction, false);
  }