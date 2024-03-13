

<?php

$needy_id = $_COOKIE['id'];

$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `needy` WHERE `id`='{$id}'");
$array = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/drafing.css">   
    <link rel="shortcut icon" href="#">
  
    <title>Составление заявки</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
<main>
   <div class="container">
    <div class="drafing-application_block">
      
        <form action="applications_check.php" id= "form" method="post" name="drafing" enctype="multipart/form-data">
        <h1 class="drafing_header">Составление заявки</h1>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="step-drafing_wrap">
        <div class="step-one-drafing_block">
            <p class="step step_one">Шаг 1: В чем именно вы нуждаетесь?</p>
            <textarea  id="step_one" name="requirement" class="step_one_textarea"></textarea>
        </div>
        <div class="step-two-drafing_block">
            
            <div class="group-items_calendar">
            <div class="step step_two">Шаг 2: Выберете день и время.</div>
            <div class="wrapper_calendar">
            <div class="calendar">
              <div class="month_year">
                <div class="dpopdowwn_month">
                  <select class="select_month" id="date_one" name="date_one">
                    <option value="January" id="0">Январь</option>
                    <option value="February" id="1">Февраль</option>
                    <option value="March" id="2">Март</option>
                    <option value="April" id="3">Апрель</option>
                    <option value="May" id="4">Май</option>
                    <option value="June" id="5">Июнь</option>
                    <option value="July" id="6">Июль</option>
                    <option value="August" id="7">Август</option>
                    <option value="September" id="8">Сентябрь</option>
                    <option value="October" id="7">Октябрь</option>
                    <option value="November" id="10">Ноябрь</option>
                    <option value="December" id="11">Декабрь</option>
                  </select>
                </div>
                <div class="dpopdowwn_year">
                  <select class="select_year" name="date_two">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                  </select>
                </div>
              </div>
              <table name='date_application'>
                <thead>
                  <tr>
                    <td>Пн</td>
                    <td>Вт</td>
                    <td>Ср</td>
                    <td>Чт</td>
                    <td>Пт</td>
                    <td>Сб</td>
                    <td>Вс</td>
                  </tr>
                </thead>
                <tbody class="dates" name="date_application"></tbody>
              </table>
            </div>
            <div class="list_hours">
              <p>09:00</p>
              <p>10:00</p>
              <p>11:00</p>
              <p>12:00</p>
              <p>13:00</p>
              <p>14:00</p>
              <p>15:00</p>
              <p>16:00</p>
              <p>17:00</p>
              <p>18:00</p>
              <p>19:00</p>
            </div>
          </div>
        </div>
            </div>
            <div class="step-three-drafing_block">
            <div class="step step_three">Шаг 3:Укажите дополнительную информацию</div>
            <textarea name="information" id="step_three" class="step_three-textarea"></textarea>
        </div>
        </div>
        

        <button type="submit" id="send_application" class="application_btn">подать заявку</button>
        
    </form>          </div>
   </div>

</main>

<?php
    require 'footer.php';
    ?>
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
   
</body>
</html>