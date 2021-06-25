<head>
    <link rel="stylesheet" href="view/style/tracks.css">
    <title>Tracks</title>
</head>

<body>

    <div class="track_utils">
            <fieldset>
                <button class="region_accordion">Select Region</button>
                <div class="region_panel">
                    <a href="#">Region1</a>
                    <a href="#">Region2</a>
                    <a href="#">Region3</a>
                    <a href="#">Region4</a>
                    <a href="#">Region5</a>
                </div>
                <label for="">MIN : </label>
                <input type="text">
                <br>
                <label for="">MAX : </label>
                <input type="text">
                <br>
                <label for="searchTrack">Search : </label>
                <input type="text" name="searchTrack" id="keyword">
                <button onclick="buttonClick()">Search</button>
            </fieldset>
            <script>
                const ajax=new XLMHttpRequest();
                ajax.onload=function(){
                    const data=JSON.parse(ajax.responseText);
                    clearProducts();
                    displayProducts(data);
                };
                const url=getProductsUrl(keyword);
                ajax.open("GET",url);
                ajax.send();

                const response=JSON.parse(ajax.responseText);
                console.log(response);

                function clearProducts() {
                    const productUl = document.getElementById("products");
                    productUl.textContent = "";
                 }

                function displayProducts(data) {
                    data.data.products.forEach(product => displayProduct(product));
                }

                function buttonClick() {
                    getProducts(document.getElementById("keyword").value);
                }
            </script>
        </div>

    <div class="track_container">
        <div class="carousel">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img src="view/assets/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/4.jpg" alt="">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </div>
        <div class="grid_container">

            <?php foreach ($result as $key => $row) {
            ?>
                    <div class="grid_track_card" >
                     <form action="trackpage" method="post" class="trackForm" >
                        <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' ?></div>
                        <div class="card_price"><?php echo $row->getHarga() . ' Rp' ?></div>
                        <div class="card_distance"><?php echo $row->getJarak() ?></div>
                        <div class="card_name"><?php echo $row->getTema() ?></div>
                        <input type="text" value="<?php echo $row->getTema()?>" name="tema">
                     </form>
                    </div>
                
               
            
               
            <?php } ?>

           

        </div>
    </div>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 15000);
    </script>

    <script defer src="view/JS/tracks.js"></script>

</body>