<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="./css/all.css" />
    <script>
        <?php
        $json = 'data/test.json';
        $data = json_decode(file_get_contents($json), true);
        $inum = $data["item"];
        for ($i = 1; $i <= count($inum); $i++) {
            echo "function sb$i() {
                var element = document.getElementById('item$i');
                window.location = 'pages/item/$i.html';
            }\n";
        }
        ?>
    </script>
</head>

<body>
    <div class="item">
        <div class="title">
            <h3>物品</h3>
        </div>
        <div class="main">
            <div class='grid-container'>
                <?php
                $json = 'data/test.json';
                $data = json_decode(file_get_contents($json), true);
                for ($i = 1; $i <= count($inum); $i++) {
                    $img = $data['item'][$i]['imge'];
                    $name = $data['item'][$i]['zhname'];
                    echo "
                        <div class='grid-item' id='item$i' onclick='sb$i()'>
                        <img src='$img'>
                        <p>$name</p>
                        </div>
                ";
                }
                ?>
            </div>
        </div>
    </div>
</body>