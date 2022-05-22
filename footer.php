<footer class="d-flex flex-wrap bg-dark text-white justify-content-between
    align-items-center py-3">
    <div class="col-md-4 d-flex align-items-center text-white">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none
        lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap" /></svg>
        </a>
        <span class="mb-3 mb-md-0">&copy; 2022 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted text-white" href="#"><img
              src="wp-content/uploads/2022/05/icon-facebook.svg" alt=""></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img
              src="wp-content/uploads/2022/05/icon-twitter.svg" alt=""></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi"
              width="24" height="24"><use xlink:href="#facebook" /></svg></a></li>
        </ul>
      </footer>
    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"></script>
    <script>
$(function () {
  console.log("ready!");

  $(".btn-danger").hover(
    function () {
      $(this).css({
        "background-color": "white",
        color: "#FA5757",
      });
    },
    function () {
      $(this).css({
        "background-color": "#FA5757",
        color: "white",
      });
    }
  );

  $(".btn-primary").hover(
    function () {
      $(this).css({
        "background-color": "white",
        color: "hsl(231, 69%, 60%)",
      });
    },
    function () {
      $(this).css({
        "background-color": "hsl(231, 69%, 60%)",
        color: "white",
      });
    }
  );

  $(".btn-light ").hover(
    function () {
      $(this).css({
        "background-color": "white",
        color: "gray",
      });
    },
    function () {
      const newColor = "white";
      $(this).css({
        "background-color": "lightgray",
        color: newColor,
      });
    }
  );

  $(".simple-book").on("click", function () {
    $(".simple").addClass("border-danger");
    $(".speedy").removeClass("border-danger ");
    $(".easy").removeClass("border-danger");
    $("#bookmark-onclik").show();
    $("#share-bookmark").removeClass("d-none");
    $("#intelligent-search").addClass("d-none");
    $("#share-bookmark").addClass("d-none");
  });

  $(".speedy-search").on("click", function () {
    console.log("çalıştı");
    $(".speedy").addClass("border-danger ");
    $(".simple").removeClass("border-danger");
    $(".easy").removeClass("border-danger");
    $("#bookmark-onclik").hide();
    $("#intelligent-search").removeClass("d-none");
    $("#intelligent-search").addClass("d-flex");
    $("#share-bookmark").addClass("d-none");
  });

  $(".easy-sharing").on("click", function () {
    $(".easy").addClass("border-danger");
    $(".speedy").removeClass("border-danger ");
    $(".simple").removeClass("border-danger");
    $("#share-bookmark").removeClass("d-none");
    $("#share-bookmark").addClass("d-flex");
    $("#intelligent-search").removeClass("d-flex");
    $("#intelligent-search").addClass("d-none");
    $("#bookmark-onclik").hide();
  });

 
   //input email validaiton
    (() => {
      "use strict";


      const forms = document.querySelectorAll(".needs-validation");

  
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
 
});


    </script>
  </body>
</html>
