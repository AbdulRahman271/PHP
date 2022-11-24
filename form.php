<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Form</title>
  </head>
  <body>
    <form
      action="prosesinsert.php"
      method="post"
      name="formulir penjualan"
    >
      <table
        border="2"
        bgcolor="#ff9900"
        rules="all"
        align="center"
        cellpadding="10 "
        cellspacing="7"
        width="50%"
      >
        <tr>
          <th
            style="color: #ff0000; background-color: #ffe600; font-size: 23px"
            colspan="2"
          >
            .::Form Penjualan Buku::.
          </th>
        </tr>

        <tr>
          <td></td>
        </tr>

        <tr>
          <td>No Transakasi</td>
          <td>
            <input
              name="txtno"
              type="text"
              placeholder=""
              size="25"
            />
          </td>
        </tr>

        <tr>
          <td>Nama Pembeli</td>
          <td>
            <input
              name="txtnama"
              type="text"
              placeholder=""
              size="25"
            />
          </td>
        </tr>
        <tr>
          <td><label>Kode Barang</label></td>
          <td>
            <select
              name="txtkode"
              id="kode"
            >
              <option value="html">Html</option>
              <option value="css">css</option>
              <option value="php">php</option>
              <option value="python">Python</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Jumlah</td>
          <td>
            <input
              name="txtjml"
              type="text"
              placeholder=""
              size="25"
            />
          </td>
        </tr>
        <tr>
          <td
            align="center"
            colspan="2"
            style="background-color: #ffe600; color: #ff0000"
          >
            <input
              type="submit"
              value="Hitung Transaksi"
              style="color: rgb(55, 255, 0)"
            />
            <input
              type="reset"
              value="Batal"
              style="color: #ff0000"
            />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
