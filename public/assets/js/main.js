// function handleClick(link) {
//     // Remove active class from all links
//     var links = document.querySelectorAll('a');
//     links.forEach(function (el) {
//       el.classList.remove('active');
//     });

//     // Add active class to the clicked link
//     link.classList.add('active');

//     // Save the active link to localStorage
//     localStorage.setItem('activeLink', link.getAttribute('id'));
//   }

//   // Function to check and set the active link from localStorage
//   function setActiveLink() {
//     var activeLinkId = localStorage.getItem('activeLink');
//     if (activeLinkId) {
//       var activeLink = document.getElementById(activeLinkId);
//       activeLink.classList.add('active');
//     }
//   }

  

  document.addEventListener("DOMContentLoaded", function(event) {
    var element = document.querySelectorAll('.element');

    if (element) {
      element.forEach(function(el, key){
        el.addEventListener('click', function () {
          console.log(key);
          el.classList.toggle("active");

          element.forEach(function(ell, els){
            if(key !== els) {
              ell.classList.remove('active');
            }
            console.log(els);
          });

          // Save the active state to local storage
          var activeIndex = el.classList.contains('active') ? key : -1;
          localStorage.setItem("activeIndex", activeIndex);
        });
      });
    }

    // Restore the active state from local storage
    var storedActiveIndex = localStorage.getItem("activeIndex");
    if (storedActiveIndex) {
      element.forEach(function(el, key){
        el.classList.remove('active');
        if (key == storedActiveIndex) {
          el.classList.add('active');
        }
      });
    }
  });