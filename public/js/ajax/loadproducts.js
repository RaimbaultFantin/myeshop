  $(document).ready(function () {
      console.log("loadproducts")
      $("#search").on("click", function (e) {
          e.preventDefault(e);

          $.get({
              url: "test",
              data: "price="+100,
              dataType: "json",
              // send data to servers

              success: function (data) {
                for (var i = 0; i < data.length; i++){
                    console.log(data[i].name)
                }
              },

              error: function (err) {
                  console.log(err)
              }
          })
      });

  });
