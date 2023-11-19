<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="./css/all.css" />
    <script>
        <?php
        $json = 'data/test.json';
        $data = json_decode(file_get_contents($json), true);
        $fnum = $data["entity"]["friendly"];
        for ($i = 1; $i <= count($fnum); $i++) {
            echo "function sfe$i() {
                var element = document.getElementById('friendly$i');
                window.location = 'pages/entity/friendly/$i.html';
            }\n";
        }
        ?>
        <?php
        $json = 'data/test.json';
        $data = json_decode(file_get_contents($json), true);
        $nnum = $data["entity"]["neutral"];
        for ($i = 1; $i <= count($nnum); $i++) {
            echo "function sne$i() {
                var element = document.getElementById('neutral$i');
                window.location = 'pages/entity/neutral/$i.html';
            }\n";
        }
        ?>
        <?php
        $json = 'data/test.json';
        $data = json_decode(file_get_contents($json), true);
        $hnum = $data["entity"]["hostile"];
        for ($i = 1; $i <= count($hnum); $i++) {
            echo "function she$i() {
                var element = document.getElementById('hostile$i');
                window.location = 'pages/entity/hostile/$i.html';
            }\n";
        };
        ?>
    </script>
</head>

<body>
    <div class="friendly">
        <div class="title">
            <h3>友好生物</h3>
        </div>
        <div class="main">
            <div class='grid-container'>
                <?php
                $json = 'data/test.json';
                $data = json_decode(file_get_contents($json), true);
                for ($i = 1; $i <= count($fnum); $i++) {
                    $img = $data['entity']['friendly'][$i]['imge'];
                    $name = $data['entity']['friendly'][$i]['zhname'];
                    echo "
                        <div class='grid-item' id='friendly$i' onclick='sfe$i()'>
                        <img src='$img'>
                        <p>$name</p>
                        </div>
                ";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="neutral">
        <div class="title">
            <h3>中立生物</h3>
        </div>
        <div class="main">
            <div class='grid-container'>
                <?php
                $json = 'data/test.json';
                $data = json_decode(file_get_contents($json), true);
                for ($i = 1; $i <= count($nnum); $i++) {
                    $img = $data['entity']['neutral'][$i]['imge'];
                    $name = $data['entity']['neutral'][$i]['zhname'];
                    echo "
                        <div class='grid-item' id='neutral$i' onclick='sne$i()'>
                        <img src='$img'>
                        <p>$name</p>
                        </div>
                ";
                }
                ?>
            </div>
        </div>
        <div class="hostile">
            <div class="title">
                <h3>敌对生物</h3>
            </div>
            <div class="main">
                <div class='grid-container'>
                    <?php
                    $json = 'data/test.json';
                    $data = json_decode(file_get_contents($json), true);
                    for ($i = 1; $i <= count($hnum); $i++) {
                        $img = $data['entity']['hostile'][$i]['imge'];
                        $name = $data['entity']['hostile'][$i]['zhname'];
                        echo "
                        <div class='grid-item' id='hostile$i' onclick='she$i()'>
                        <img src='$img'>
                        <p>$name</p>
                        </div>
                ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>