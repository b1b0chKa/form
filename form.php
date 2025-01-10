<!DOCTYPE html>
<html>
    <head>
        <title>форма</title>
        <link rel="" href="index.php">
        <link rel="stylesheet" href="style.css" action="index.php">
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="index.php" id="form" method="post">

            <h2 id="prifile">Мой профиль</h2>

            <div id="form_mail">
                <label for="email" id="mail">E-mail*</label>
                <input type="email" id="email" autocomplete="off" name="email" >
            </div>
            <div id="numbers">
                <div id="number_1">
                    <label for="first_number" id="text_for_first_number">Номер телефона*</label>
                    <input type="phone" id="first_number" name="firstNumber" autocomplete="off" >
                </div>
                <div id="number_2">
                    <label for="second_number" id="text_for_second_number">Дополнительный номер</label>
                    <input type="phone" id="second_number" name="secondNumber" autocomplete="off" >
                </div>
            </div>

            <div id="initialis">
                <label for="surname" id="text_for_surname">Фамилия</label>
                <input type="text" id="surname" autocomplete="off" name="surname" >

                <label for="name" id="text_for_name">Имя</label>
                <input type="text" id="name" autocomplete="off" name="name" >

                <label for="middle_name" id="text_for_middle_name">Отчество</label>
                <input type="text" id="middle_name" autocomplete="off" name="midleName" >
            </div>

            <div id="date_of_birth">

                <p id="name_date_of_birth">Дата рождения</p>
                <select name="day" id="day" >
                    <option>День</option>
                    <script>
                        let i = 0;
                        while(i<30)
                        {
                            i++;
                            document.getElementById('day').innerHTML += '<option>'+i+'</option>';
                        }
                    </script>
                </select>
                <select id="month" name="month" > 
                    <option >Месяц</option>
                    <option >Январь</option> 
                    <option>Февраль</option> 
                    <option>Март</option> 
                    <option>Апрель</option> 
                    <option>Май</option> 
                    <option>Июнь</option> 
                    <option>Июль</option> 
                    <option>Август</option> 
                    <option>Сентябрь</option> 
                    <option>Октябрь</option> 
                    <option>Ноябрь</option> 
                    <option>Декабрь</option> 
                </select>

                <select id="year" name="year" required>
                    <option>Год</option>
                    <script>
                        let y = 1950;
                        while(y<2025){
                            y++;
                            document.getElementById('year').innerHTML += '<option>'+y+'</option>';
                        }
                    </script>
                </select>

                
            </div>
            <label for="sex" id="div_man">Пол</label>
            <div id="sex">
                <input type="radio" name="pol" id="male" autocomplete="off" value="man" >
                <label for="male" id="textForSex" class="mailText">Мужской</label>
                    <!-- <img src="tick_black.svg" alt="img" id="img"> -->
                    <!-- <span>Мужской</span><img src="tick_black.svg" alt="img"> -->
                
                
                <input type="radio" name="pol" id="female" autocomplete="off" value="woman" >
                <label for="female" id="textForSex">Женский</label>
                    <!-- <img src="tick_orange.svg" alt="img" id="img"> -->
                
                    <!-- <span>Женский</span><img src-->
            </div>
            <div id="btn">
                <input type="submit" id="button" value="Сохранить изменения">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.getElementById('form');
                        form.addEventListener('submit', formSend);  
                    });

                    async function formSend(e) {
                        e.preventDefault();

                        const formData = new FormData(e.target);
    
                        let response = await fetch('http://localhost:9000/form/index.php' ,{
                            method :'POST',
                            mode : 'cors',  
                            body: formData,
                        });
                        
                    }
                </script>

            </div>
        </form>
    </body>
</html>
