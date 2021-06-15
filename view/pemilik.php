
<body>
  <div class="new_track" style="background-color: burlywood; position:absolute;">
    <form action="pemilik" method="POST" >
      <label for="namatrack">Nama Track:</label>
      <input type="text" id="namatrack" name="name"><br><br>
      <label for="harga">Harga:</label>
      <input type="text" id="harga" name="harga"><br><br>
      <label for="region">Region:</label>
      <input type="text" id="region" name="region"><br><br>
      <label for="jarak">jarak:</label>
      <input type="number" id="jarak" name="jarak"><br><br>
      
      Foto Track:
      <input type="file" name="gambar" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit"> <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>

</body>
