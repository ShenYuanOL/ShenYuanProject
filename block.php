<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="./css/all.css" />
    <script>
        <?php
        $json = 'data/test.json';
        $data = json_decode(file_get_contents($json), true);
        $bnum = $data["block"];
        for ($i = 1; $i <= count($bnum); $i++) {
            echo "function sb$i() {
                var element = document.getElementById('block$i');
                window.location = 'pages/block/$i.html';
            }\n";
        }
        ?>
    </script>
</head>

<body>
    <div class="block">
        <div class="title">
            <h3>方块</h3>
        </div>
        <div class="main">
            <div class='grid-container'>
                <?php
                $json = 'data/test.json';
                $data = json_decode(file_get_contents($json), true);
                for ($i = 1; $i <= count($bnum); $i++) {
                    $img = $data['block'][$i]['imge'];
                    $name = $data['block'][$i]['zhname'];
                    echo "
                        <div class='grid-item' id='block$i' onclick='sb$i()'>
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