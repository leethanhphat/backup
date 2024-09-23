<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bt1.css">
    <title>Bài tập click hiện người nổi tiếng</title>
</head>
<body>
    <div class="container">
        <div class="top" >
            
        </div>

        <div class="home"> 
            Home
        </div>

        <div class="mid">
            <div class="left"></div>
            <div class="center">
                <div class="grid-container">
                <?php
                $data = array(
                    array("https://cdn.tgdd.vn/Files/2022/02/21/1416573/bill-gates_1280x720-800-resize.jpg", "Bill Gate"),
                    array("https://upload.wikimedia.org/wikipedia/commons/8/8d/President_Barack_Obama.jpg", "Obama"),
                    array("https://dug0nmhkbevod.vcdn.cloud/Mam/attach/upload/01122022004832/004834_52479783522_5919c73401_k166971614833.jpg", "Faker"),
                    array("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTsTlkCdVvT0wgwTS4stJEPKiEWBIdLfHDBhqdLxCdk55e4B0VG_M4kVdf3tDPd1233hM&usqp=CAU", "Lebron James"),
                    array("https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk5MzM4MzU4MjIzMjE4NjM4/kevin-durant.jpg", "KD"),
                    array("https://media.cnn.com/api/v1/images/stellar/prod/230206093653-01-steph-curry-injured-020423.jpg?c=16x9&q=h_720,w_1280,c_fill/f_webp", "Curry")
                );

                foreach ($data as $item) {
                    echo '<div class="grid-item">';
                    echo '<img src="' . $item[0] . '" alt="Hình ảnh người nổi tiếng" width="300" height="300">'; // Đặt kích thước ảnh ở đây
                    echo '<p>' . $item[1] . '</p>';
                    echo '</div>';
                }
                ?>
                </div>

            </div>
            <div class="right"></div>
        </div>

        <div class="bot">

        </div>
    </div>
</body>
</html>