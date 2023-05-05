<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right-o.css"
      rel="stylesheet"
    />
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <div class="container">
      <br /><br />
      <form action="pdf.php" method="POST">
        <table id="myTable" class="table order-list">
          <thead>
            <tr>
              <td>PEOs</td>
              <td>Quality education in fundamentals through innovative TLP.</td>
              <td>Define, design and Solving engineering problems.</td>
              <td>
                Imbibing creativity, innovation and encouraging Research
                culture.
              </td>
              <td>
                Inculcating leadership qualities, Professional ethics and Social
                responsibility
              </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-sm-2">
                <input type="text" name="title" class="form-control" />
              </td>
              <td class="col-sm-2">
                <input type="mail" name="cri1" class="form-control" />
              </td>
              <td class="col-sm-2">
                <input type="text" name="cri2" class="form-control" />
              </td>
              <td class="col-sm-2">
                <input type="text" name="cri3" class="form-control" />
              </td>
              <td class="col-sm-2">
                <input type="text" name="cri4" class="form-control" />
              </td>
              <td class="col-sm-2"><a class="deleteRow"></a></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" style="text-align: left">
                <input
                  type="button"
                  class="btn btn-lg btn-block"
                  id="addrow"
                  value="Add Row"
                />
              </td>
            </tr>
          </tfoot>
        </table>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" id="button" name="submit" />
          </td>
        </tr>
      </form>
      <script>
        $(document).ready(function () {
          var counter = 0;

          $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols +=
              '<td><input type="text" class="form-control" name="title' +
              counter +
              '"/></td>';
            cols +=
              '<td><input type="text" class="form-control" name="cri1' +
              counter +
              '"/></td>';
            cols +=
              '<td><input type="text" class="form-control" name="cri2' +
              counter +
              '"/></td>';
            cols +=
              '<td><input type="text" class="form-control" name="cri3' +
              counter +
              '"/></td>';
            cols +=
              '<td><input type="text" class="form-control" name="cri4' +
              counter +
              '"/></td>';

            cols +=
              '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
          });

          $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            counter -= 1;
          });
        });

        function calculateRow(row) {
          var price = +row.find('input[name^="price"]').val();
        }

        function calculateGrandTotal() {
          var grandTotal = 0;
          $("table.order-list")
            .find('input[name^="price"]')
            .each(function () {
              grandTotal += +$(this).val();
            });
          $("#grandtotal").text(grandTotal.toFixed(2));
        }
      </script>
    </div>
  </body>
</html>
