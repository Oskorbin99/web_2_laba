<?php
// Модуль (Бокового) меню
include("data/data_menu.php");//Подключение файла с данными.
echo "<h1> Меню</h1>
        <div id ='menu'  >
            <div onClick='dyn(0)'  class = 'menu_button' id = 'menu_0'>$menu_name[0] </div>
            <div onClick='dyn(1)' class = 'menu_button' id = 'menu_1'>$menu_name[1]</div>
            <div onClick='dyn(2)' class = 'menu_button' id = 'menu_2'>$menu_name[2] </div>
            <div onClick='dyn(3)' class = 'menu_button' id = 'menu_3'>$menu_name[3] </div>
            <div onClick='dyn(4)' class = 'menu_button' id = 'menu_4'>$menu_name[4] </div>
            <div onClick='dyn(5)' class = 'menu_button' id = 'menu_5'>$menu_name[5] </div>
            <pre id ='Counter'> </pre>
        </div>
        ";
?>