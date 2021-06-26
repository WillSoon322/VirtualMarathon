
<body>
  <div class="new_track" style="background-color: burlywood; position:absolute;">
    <form action="addTrack" method="POST" enctype="multipart/form-data">
      <label for="namatrack">Nama Track:</label>
      <input type="text" id="namatrack" name="name"><br><br>
      <label for="harga">Harga:</label>
      <input type="text" id="harga" name="harga"><br><br>
      <label for="region">Region:</label>
      <input type="text" id="region" name="region"><br><br>
      <label for="jarak">jarak:</label>
      <input type="number" id="jarak" name="jarak"><br><br>
      
      Foto Track:
      <input type="file" name="gambarTrack" id="gambarTrack"><br><br>
      Gambar Medali:
      <input type="file" name="gambarMedali" id="gambarMedali"><br><br>
      Gambar Badge:
      <input type="file" name="gambarBadge" id="gambarBadge"><br><br>
      <input type="submit">Submit</button>
    </form>
    <button onclick="back()">Back</button>
    <script>
      function back(){
        location.href="profilePemilik";
      }

    </script>
  </div>

</body>
